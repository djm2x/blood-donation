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

    <style>
        .mybtn {
            padding: 2px 2px;
            font-size: .8em;
        }
    </style>


</head>

<body style="{{ app()->getLocale() == 'fr' ? 'direction: ltr' : 'direction: rtl' }}">
    <div id="haut">Bonjour</div>
    <header id="entete" style="position: fixed; top: 0;z-index: 99999 !important;">
        @include('navone')
    </header>


    <main class="main">
        <div class="{{ request()->is('/') ? '' : 'container' }}">
            <div class="row">
                <div class="{{ request()->is('/') || strpos(Request::path(), 'actualites') === 0 ? 'col-md-12 mt-2' : 'col-sm-12 col-md-8 p-1 mt-1' }}">
                    @include('title')
                    {{-- {{strpos(Request::path(), 'actualites')}}   class="{{ request()->is('/') ? 'm-0' : 'ml-2 mr-2' }}"--}}
                    <div  class="{{ request()->is('/') ? '' : 'card' }}" style="border-radius: 0">
                        <article class="ml-2 mr-2">
                            @yield('content')
                        </article>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 mt-1 p-1">
                    @if (!request()->is('/') && strpos(Request::path(), 'actualites') === false)
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

    <a id="btn" class="d-flex justify-content-center align-items-center"><i class="fas fa-arrow-up text-white"></i></a>

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

        //
        document.querySelector('#btn').addEventListener('click', () => {
            document.querySelector('#haut').scrollIntoView({block: 'end', inline: 'nearest', behavior: 'smooth'})
        });
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts-footer')
    @yield('scripts-sidenav')
    @yield('scripts')

</body>

</html>
