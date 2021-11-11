@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <form class="mt-5 d-flex justify-content-between flex-column" action="{{route('admin.posts.store')}}" method="post">
            @csrf
            <h3>Inserisci il titolo</h3>
                <input class="my-2" type="text" name="title" id="title" placeholder="Titolo">
            <h3>Inserisci l'autore</h3>
                <input class="my-2" type="text" name="author" id="author" placeholder="Autore">
            <h3>Inserisci il contenuto del post</h3>
                <input class="my-2" type="text" name="content" id="content" placeholder="Contenuto del post">
            <h3>Inserisci la data</h3>
                <input class="my-2" type="date" name="date" id="date" placeholder="data">
            <h3>Inserisci l'url per l'immagine da visualizzare</h3>
                <input class="my-2" type="text" name="url" id="url" placeholder="Link immagine">
                <div class="d-flex mt-4">
                    <button type="submit" class="btn btn-success mx-auto ">Inserisci il nuovo post</button>
                    <button type="reset" class="btn btn-warning mx-auto">Cancella</button>
                </div>
            </form>

           <a href="{{route('admin.posts.index')}}"><i class="fas fa-hand-point-left"></i></a>
        </div>
    </div>
@endsection