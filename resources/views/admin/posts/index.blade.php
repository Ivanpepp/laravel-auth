@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
       <a href="{{route('admin.posts.create')}}" class="btn btn-primary">Crea un nuovo post</a>
                   <table class="table">
                       <thead>
                        <th>Titolo:</th>
                        <th>Autore:</th>
                        <th>Data:</th>
                       </thead>    
                       <tbody>
                        @forelse ($posts  as $post)
                         <tr>
                             <td><a href="{{route('admin.posts.show', $post)}}">{{ $post->title }}</a></td>
                             <td>{{ $post->author }}</td>
                             <td>{{$post->getFormattedDate('date')}}</td>
                         </tr>
                            
                        @empty
                            <tr colspan="3">
                             <td>Non ci sono articoli da visualizzare... controlla il DB</td>
                            </tr>
                        @endforelse
                    </tbody>                  
                   </table>
                 
    </div>
</div>
@endsection
