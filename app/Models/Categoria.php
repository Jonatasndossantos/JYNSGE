<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'slug',
        'descricao',
        'cor',
        'ativo'
    ];

    //Accessors, mutators e attribute casting permitem que você transforme valores de atributos do Eloquent quando você os recupera ou define em instâncias de modelo. Por exemplo, você pode querer usar o criptografador do Laravel para criptografar um valor enquanto ele está armazenado no banco de dados e, em seguida, descriptografar automaticamente o atributo quando você acessá-lo em um modelo Eloquent

    protected $casts = [
        'ativo' => 'boolean',
    ];

    // Relacionamentos
    public function noticias()
    {
        return $this->belongsToMany(Noticia::class, 'categoria_noticia');
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
}
