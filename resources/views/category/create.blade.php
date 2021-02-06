@extends('base')
@section('title') Crear formularios  @endsection

@section('content')

<form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name">
        <div id="emailHelp" class="form-text">Nunca compartiremos tu email con alguna persona externa</div>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary" >Guardar</button>

</form>

@endsection

