 <section class="navone">
     {{-- <div class="container">
        <div>
            <a href="mailto:"><i class="far fa-envelope"></i>&nbsp;contact@contact.com</a>
            <a href="tel:+"><i class="fas fa-mobile-alt"></i>&nbsp;+212 (0)6 23 52 45 85</a>
        </div>

        <div>
            <a href="http://"> <i class="fab fa-facebook-f"></i></a>
            <a href="http://">  <i class="fab fa-google-plus-g"></i></a>
            <a href="http://"> <i class="fab fa-twitter"></i></a>
        </div>
    </div> --}}
</section>

<section class="navtwo d-none d-md-block">
    <div class="container">
        <div class="row d-flex flex-wrap justify-content-between align-items-center">
            <a class="navbar-brand meme" href="{{ route('home') }}">
                <img class="logo" src="/images/icon2.jpg" alt="" srcset="">
            </a>

            <div class="d-flex mywith align-items-center justify-content-between ml-2">
                {{-- <a class="navbar-brand search" href="{{ route('home') }}">
                    <i class="fas fa-search"></i>
                </a> --}}

                <form class="my-2 my-lg-0 mr-2 d-flex align-items-center justify-content-center">
                    <input class="form-control mr-sm-2 mr-3" type="search" placeholder="Recherche" aria-label="Search">
                    <a class="navbar-brand search" href="{{ route('home') }}">
                        <i class="fas fa-search"></i>
                    </a>
                </form>

                <a class="navbar-brand d-none d-md-block" href="{{ route('home') }}">
                    <img src="/images/sante.jpg" alt="" srcset="" style="height: 70px">
                </a>
            </div>
        </div>
    </div>
</section>

<section class="navMobile d-md-none">
    <div class="">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand  pl-3 " href="{{ route('home') }}">
                <img src="{{ asset('images/icon2.jpg') }}" style="width:150px" alt="don du song">
            </a>
            <button class="navbar-toggler pr-3" type="button" data-toggle="collapse" data-target="#navbarMobile" aria-controls="navbarMobile" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarMobile">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="{{ request()->is('/') ? 'nav-link home active' : 'nav-link home' }}" href="{{ route('home') }}">
                            <i  class="fas fa-home d-none d-md-block"></i>
                            <span class="d-sm-none">Accueil</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            c n t s h
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="{{ request()->is('president') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ route('president') }}">Mot du président</a>
                        <div class="dropdown-divider"></div>
                        <a class="{{ request()->is('blog') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ route('blog') }}">Blog</a>
                        {{-- <a class="dropdown-item" href="{{ route('blog') }}">{{ request()->routeIs('activite') == 1 ? 'yes' : 'no' }}</a>
                        <a class="dropdown-item" href="{{ route('blog') }}">{{ (request()->is('activite')) ? 'yes' : 'no' }}</a> --}}
                    </div>
                    </li>

                    <li class="nav-item">
                        <a class="{{ request()->is('planification') ? 'nav-link active' : 'nav-link' }}" href="{{ route('planification') }}">Don du song</a>
                    </li>

                    <li class="nav-item">
                        <a class="{{ request()->is('activite') ? 'nav-link active' : 'nav-link' }}" href="{{ route('activite') }}">Nos Activiés</a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ request()->is('galerie') ? 'nav-link active' : 'nav-link' }}" href="{{ route('galerie') }}">Galerie</a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ request()->is('contact') ? 'nav-link active' : 'nav-link' }}" href="{{ route('contact') }}">Contact</a>
                    </li>

                    {{-- <li class="nav-item ml-3">
                        <a class="btn btn-warning" href="{{ route('admin') }}">Back-office</a>
                    </li> --}}
                </ul>
            </div>


                <form class="p-3 d-flex align-items-center justify-content-center  w-100" style="background-color:#fff">
                    <input class="form-control mr-sm-2 mr-3" type="search" placeholder="Recherche" aria-label="Search">
                    <a class="navbar-brand search" href="{{ route('home') }}">
                        <i class="fas fa-search"></i>
                    </a>
                </form>

        </nav>
    </div>
</section>



<section class="navthree  d-none d-md-block">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars" style="color:white"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="{{ request()->is('/') ? 'nav-link home active' : 'nav-link home' }}" href="{{ route('home') }}">
                            <i  class="fas fa-home d-none d-md-block"></i>
                            <span class="d-sm-none">Accueil</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            c n t s h
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="{{ request()->is('president') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ route('president') }}">Mot du président</a>
                        <div class="dropdown-divider"></div>
                        <a class="{{ request()->is('blog') ? 'dropdown-item active' : 'dropdown-item' }}" href="{{ route('blog') }}">Blog</a>
                        {{-- <a class="dropdown-item" href="{{ route('blog') }}">{{ request()->routeIs('activite') == 1 ? 'yes' : 'no' }}</a>
                        <a class="dropdown-item" href="{{ route('blog') }}">{{ (request()->is('activite')) ? 'yes' : 'no' }}</a> --}}
                    </div>
                    </li>

                    <li class="nav-item">
                        <a class="{{ request()->is('planification') ? 'nav-link active' : 'nav-link' }}" href="{{ route('planification') }}">Don du song</a>
                    </li>

                    <li class="nav-item">
                        <a class="{{ request()->is('activite') ? 'nav-link active' : 'nav-link' }}" href="{{ route('activite') }}">Nos Activiés</a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ request()->is('galerie') ? 'nav-link active' : 'nav-link' }}" href="{{ route('galerie') }}">Galerie</a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ request()->is('contact') ? 'nav-link active' : 'nav-link' }}" href="{{ route('contact') }}">Contact</a>
                    </li>

                    {{-- <li class="nav-item ml-3">
                        <a class="btn btn-warning" href="{{ route('admin') }}">Back-office</a>
                    </li> --}}
                </ul>
            </div>
        </nav>
    </div>
</section>

