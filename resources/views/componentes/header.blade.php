<header>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">MundosE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="{{ route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('post.index')}}">Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('category.index')}}">Categorías</a>
          </li>
        </ul>
        <form action="{{ route('post.search') }}"  method="POST"  class="d-flex">
            {{ csrf_field() }}
          <input class="form-control me-2" type="search" placeholder="Search" name="search" aria-label="Search">
          <button class="btn btn-outline-success boton" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>
