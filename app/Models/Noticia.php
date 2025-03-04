<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = 'noticias';
    protected $primaryKey = 'codigo';
    
    protected $fillable = [
        'titulo',
        'linkImg',
        'texto',
        'resumo',
        'dtPublicacao',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}