@extends('base')
@section('title') Editar base de datos  @endsection

@section('content')

<form action="{{ route('category.update', $cat->id) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field("PATCH")}}
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $cat->name}}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ $cat->description }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary" >Guardar</button>
</form>

@endsection

