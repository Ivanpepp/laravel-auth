@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       
                   <table class="table">
                       <thead>
                        <th>Titolo:</th>
                        <th>Autore:</th>
                        <th>Data:</th>
                       </thead>                      
                   </table>
                   <tbody>
                       @forelse ($posts  as $post)
                           <td><a href="">{{ $post->title }}</a></td>
                           <td>{{ $post->author }}</td>
                           
                       @empty
                           <tr colspan="3">
                            <td>Non ci sono articoli da visualizzare... controlla il DB</td>
                           </tr>
                       @endforelse
                   </tbody>
    </div>
</div>
@endsection
