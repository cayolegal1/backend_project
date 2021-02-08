@foreach (['danger','warning','success','info'] as $mensaje )
@if (Session::has("alert-$mensaje"))
    <div class="alert alert-{{ $mensaje }} alert-dismissible fade show" role="alert">
        {{ Session::get( "alert-$mensaje" ) }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
    </div>

@endif
@endforeach


