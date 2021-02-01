@extends('base')
@section('title') Crear formularios  @endsection

@section('content')

<form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="mb-3" style="margin-top: 70px;">
        <label for="title" class="form-label">Título</label>
        <input type="text" class="form-control" id="title" name="title">
        <div id="emailHelp" class="form-text">Nunca compartiremos tu email con alguna persona externa</div>
    </div>
    <div class="mb-3">
        <label for="author" class="form-label">Autor</label>
        <input type="text" class="form-control" id="author" name="author">
    <div class="mb-3">
        <label for="image" class="form-label">Imagen</label>
        <input type="file" class="form-control" id="image" name="image">
    </div>
    <div class="mb-3">
        <label for="summary" class="form-label">Resumen</label>
        <textarea class="form-control" name="summary" id="summary" cols="30" rows="5"></textarea>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descripción</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary" >Guardar</button>

</form>

@endsection


