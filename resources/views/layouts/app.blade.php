<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог игр</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

<nav class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
        <a href="{{ route('games.index') }}" class="text-lg font-bold">Каталог игр</a>
    </div>
</nav>

<div class="container mx-auto p-4">
    @yield('content')
</div>

</body>
</html>
