<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse  align-items-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
        </li>



        <li class="nav-item">
          <a class="nav-link" href="{{route('product.index')}}">Prodotti</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.index')}}">Articoli</a>
        </li>

        @Auth{{-- se l utente ha l autenticazione --}}
        <div class="dropdown">
          <button class="btn dropdown-toggle border-0 " id="dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi text-white bi-plus-square-dotted"></i>
          </button>
          <ul class="dropdown-menu bg-dark">
            <li class="nav-item">
              <a class="nav-link" href="{{route('product.create')}}">Crea prodotti</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('article.create')}}">Crea Articolo</a>
            </li>
          </ul>
        </div>
        @endauth

        @guest
        {{-- se l utente non è registrato --}}
        <div class="dropdown">
          <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi text-white bi-person-circle"></i>
          </a>
          <ul class="dropdown-menu bg-dark">
            <li class="nav-item">
              <a class="nav-link" href="{{route('register')}}">Registrati</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('login')}}">Accedi</a>
            </li>
          </ul>
        </div>

        @endguest

        @auth
        <li class="nav-item ">
          <form
          method="POST"
          action="{{route('logout')}}">
          @csrf
          <button class="nav-link" type="submit"><i class="bi  bi-door-open-fill"></i></button>
        </form>
      </li>
        @endauth

    </ul>
  </div>
</div>
</nav>