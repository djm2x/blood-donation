<!DOCTYPE html>
<html>

<head>
    @yield('entete')
    <title> @yield('titre') </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel='stylesheet' href='/css/map.maroc.css'>

    @yield('styles')


</head>

<body>
    <div id="haut">Bonjour</div>
    <header id="entete" style="position: fixed; top: 0;z-index: 99999 !important;">
        @include('navone')
    </header>


    <main class="main">
        @if (!request()->is('/'))
            <section class="title d-flex align-items-center">
                <div class="container">
                    <h2>@yield('title')</h2>
                </div>
            </section>
        @endif

        @yield('content')
    </main>

    <footer>
        @include('footer')
    </footer>

    <a id="btn" href="#haut" class="d-flex justify-content-center align-items-center"><i class="fas fa-arrow-up text-white"></i></a>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')

</body>

</html>
