@extends("layouts.layout")
@section("title", "Explorar lugares  - ILoveTraveling")
@section("content")
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="../index">ILoveTraveling</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Inicio</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="lugares" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Lugares
            </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="categorias">Categorías</a></li>
                <li><a class="dropdown-item" href="municipios">Municipios</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="lugares">Explorar sitios</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../contacto">Contacto</a>
            </li>
          </ul>

          <br><br>

          <!-- ya no se ocupa
          <div class="nav-item text-end">
            <a class="btn btn-primary" href="#" role="button">Iniciar sesión</a>
            <a class="btn btn-primary" href="#" role="button">Registrarse</a>
          </div>         -->
        </div>       
      </div>
    </nav>
  </header>

  <div class="container-fluid">
    <div class="card bg-dark text-white">
        <img src="../img/turista.avif" class="card-img" alt="...">
        <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center texint">
            <h1 class="card-title">Explora por municipio</h5>
        </div>
    </div>

    <div class="featured">
        <div class="container">
            <div class="row">
            
                <!-- Columna tarjetas -->
                <section class="py-5">
                        <div class="container">
                            <div class="row">
                                @foreach($posts as $categoria)
                                    <div class="col-md-3 mb-3">
                                        <div class="card">
                                            <img src="{{ asset('img/fff.png') }}" alt="" class="card-img-top">
                                            <h3>Precio = {{ $categoria->nombre }}</h3>
                                           
                                         
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                <!-- Termina columna tarjetas -->
                </div>
            <!-- Termina fila -->
            </div>
        <!-- Termina contenedor -->
        </div>
    </div>

  <!-- Cierra contenedor flluido-->
  </div>

  <div class="container-fluid">
    <!-- Footer -->
    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-6 py-5 my-5 border-top">
      <div class="col mb-3">
        <a href="../index" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="../#bootstrap"></use></svg>
        </a>
        <p class="text-body-secondary"><a href="../index" class="nav-link p-0 text-body-secondary">ILoveTraveling</a></p>
      </div>

      <div class="col mb-3">
        <h5><a href="lugares" class="nav-link p-0 text-body-secondary">Lugares</a></h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="lugaresCat" class="nav-link p-0 text-body-secondary">Categorías</a></li>
          <li class="nav-item mb-2"><a href="municipios" class="nav-link p-0 text-body-secondary">Municipios</a></li>
          <li class="nav-item mb-2"><a href="lugares" class="nav-link p-0 text-body-secondary">Explorar sitios</a></li>
        </ul>
      </div>

      <div class="col mb-3">
        <h5><a href="../contacto" class="nav-link p-0 text-body-secondary">Contacto</a></h5>
      </div>

      <p id="copy" class="container-fluid">© ILoveTraveling. Todos los derechos reservados</p>
    </footer>
  </div>
@endsection