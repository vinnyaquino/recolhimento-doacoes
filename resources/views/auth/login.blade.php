<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema ECO</title>
    <link rel="icon" href="https://consultoriaeco.com.br/favicon.ico" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">

    <div class="w-full max-w-md bg-white p-8 rounded shadow">
        <img class="mx-auto h-10 w-auto" src="https://consultoriaeco.com.br/_next/image?url=%2F_next%2Fstatic%2Fmedia%2FLogo.33588eb3.webp&w=1080&q=75" alt="Your Company">
        <h2 class="text-2xl font-bold text-center mt-6 mb-6">Login</h2>

        @if($mensagem = Session::get('erro'))
        <div class="text-red-500 mb-4 text-center">{{ $mensagem }}</div>
        @endif

        <form action="{{ route('login.submit') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="user" class="block text-sm font-medium text-gray-700">Usuário</label>
                <input type="text" name="user" id="user" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                @error('user')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <div class="flex items-center justify-between">
                    <label for="senha" class="block text-sm font-medium text-gray-700">Senha</label>
                </div>
                <input type="password" name="senha" id="senha" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                @error('senha')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="w-full bg-indigo-500 text-white py-2 px-4 rounded hover:bg-indigo-600">
                Entrar
            </button>
        </form>
    </div>
</body>
</html>
