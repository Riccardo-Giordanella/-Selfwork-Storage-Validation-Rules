<nav class="navbar navbar-expand-md">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('homepage')}}">
      <img src="media/logo.png" alt="logo" class="img-fluid logo d-inline-block align-text-center">
      The Warehouse
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('aggiungi')}}">Aggiungi un articolo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.show')}}">I nostri articoli</a>
        </li>
      </div>
    </div>
  </nav>