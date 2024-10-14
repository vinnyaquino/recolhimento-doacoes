<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistema ECO')</title>
    <link rel="icon" href="https://consultoriaeco.com.br/favicon.ico" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Conteúdo da página --}}
    <div class="container mx-auto py-10">
        @yield('content')
    </div>
</body>
</html>
