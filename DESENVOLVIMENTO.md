instalacao do laravel padrao
instalacao do brezze padrao
tiramos o vite
colocamos o nosso site
organizamos as pastas e layouts

# Precimanos
Ajustar o layout do site


Criar pagina de perfil, para gerenciar os dados do usuario, inclusive foto
Criar paginas para gerenciar as noticias
area de admin por exemplo

criar o banco de dados relacional com as noticias, categorias e autores
pra isso ja estamos usando o brezze para os usuario e autores, mas precisamos criar as tabelas para as noticias e categorias

Fazer o CRUD para esses dados

## Banco de Dados

Uma tabela categorias com os campos:
id (auto-increment)
nome (string, único)
slug (string, único)
descricao (string, opcional)
cor (string, padrão '#3B82F6')
ativo (boolean, padrão true)
timestamps (created_at, updated_at)

Uma tabela noticias com os campos:
id (auto-increment)
titulo (string)
slug (string, único)
conteudo (text)
linkImg (string, opcional)
status (enum: rascunho, publicado, arquivado)
categoria_id (chave estrangeira para categorias)
user_id (chave estrangeira para users)
published_at (timestamp, opcional)
timestamps (created_at, updated_at)
soft deletes (deleted_at)

```bash
php artisan make:migration create_categorias_table
```
tabela categorias
```php
Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100)->unique(); //unica
            $table->string('slug', 100)->unique();
            $table->string('descricao', 255)->nullable();
            $table->string('cor', 20)->default('#3B82F6'); // cor padrão azul
            $table->boolean('ativo')->default(true); //padrao verdadeiro
            $table->timestamps();
        });
```

```bash
php artisan make:migration create_noticias_table --create=noticias
```
tabela noticias
```php
    Schema::create('noticias', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 255);
            $table->string('slug', 255)->unique();
            $table->text('conteudo');
            $table->string('linkImg')->nullable();
            $table->enum('status', ['rascunho', 'publicado', 'arquivado'])->default('rascunho'); // enumeracao. 1, 2, 3
            $table->foreignId('categoria_id')->constrained('categorias')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            $table->softDeletes(); //lixeira
            // https://albuquerque53.medium.com/entendendo-o-soft-delete-do-laravel-ce097c41214
        });
```


```bash
php artisan migrate:fresh
```

## Model e Controllers

Model Categoria com:
Relacionamento com notícias
Geração automática de slug
Campos fillable e casts configurados

Model Noticia com:
Soft deletes
Relacionamentos com categoria e usuário
Geração automática de slug
Atualização automática de published_at
Scopes para filtrar por status
Campos fillable e casts configurados

Controller CategoriaController com:
CRUD completo
Validações
Verificação antes de excluir
Geração automática de slug

Controller NoticiaController atualizado com:
Novos campos
Relacionamento com categorias
Status em português
Validações atualizadas
Geração de slug
Controle de published_at

```bash
php artisan make:model Categoria -c # cria a model e o -c cria o controller com o mesmo nome categoria e categriaController
```
model

categoria
```php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

use HasFactory;

    protected $fillable = [
        'nome',
        'slug',
        'descricao',
        'cor',
        'ativo'
    ]; // ja sabemos, adicionar


    //Accessors, mutators e attribute casting permitem que você transforme valores de atributos do Eloquent quando você os recupera ou define em instâncias de modelo. Por exemplo, você pode querer usar o criptografador do Laravel para criptografar um valor enquanto ele está armazenado no banco de dados e, em seguida, descriptografar automaticamente o atributo quando você acessá-lo em um modelo Eloquent

    protected $casts = [
        'ativo' => 'boolean',
    ];

    // Relacionamentos
    public function noticias()
    {
        return $this->hasMany(Noticia::class);
    }

    // Mutators
    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($categoria) {
            if (empty($categoria->slug)) {
                $categoria->slug = Str::slug($categoria->nome);
            }
        });

        static::updating(function ($categoria) {
            if ($categoria->isDirty('nome') && empty($categoria->slug)) {
                $categoria->slug = Str::slug($categoria->nome);
            }
        });
    }
```

noticia
```php
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\SoftDeletes;
    use Illuminate\Support\Str;


    use HasFactory, SoftDeletes;

    protected $table = 'noticias';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'titulo',
        'slug',
        'conteudo',
        'linkImg',
        'status',
        'categoria_id',
        'user_id',
        'published_at'
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    // Relacionamentos
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Mutators
    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($noticia) {
            if (empty($noticia->slug)) {
                $noticia->slug = Str::slug($noticia->titulo);
            }
            
            if ($noticia->status === 'publicado' && empty($noticia->published_at)) {
                $noticia->published_at = now();
            }
        });

        static::updating(function ($noticia) {
            if ($noticia->isDirty('titulo') && empty($noticia->slug)) {
                $noticia->slug = Str::slug($noticia->titulo);
            }

            if ($noticia->isDirty('status')) {
                if ($noticia->status === 'publicado' && empty($noticia->published_at)) {
                    $noticia->published_at = now();
                }
                $noticia->touch(); // Force update the updated_at timestamp
            }
        });
    }

    // Scopes  
    //Os escopos globais permitem que você adicione restrições a todas as consultas para um determinado modelo. A funcionalidade de exclusão suave do próprio Laravel utiliza escopos globais para recuperar apenas modelos "não excluídos" do banco de dados.
    public function scopePublicadas($query)
    {
        return $query->where('status', 'publicado');
    }

    public function scopeRascunhos($query)
    {
        return $query->where('status', 'rascunho');
    }

    public function scopeArquivadas($query)
    {
        return $query->where('status', 'arquivado');
    }
```

Controllers

categorias
```php
use Illuminate\Support\Str;

public function index()
    {
        $categorias = Categoria::orderBy('nome')->paginate(10);
        return view('categorias.index', compact('categorias'));
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|max:100|unique:categorias', //unico em catrgorias
            'slug' => 'nullable|max:100|unique:categorias',
            'descricao' => 'nullable|max:255',
            'cor' => 'required|max:20',
            'ativo' => 'boolean'
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['nome']); //método gera um "slug" amigável à URL a partir da string fornecida: ou seja taca - no lugar do espaço
        }

        Categoria::create($validated); //o mesmo que salvar objeto

        return redirect()->route('categorias.index')
            ->with('success', 'Categoria criada com sucesso!');
    }

    public function edit(Categoria $categoria)
    {
        return view('categorias.edit', compact('categoria'));
    }

    public function update(Request $request, Categoria $categoria)
    {
        $validated = $request->validate([
            'nome' => 'required|max:100|unique:categorias,nome,' . $categoria->id, //nao entendi
            'slug' => 'nullable|max:100|unique:categorias,slug,' . $categoria->id,
            'descricao' => 'nullable|max:255',
            'cor' => 'required|max:20',
            'ativo' => 'boolean'
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['nome']);
        }

        $categoria->update($validated);

        return redirect()->route('categorias.index')
            ->with('success', 'Categoria atualizada com sucesso!');
    }

    public function destroy(Categoria $categoria)
    {
        if ($categoria->noticias()->exists()) {
            return redirect()->route('categorias.index')
                ->with('error', 'Não é possível excluir uma categoria que possui notícias!');
        }

        $categoria->delete(); // estranhamente é so isso

        return redirect()->route('categorias.index')
            ->with('success', 'Categoria excluída com sucesso!');
    }
```

noticia
```php

use App\Models\Categoria;
use Illuminate\Support\Facades\Storage; //permite guardar arquivos e claro as funçoes pra isso
use Illuminate\Support\Str;

public function index()
    {
        $noticias = Noticia::with(['categoria', 'user'])
            ->orderBy('published_at', 'desc')
            ->paginate(10); 
        return view('noticias.index', compact('noticias'));
    }

    public function create()
    {
        $categorias = Categoria::where('ativo', true)
            ->orderBy('nome')
            ->get();
        return view('noticias.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|max:255',
            'slug' => 'nullable|max:255|unique:noticias',
            'conteudo' => 'required',
            'linkImg' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', //
            'status' => 'required|in:rascunho,publicado,arquivado',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        $noticia = new Noticia();
        $noticia->titulo = $validated['titulo'];
        $noticia->slug = empty($validated['slug']) ? Str::slug($validated['titulo']) : $validated['slug'];
        $noticia->conteudo = $validated['conteudo'];
        $noticia->status = $validated['status'];
        $noticia->categoria_id = $validated['categoria_id'];
        $noticia->user_id = auth()->id();

        if ($request->hasFile('linkImg')) { //se tiver arquivo
            $path = $request->file('linkImg')->store('noticias', 'public'); // guardar na pasta public em noticias
            $noticia->linkImg = $path;
        }

        if ($noticia->status === 'publicado') {
            $noticia->published_at = now(); //Agora
        }

        $noticia->save();

        return redirect()->route('profile.edit')
            ->with('success', 'Notícia criada com sucesso!');
    }

    public function show(Noticia $noticia)
    {
        return view('noticias.show', compact('noticia'));
    }

    public function edit(Noticia $noticia)
    {
        
        $categorias = Categoria::where('ativo', true)
            ->orderBy('nome')
            ->get();
        return view('noticias.edit', compact('noticia', 'categorias'));
    }

    public function update(Request $request, Noticia $noticia)
    {

        $validated = $request->validate([
            'titulo' => 'required|max:255',
            'slug' => 'nullable|max:255|unique:noticias,slug,' . $noticia->id,
            'conteudo' => 'required',
            'linkImg' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:rascunho,publicado,arquivado',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        $noticia->titulo = $validated['titulo'];
        $noticia->slug = empty($validated['slug']) ? Str::slug($validated['titulo']) : $validated['slug'];
        $noticia->conteudo = $validated['conteudo'];
        $noticia->status = $validated['status'];
        $noticia->categoria_id = $validated['categoria_id'];

        if ($request->hasFile('linkImg')) {
            // Delete old image
            if ($noticia->linkImg) {
                Storage::disk('public')->delete($noticia->linkImg); //
            }
            // Store new image
            $path = $request->file('linkImg')->store('noticias', 'public');
            $noticia->linkImg = $path;
        }

        if ($noticia->status === 'publicado' && empty($noticia->published_at)) {
            $noticia->published_at = now();
        }

        $noticia->save();

        return redirect()->route('profile.edit')
            ->with('success', 'Notícia atualizada com sucesso!');
    }

    public function destroy(Noticia $noticia)
    {

        if ($noticia->linkImg) {
            Storage::disk('public')->delete($noticia->linkImg); //
        }

        $noticia->delete();

        return redirect()->route('profile.edit')
            ->with('success', 'Notícia excluída com sucesso!');
    }
```


## Views

Views para gerenciar categorias:
index.blade.php: Lista todas as categorias com opções para editar e excluir
create.blade.php: Formulário para criar novas categorias
edit.blade.php: Formulário para editar categorias existentes

Views de notícias atualizadas:
create.blade.php: Agora inclui seleção de categoria com preview
edit.blade.php: Formulário completo para editar notícias com preview

Menu do usuário atualizado com:
Link para o perfil
Link para criar nova notícia
Link para gerenciar categorias
Botão de logout

Funcionalidades adicionadas:
Geração automática de slug para categorias e notícias
Preview em tempo real ao criar/editar notícias
Validações no backend
Mensagens de sucesso/erro
Proteção contra exclusão de categorias com notícias
Cores personalizadas para cada categoria

web
```php

use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\CategoriaController;


// Authenticated routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', function () { return view('home'); })->name('home');
    
    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // News routes
    Route::resource('noticias', NoticiaController::class); //Às vezes, você pode precisar definir rotas para um recurso aninhado. Por exemplo, um recurso de foto pode ter vários comentários que podem ser anexados à foto. Para aninhar os controladores de recurso, você pode usar a notação "ponto" na sua declaração de rota:
    //https://laravel.com/docs/12.x/controllers#restful-nested-resources
    
    // Category routes
    Route::resource('categorias', CategoriaController::class);
});
```

e nas paginas taquei um for. preguiça de colocar aqui.

eu usei o quill para o editor de texto. tmb to com preguiça.






## Coisas uteis



```php
use Illuminate\Support\Facades\Storage;

if ($request->hasFile('linkImg')) {
            $path = $request->file('linkImg')->store('noticias', 'public');
            $noticia->linkImg = $path;
        }

        'linkImg' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

if ($request->hasFile('linkImg')) {
            // Delete old image
            if ($noticia->linkImg) {
                Storage::disk('public')->delete($noticia->linkImg);
            }
            // Store new image
            $path = $request->file('linkImg')->store('noticias', 'public');
            $noticia->linkImg = $path;
        }

if ($noticia->linkImg) {
            Storage::disk('public')->delete($noticia->linkImg);
        }
```
```bash
php artisan storage:link #cria uma pasta no public para guardar as imagens

php artisan make:migration add_status_to_noticias_table --table=noticias
```

```php
dd([ //Para mostrar os dados no arquivo php antes do return
            'user_id' => Auth::id(),
            'noticias' => $noticias,
            'total' => $noticias->total(),
            'current_page' => $noticias->currentPage(),
        ]);
```

```bash
php artisan tinker
```
https://laravel.com/docs/11.x/artisan
REPL
Um read-eval-print loop é um ambiente de execução de alguma linguagem de programação que permite ao programador executar pequenas instruções diretamente num console/shell, sem precisar salvar o código num arquivo de script.


## FDS
Baixei o filament
fui na pasta do php, tirei a virgula do extension=intl

composer require filament/filament

php artisan filament:install --panels

php artisan make:filament-user
coloquei meu usuario

deu alguns erros no front pq eu esqueci de baixar o livewire antes.
e por achar que era pq nao tinha o npm, virou um frankstain.

fds segui em diante

php artisan make:model News -m
php artisan make:model Category -m

taquei as variaveis

php artisan make:filament-resource Category
php artisan make:filament-resource News

taquei as variaveis e as relacoes

php artisan migrate --path=/database/migrations/xxxx_xx_xx_create_categories_table.php // individual
php artisan migrate --path=/database/migrations/xxxx_xx_xx_create_news_table.php

se der algum erro 
php artisan cache:clear
php artisan config:clear
php artisan view:clear

nao deu bom
desisti, muito pesado 328mb, o nosso projeto tinha 175mb e ja tava pesado.
e muito complicado, alem de nao ser maliavel, slk num compensa

