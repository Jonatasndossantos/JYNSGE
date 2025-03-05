<?php

namespace App\Policies;

use App\Models\Noticia;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class NoticiaPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Noticia $noticia)
    {
        return $user->id === $noticia->user_id;
    }

    public function update(User $user, Noticia $noticia)
    {
        return $user->id === $noticia->user_id;
    }

    public function delete(User $user, Noticia $noticia)
    {
        return $user->id === $noticia->user_id;
    }
} 