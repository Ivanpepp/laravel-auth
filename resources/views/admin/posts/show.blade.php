@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}<a class="back-to-list btn btn-secondary" href="{{route('admin.posts.index')}}">Torna alla lista</a></div>
                
                <div class="card-body" id="show-card-body">
                  <img class="img-fluid shadow" src="{{$post->url}}" alt="{{$post->title}}">
                  <h1>{{$post->title}}</h1>
                  <p>{{$post->content}}</p>
                  <address><strong>Autore:</strong> {{$post->author}}</address>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
