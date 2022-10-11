@php
function getIfActive($url)
{
    if (Route::current()->uri == $url) {
        return 'active fw-bold';
    }
    else{
        return 'fw-semibold';
    }
}
@endphp

<nav class="navbar navbar-expand-lg bg-light p-0">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="{{ url('img/logo-k.png') }}" width="70" height="70" class="me-2">Help for help</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @guest
                <li class="nav-item">
                    <a class="nav-link {!! getIfActive('login') !!}" aria-current="page"
                        href="{{ url('/login') }}">Login</a>
                </li>
                @endguest
                @auth
                <li class="nav-item">
                    <a class="nav-link {!! getIfActive('logout') !!}" aria-current="page"
                        href="{{ url('/logout') }}">Logout</a>
                </li>
                @endauth
                <li class="nav-item">
                    <a class="nav-link {!! getIfActive('tutorial') !!}" aria-current="page"
                        href="{{ url('/tutorial') }}">Tutorial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {!! getIfActive('form') !!}" aria-current="page"
                        href="{{ url('/form') }}">Giving Back</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {!! getIfActive('resources') !!}" aria-current="page"
                        href="{{ url('/resources') }}">Resources</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {!! getIfActive('/') !!}" aria-current="page"
                        href="{{ url('/') }}">Home</a>
                </li>
                <!--<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>-->
            </ul>
            <!--<form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>-->
        </div>
    </div>
</nav>
