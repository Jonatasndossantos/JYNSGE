<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Noticia extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'noticias';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'titulo',
        'slug',
        'conteudo',
        'linkImg',
        'status',
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

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class, 'categoria_noticia');
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
}