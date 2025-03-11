<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Perfil extends Model
{
    /** @use HasFactory<\Database\Factories\PerfilFactory> */
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'id';

    protected $fillable = [
        'bio',
        'biografia',
        'linkImg',
        'sociais',
        'tipoUser',
        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
