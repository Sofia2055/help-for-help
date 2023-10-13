@php
    function getIfActive($url)
    {
        $position = strpos(Route::current()->uri, '{');
        $currentRoute = substr(Route::current()->uri, 0, $position == false ? strlen(Route::current()->uri) : $position - 1);

        if (str_contains($currentRoute, $url)) {
            return 'active fw-bold';
        } else {
            return 'fw-semibold';
        }
    }
@endphp


<nav class="navbar sticky-top navbar-expand-lg bg-light p-0" id="customNavbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('img/HELP FOR HELP.png') }}" height="60"
                class="me-2">Help for Help</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                </li>
                <li class="nav-item">
                    <a class="nav-link {!! getIfActive('/') !!}" aria-current="page" href="{{ url('/') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {!! getIfActive('tutorial') !!}" aria-current="page"
                        href="{{ url('/Ubicaciones') }}">Location</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {!! getIfActive('form') !!}" aria-current="page" href="{{ url('/form') }}">Giving
                        Back</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {!! getIfActive('Partners') !!}" aria-current="page"
                        href="{{ url('/Partners') }}">Partners</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link {!! getIfActive('resource') !!}" aria-current="page"
                        href="{{ url('/resources') }}">Resources</a>

                <li class="nav-item dropdown">
                    <a class="nav-link {!! getIfActive('Testimonials') !!}"" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Who we are
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('/Team') }}">Our team</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link {!! getIfActive('Login') !!}" aria-current="page" href="{{ url('/Login') }}">Login</a>
                </li>
            </ul>
        </div>



        <div class="d-flex align-items-center">
            @auth
                <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle" type="button" id="accountDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        My account
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="accountDropdown">
                        <li><a class="dropdown-item" href="#">Personal Information</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ url('/logout') }}">Logout</a></li>
                    </ul>
                </div>
            @else
                <a class="btn btn-sm" href="{{ url('/Donate') }}"
                    style="background-color: #ffc439; color: white;">Donate</a>
            @endauth

        </div>

    </div>
</nav>

<script>
    let prevScrollPos = window.pageYOffset;

    window.onscroll = function() {
        const currentScrollPos = window.pageYOffset;
        const navbar = document.getElementById("customNavbar");

        if (prevScrollPos > currentScrollPos) {

            navbar.classList.remove("navbar-scrolled");
        } else {

            navbar.classList.add("navbar-scrolled");
        }

        prevScrollPos = currentScrollPos;
    };
</script>










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
