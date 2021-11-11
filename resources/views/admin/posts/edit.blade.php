@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <form class="mt-5 d-flex justify-content-between flex-column" action="{{route('admin.posts.update', $post)}}" method="post">
            @csrf
            @method('PATCH')
            <h3>Modifica il titolo</h3>
                <input class="my-2" type="text" name="title" id="title" placeholder="Titolo" value="{{$post->title}}">
            <h3>Modifica l'autore</h3>
                <input class="my-2" type="text" name="author" id="author" placeholder="Autore" value="{{$post->author}}">
            <h3>Modifica il contenuto del post</h3>
                <input class="my-2" type="text" name="content" id="content" placeholder="Contenuto del post" value="{{$post->content}}">
                <h3>Modifica la data</h3>
                <input class="my-2" type="date" name="date" id="date" placeholder="data" value="{{$post->date}}" >
            <h3>Modifica l'url per l'immagine da visualizzare</h3>
                <input class="my-2" type="text" name="url" id="url" placeholder="Link immagine" value="{{$post->url}}">
                <div class="d-flex mt-4">
                    <button type="submit" class="btn btn-primary mx-auto ">Invia modifiche e salva</button>
                    <button type="reset" class="btn btn-warning mx-auto">Cancella</button>
                </div>
            </form>

           <a href="{{route('admin.posts.index')}}"><i class="fas fa-hand-point-left"></i></a>
        </div>
    </div>
@endsection