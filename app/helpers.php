<?php

if (!function_exists('get_user_avatar')) {
    function get_user_avatar($user) {
        if ($user->perfil && $user->perfil->linkImg) {
            return Storage::url($user->perfil->linkImg);
        }
        return asset('assets/media/default-avatar.png');
    }
}
