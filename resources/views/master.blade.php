<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @yield('entete')
    <title>Donneur du sang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/fav.png') }}" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel='stylesheet' href='/css/map.maroc.css'>

    @yield('styles')


</head>

{{-- <body style="{{ app()->getLocale() == 'fr' ? 'direction: ltr' : 'direction: rtl' }}"> --}}
    <body>
    <div id="haut">Bonjour</div>
    <header id="entete" style="position: fixed; top: 0;z-index: 99999 !important;">
        @include('navone')
    </header>


    <main class="main">
        <div class="{{ request()->is('/') ? '' : 'container' }}">
            <div class="row">
                <div class="{{ request()->is('/') ? 'col-md-12' : 'col-sm-12 col-md-8' }}">
                    {{-- <h1 class="mt-4 text-capitalize">@yield('title')</h1> --}}
                    @if (!request()->is('/'))
                    <section class="title d-flex align-items-center">
                        <div class="container">
                            <h2 class="{{ app()->getLocale() == 'fr' ? 'm-0' : 'm-0 text-right' }}">@yield('title')</h2>
                        </div>
                    </section>
                    @endif
                    {{--  --}}
                    @yield('content')
                </div>

                <div class="col-sm-12 col-md-4">
                    @if (!request()->is('/'))
                        @include('sidenav')
                    @endif
                </div>
            </div>
        </div>
    </main>

    {{-- @foreach(Session::get('cntsh') as $e)
        {{$e}}
        @endforeach --}}

    <footer>
        @include('footer')
    </footer>

    <a id="btn" href="#haut" class="d-flex justify-content-center align-items-center"><i class="fas fa-arrow-up text-white"></i></a>

    <!-- Scripts -->
    <script>
        const navBtn = document.querySelector('.navbar-toggler')
        const bar = document.querySelector('.fa-bars')
        const x = document.querySelector('.fa-times')
        let isBar = true;
        navBtn.addEventListener('click', (e) => {
            if (isBar) {
                bar.style.display = 'none';
                x.style.display = 'inline';
                isBar = false;
            } else {
                bar.style.display = 'inline';
                x.style.display = 'none';
                isBar = true;
            }
        });
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')

</body>

</html>
