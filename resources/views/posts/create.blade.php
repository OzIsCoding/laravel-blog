@section('title') Laravel 12 | Crear @endsection
@push('css')
    <style>
        body {
            color: cyan;
        }
    </style>
@endpush

@push('css')
    <style>
        body {
            background-color: darkslategray;
        }
    </style>
@endpush

<x-app-layout>
    <h1>Crear una publicación</h1>
    <form action="/posts" method="POST">
        @csrf
        <label for="title">Título</label>
        <input type="text" name="title" id="title" placeholder="Título de la publicación" required> <br> <br>

        <label for="category">Categoría</label>
        <input type="text" name="category" id="category" placeholder="Categoría de la publicación" required> <br> <br>
        
        <label for="content">Contenido</label>
        <textarea name="content" id="content" cols="30" rows="10" placeholder="Contenido de la publicación" required></textarea> <br> <br>

        <button type="submit">Crear Publicación</button>
    </form>
    <a href="/posts">Regresar</a>
    </x-app-layout>