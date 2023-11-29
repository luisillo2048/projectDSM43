@extends("layouts.layout")
@section("title", "Inicio - ILoveTraveling")
@section("content")
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->


<header>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="nuevoLink">ILoveTraveling</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
             <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index">Inicio</a>
            </li> 
             <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="lugares/index" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Lugares 
            </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="lugares/categorias">Categorías</a></li>
                <li><a class="dropdown-item" href="lugares/municipios">Municipios</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="lugares/index">Explorar sitios</a></li>
              </ul> 
            </li>
            <li class="nav-item">
              <a class="nav-link" href="foo">Contacto</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form> 

          <br><br>
          <!-- <div class="nav-item text-end">
            <a class="btn btn-primary" href="{{ route('auth.login') }}" role="button">Iniciar</a>
            <a class="btn btn-primary" href="#" role="button">Registrarse</a>
          </div>         -->
        </div>       
      </div>
    </nav>
  </header>
  <div class="container-fluid">
    <div class="card bg-dark text-white">
      <img src="{{ asset('img/canon.jpg') }}" class="card-img" alt="...">
      <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center texint">
        <h1 class="card-title">¡Echa un vistazo a lo que puedes hacer!</h5>
        <p class="card-text">Tu guía para visitar el Valle de Toluca</p>
        <a class="btn btn-primary" href="#ini" role="button">Empezar</a>
      </div>
    </div>

    <div class="featured" id="ini">
      <h3 class="texcentro">Aqui Podras Agregar Distintos Atributos </h3>
      <div class="d-flex justify-content-evenly" id="eleicons">
          <div>
              <img class="iconsi" src="{{asset('img/icons/compass.png')}}" alt="">

              <p class="texcentro">Insertar</p>
              <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Selecciona una opción
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <!-- Opciones de la lista desplegable -->
                    <a class="dropdown-item" href="#">Opción 1</a>
                    <a class="dropdown-item" href="#">Opción 2</a>
                    <a class="dropdown-item" href="#">Opción 3</a>
                    </div>
                </div>
                </div>
               
          </div>
          <div>
              <img class="iconsi" src="{{ asset('img/icons/mountain.png') }}" alt="">
              <p class="texcentro">Descubrir nuevas experiencias</p>
          </div>
          <div>
              <img class="iconsi" src="{{ asset('img/icons/pin.png') }}" alt="">
              <p class="texcentro">Planear tu próxima salida</p>
          </div>
      </div>
    </div>

    <div class="featured">
      <h3 class="texcentro">Lugares destacados</h3>
      <div class="container text-center">
          <div class="row row-cols-4 justify-content-center">
            <!-- Aquí iría un foreach con paginado -->
          </div>
      </div>
    </div>

    <div class="featured">
      <h3 class="texcentro">Municipios</h3>
      <div class="container text-center">
        <div class="row row-cols-4 justify-content-center">
          <!-- Aquí iría un foreach con paginado -->
        </div>
      </div>
    </div>
    <div class="container-fluid">

    <!-- Footer -->
    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-6 py-5 my-5 border-top">
      <div class="col mb-3">
        <a href="index" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="index"></use></svg>
        </a>
        <p class="text-body-secondary"><a href="index" class="nav-link p-0 text-body-secondary">ILoveTraveling</a></p>
      </div>

      <div class="col mb-3">
        <h5><a href="lugares/index" class="nav-link p-0 text-body-secondary">Lugares</a></h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="lugares/categorias" class="nav-link p-0 text-body-secondary">Categorías</a></li>
          <li class="nav-item mb-2"><a href="lugares/municipios" class="nav-link p-0 text-body-secondary">Municipios</a></li>
          <li class="nav-item mb-2"><a href="lugares/index" class="nav-link p-0 text-body-secondary">Explorar sitios</a></li>
        </ul>
      </div>

      <div class="col mb-3">
        <h5><a href="foo" class="nav-link p-0 text-body-secondary">Contacto</a></h5>
      </div>

      <p id="copy" class="container-fluid">© ILoveTraveling. Todos los derechos reservados</p>
    </footer>
  </div>
</body>
</html>
@endsection

