@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h1>Se riesci a vederlo, ho fatto bene il collegamento...</h1>
                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} 
                </div>
                <a  class="btn btn-primary" href="{{route('admin.posts.index')}}">Vai ai Post!</a>
            </div>
        </div>
    </div>
</div>
@endsection
