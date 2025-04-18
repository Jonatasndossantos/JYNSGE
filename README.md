📰 JYNSGE - Jornalismo e Notícias com Segurança e Gestão Eficiente
O JYNSGE é um portal de notícias tecnológicas desenvolvido como projeto integrador de um curso técnico em informática, com foco na modernização do jornalismo digital e no combate à desinformação.

O sistema oferece uma plataforma robusta para leitura e publicação de conteúdos, integrando fontes externas via API, autenticação segura com Google e GitHub, e funcionalidades de administração para categorizar, moderar e destacar conteúdos de forma eficaz.

🔍 Destaques do Projeto

✅ Arquitetura MVC com Laravel, Blade e Tailwind CSS

✅ Integração com APIs externas (ex: RSS de sites confiáveis)

✅ Sistema de autenticação com Laravel Breeze, Google e GitHub

✅ Interface moderna e responsiva com Tailwind CSS

✅ Diferenciação entre notícias oficiais e publicações de usuários

✅ Upload de imagens, comentários e categorização por tema

✅ Painel administrativo para controle de conteúdo

✅ Hospedado no Azure App Service (durante a fase ativa)

✅ Testes manuais e com PEST (abordagem didática)

![image](https://github.com/user-attachments/assets/33006547-eee8-445c-a724-4b0af26f1cb4)


## 🔧 Instalação e Configuração

1. Clone o repositório:
```bash
git clone [url-do-repositorio]
cd [nome-do-projeto]
```

2. Instale as dependências do PHP:
```bash
composer update
```

3. Configure o ambiente:
```bash
cp .env.example .env
```
```bash
php artisan key:generate
```

4. Configure o banco de dados no arquivo .env:
```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=jynsge
DB_USERNAME=root
DB_PASSWORD=
```

5. Execute as migrações:
```bash
(php artisan migrate) -and (php artisan db:seed)
```
se ele pedir para criar algum arquivo, digite *yes*.

6. Execute a criação do local de armazenamento:
```bash
php artisan storage:link
```


7. Inicie o servidor:
```bash
php artisan serve
```



<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
