<!DOCTYPE html>
<!-- utilizando o helper config para buscar o idioma do site -->
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} - @yield('title') </title>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>

<body class="bg-gray-50">
    <div class="container mx-auto py-8">
        <!-- diretiva yield para montar a estrutura do site -->
        @yield('content')
    </div>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
