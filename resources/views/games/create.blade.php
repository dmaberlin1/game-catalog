@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-2xl font-bold mb-4">Добавить игру</h1>

        <form action="{{ route('games.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label class="block">Название:</label>
            <input type="text" name="title" class="border p-2 w-full" required>

            <label class="block mt-2">Разработчик:</label>
            <input type="text" name="developer" class="border p-2 w-full" required>

            <label class="block mt-2">Жанр:</label>
            <input type="text" name="genre" class="border p-2 w-full" required>

            <label class="block mt-2">Дата выхода:</label>
            <input type="date" name="release_date" class="border p-2 w-full" required>

            <label class="block mt-2">Платформы:</label>
            <input type="text" name="platform" class="border p-2 w-full" required>

            <label class="block mt-2">Цена ($):</label>
            <input type="number" step="0.01" name="price" class="border p-2 w-full" required>

            <label class="block mt-2">Обложка:</label>
            <input type="file" name="cover_image" class="border p-2 w-full">

            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded mt-4">Сохранить</button>
        </form>
    </div>
@endsection
