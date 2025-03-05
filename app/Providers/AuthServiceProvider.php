<?php

namespace App\Providers;

use App\Models\Noticia;
use App\Policies\NoticiaPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Noticia::class => NoticiaPolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();
    }
} 