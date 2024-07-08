<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta description="Minipay Dapp for deposit, spend and earn">
    <link rel="icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">
    <title>{{ $title ?? 'Page Title' }}</title>

@vite('resources/css/app.css')
   
</head>

<body class=" flex mx-auto bg-green-50 h-full">

    {{ $slot }}
</body>

</html>