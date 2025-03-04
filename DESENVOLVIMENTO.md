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

Fazr o CRUD para esses dados
Salvar
```php
public function store(request $request){
        $data = $request->input('dataEvento'); //Passando as variaves
        $descricao = $request->input('descricaoTexto');
        //Inserindo os dados da tabela
        $model = new modelAgenda(); // transformando em objeto
        $model->dataEvento = $data;
        $model->descricao = $descricao;

        $model->save();//armazena o objeto
        
        return redirect('/cadastrar'); //voltar
    }//fim metodo requisicao de cadastro
```
















# Ideias para dps
### registrar com o google in laravel

Para registrar-se com o Google no Laravel, é necessário configurar um projeto do Google Cloud e um ID do cliente OAuth. 
Configurar o projeto do Google Cloud 
Acessar o console do Google Cloud
Fazer login com a conta do Google
Selecionar "Novo Projeto"
Preencher os detalhes solicitados
Clicar em "Criar projeto"
Abrir o menu do lado esquerdo do console
Selecionar "APIs e serviços" > "Credenciais"
Clicar em "Criar credenciais" > "ID do cliente OAuth"

https://www.youtube.com/watch?v=BgljE23RvDE&t=2s