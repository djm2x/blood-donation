<section class="navone">
</section>

<section id="navtwo" style="max-height: 130px; overflow: auto;">
    <section class="navtwo d-none d-md-block">
        <div class="container">
            <div class="row d-flex flex-wrap justify-content-between align-items-center">
                <a class="navbar-brand meme" href="{{ route('home') }}">
                    <img class="logo" src="/images/icon2.jpg" alt="" srcset="">
                </a>

                <div class="d-flex mywith align-items-center justify-content-between ml-2">
                    <form class="my-2 my-lg-0 mr-2 d-flex align-items-center justify-content-center">
                        <input class="form-control mr-sm-2 mr-3" type="search" placeholder="@lang('menu.Recherche')" aria-label="Search">
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
</section>

<section class="navMobile d-md-none">

        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand  pl-3 " href="{{ route('home') }}">
                <img src="{{ asset('images/icon2.jpg') }}" style="width:150px" alt="don du song">
            </a>
            <button class="navbar-toggler  pr-3" type="button" data-toggle="collapse" data-target="#navbarMobile" aria-controls="navbarMobile" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
                <i class="fas fa-times" style="display: none"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarMobile">
                @include('nav-shared')
            </div>


                <form class="p-3 d-flex align-items-center justify-content-center  w-100" style="background-color:#fff">
                    <input class="form-control mr-sm-2 mr-3" type="search" placeholder="@lang('menu.Recherche')" aria-label="Search">
                    <a class="navbar-brand search" href="{{ route('home') }}">
                        <i class="fas fa-search"></i>
                    </a>
                </form>
                <section style="background-color: #f70509; width: 100vw; height: 1px"></section>
        </nav>
</section>

<section class="navthree  d-none d-md-block">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars" style="color:white"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @include('nav-shared')
            </div>
        </nav>
    </div>

</section>

<section style="background-color: #f70509; width: 100vw; height: 1px"></section>


<script>
    window.addEventListener("scroll", () => {
        growShrinkNav();
    });

    var nav = document.querySelector("#navtwo");
    var endOfDocumentTop = 150;
    var lastScrollTop = window.pageYOffset || document.documentElement.scrollTop || 0;
    var size = 0;

    function growShrinkNav() {
        const scroll = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
        
        if (size == 0 && scroll > endOfDocumentTop) {
            // nav.className = 'hide-nav';
            console.log('toBottom')
            nav.setAttribute('style', 'max-height: 0; overflow: hidden; transition: max-height .5s ease-in-out;');
            // nav.setAttribute('style', '');
            size = 1;
        } else if(size == 1 && scroll <= endOfDocumentTop){
            // nav.className = 'show-nav';
            console.log('toUp')
            nav.setAttribute('style', 'max-height: 130px; overflow: auto; transition: max-height .5s ease-in-out;');
            // nav.setAttribute('style', 'transition: display .4s cubic-bezier(.5,0,.3,1);');
            size = 0;
        }
    }
</script>