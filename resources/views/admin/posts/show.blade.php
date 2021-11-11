@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Dashboard') }}
                    <a class=" btn btn-primary" href="{{route('admin.posts.edit', $post->id)}}">Modifica Post</a>
                    <a class=" btn btn-secondary" href="{{route('admin.posts.index')}}">Torna alla lista</a></div>
                
                <div class="card-body" id="show-card-body">
                  <img class="img-fluid shadow" src="{{$post->url}}" alt="{{$post->title}}">
                  <h1 class="mb-5">{{$post->title}}</h1>
                  <p> {{$post->content}}</p>
                  <div class="d-flex mt-5">
                    <address><strong>Autore:</strong> {{$post->author}}</address>
                    <span class="mx-4"><strong> Aggiunto il:</strong> {{$post->getFormattedDate('date')}}</span>
                  </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
