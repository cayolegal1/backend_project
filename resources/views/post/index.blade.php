@extends('base')
@section('title') Inicio @endsection

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
            <a class="navbar-brand nuevo" href="{{ route('post.create') }}"> + Nuevo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
 <table class="table">
     <thead>
         <tr>
             <th> {{ "ID" }}</th>
             <th> {{ "Image" }}</th>
             <th> {{ " Title " }}</th>
             <th> {{ "Author" }}</th>
             <th> {{ " Actions " }}</th>
         </tr>

     </thead>
     <tbody>

         @if (count($posts) >= 1)
         @foreach ($posts as $post)


         <tr>
             <td scope="row"> {{ $post->id }} </td>
             <td > <img src=" {{asset('storage'). './'. $post->image }}" alt="" width="100" > </td>
             <td> {{ $post->title }} </td>
             <td> {{ $post->author }}</td>
             <td>
                 <a href="{{ route ('post.edit', $post->id )}}" class="btn bt-sm btn-primary editar"> Editar</a>
                 <form action="{{route("post.destroy", $post->id)}} " method="post">
                    {{ csrf_field() }}
                    {{ method_field("DELETE")}}
                    <button type="submit" class="btn bt-sm btn-danger eliminar"  onclick="return confirm('¿Desea eliminar este registro?')"> Eliminar</button>

                 </form>
             </td>
         </tr>
         @endforeach
         @else
         <tr>
             <td scope="row">
                 {{ "No se encontraron datos" }}
             </td>
         </tr>
         @endif
     </tbody>
 </table>

@endsection

