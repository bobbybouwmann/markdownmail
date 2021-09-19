<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head prefix="og: http://ogp.me/ns#">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - The easiest way to generate a Laravel Markdown Theme</title>

    <meta name="description" content="If you want to create a Laravel Markdown Theme there is not easier way than using this tool.">
    <meta property="og:description" content="{{ config('app.name', 'Laravel') }} - The easiest way to generate a Laravel Markdown Theme">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_US">
    <meta property="og:title" content="MarkdownMail">
    <meta property="og:site_name" content="MarkdownMail">
    <meta property="og:determiner" content="the">
    <link rel="canonical" href="https://markdownmail.com/">
    <meta property="og:url" content="https://markdownmail.com/">
    <meta property="og:image" content="https://markdownmail.com/images/example.png">
    <meta property="og:image:secure_url" content="https://markdownmail.com/images/example.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
      window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>