@extends('base')
@section('title') Categorías @endsection

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
            <a class="navbar-brand nuevo" href=" {{ route('category.create') }} "> + Nuevo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
<table class="table">
    <thead>
        <tr>
            <th> {{ "ID" }}</th>
            <th> {{ "Name" }}</th>
            <th> {{ " Description " }}</th>
            <th> {{ " Actions " }}</th>
        </tr>
    </thead>
    <tbody>
        @if (count($categories) >= 1 )
        @foreach ($categories as $cat)

        <tr>
            <td scope="row"> {{$cat->id}} </td>
            <td> {{$cat->name}} </td>
            <td>{{$cat->description}} </td>
            <td> <a href=" {{ route('category.edit', $cat->id)}}" class="btn bt-sm btn-primary editar"> Editar</a>
                <form action=" {{ route("category.destroy", $cat->id) }}" method="post">
                   {{ csrf_field() }}
                   {{ method_field("DELETE")}}
                   <button type="submit" class="btn bt-sm btn-danger eliminar"  onclick="return confirm('¿Desea eliminar este registro?')"> Eliminar</button> </td>
                </form>

        </tr>




        @endforeach

         @else
        <tr>
            <td scope="row">{{ "No se encontraron datos" }}</td>
        </tr>

        @endif
    </tbody>
</table>


@endsection

