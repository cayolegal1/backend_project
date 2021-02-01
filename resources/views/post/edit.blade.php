@extends('base')
@section('title') Editar formularios  @endsection

@section('content')

<form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field("PATCH")}}
    <div class="mb-3">
        <label for="title" class="form-label">Título</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $post->title}}">
    </div>
    <div class="mb-3">
        <label for="author" class="form-label">Autor</label>
        <input type="text" class="form-control" id="author" name="author" value="{{ $post->author}}">
    <div class="mb-3">
        <label for="image" class="form-label">Imagen</label>
        <input type="file" class="form-control" id="image" name="image" value="{{ $post->image}}">
    </div>
    <div class="mb-3">
        <label for="summary" class="form-label">Resumen</label>
        <textarea class="form-control" name="summary" id="summary" cols="30" rows="5">{{ $post->summary }}</textarea>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descripción</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ $post->description }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary" >Guardar</button>

</form>

@endsection



