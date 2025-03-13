<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    
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

<!-- Page Heading -->
@if (isset($header))


{{ $header }}


@endif

<!-- Page Content -->

    {{ $slot }}


<script src="{{ url ('/assets/app-DDAX_FZV.js')}}"></script>
<script type="text/javascript" defer="" src="{{ url ('assets/app-BpZz5RQ0.js')}}"></script>

@stack('scripts')

</body>
</html>