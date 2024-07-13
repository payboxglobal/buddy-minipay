<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta description="Minipay Dapp for deposit, spend and earn">
    <link rel="icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">
    <title>{{ $title ?? 'Page Title' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class=" bg-green-50 w-screen h-screen">

    {{ $slot }}

</body>

</html>