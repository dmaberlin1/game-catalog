@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-2xl font-bold mb-4">Редактировать игру</h1>

        <form action="{{ route('games.update', $game) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label class="block">Название:</label>
            <input type="text" name="title" class="border p-2 w-full" value="{{ $game->title }}" required>

            <label class="block mt-2">Разработчик:</label>
            <input type="text" name="developer" class="border p-2 w-full" value="{{ $game->developer }}" required>

            <label class="block mt-2">Жанр:</label>
            <input type="text" name="genre" class="border p-2 w-full" value="{{ $game->genre }}" required>

            <label class="block mt-2">Дата выхода:</label>
            <input type="date" name="release_date" class="border p-2 w-full" value="{{ $game->release_date }}" required>

            <label class="block mt-2">Платформы:</label>
            <input type="text" name="platform" class="border p-2 w-full" value="{{ $game->platform }}" required>

            <label class="block mt-2">Цена ($):</label>
            <input type="number" step="0.01" name="price" class="border p-2 w-full" value="{{ $game->price }}" required>

            <label class="block mt-2">Обложка:</label>
            <input type="file" name="cover_image" class="border p-2 w-full">

            @if ($game->cover_image)
                <img src="{{ asset('storage/' . $game->cover_image) }}" alt="Текущая обложка" width="100">
            @endif

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded mt-4">Обновить</button>
        </form>
    </div>
@endsection
