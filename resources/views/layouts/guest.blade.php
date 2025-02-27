<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png')}}">

    <link rel="icon" type="image/png" sizes="32x32" media="(prefers-color-scheme: dark)"
        href="{{URL ('assets/media/favicon-32x32-dark-mode.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" media="(prefers-color-scheme: dark)"
        href="{{URL ('assets/media/favicon-16x16-dark-mode.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" media="(prefers-color-scheme: light)"
        href="{{URL ('assets/media/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" media="(prefers-color-scheme: light)"
        href="{{URL ('assets/media/favicon-16x16.png')}}">

    <link rel="stylesheet" href="{{ url ('/assets/app-DDAX_FZV.css')}}">
    </head>
    <body class="font-sans text-gray-900 antialiased">
        
                {{ $slot }}
            
        
    </body>
</html>
