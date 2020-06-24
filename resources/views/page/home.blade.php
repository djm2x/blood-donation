@extends('master')

@section('entete')
@stop

@section('titre')
@stop

@section('titre_contenu')
@stop

@section('content')
<section class="first">
    <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          {{-- <li data-target="#carouselExampleCaptions" data-slide-to="2"></li> --}}
        </ol>
        <div class="carousel-inner ">
          <div class="carousel-item active">
            <img style="filter: brightness(70%);" src="images/one.jpg" class="d-block w-100" alt="...">

            <div class="carousel-caption d-none d-md-block">
              {{-- <h1>ON EST PLUS QU'AMIS</h1>
              <h5>On est donneurs de song</h5> --}}

              {{-- <a class="btn btn-primary mt-5 " href="http://">REJOIGNEZ-NOUS SUR FACEBOOK</a> --}}
            </div>
          </div>
          <div class="carousel-item">
            <img style="filter: brightness(70%);" src="images/dds02.png" class="d-block w-100" alt="...">

            <div class="carousel-caption d-none d-md-block">
              {{-- <h1>ON EST PLUS QU'AMIS</h1>
              <h5>On est donneurs de song</h5> --}}

              {{-- <a class="btn btn-primary mt-5" href="http://">REJOIGNEZ-NOUS SUR FACEBOOK</a> --}}
            </div>
          </div>
          {{-- <div class="carousel-item">
            <img style="filter: brightness(50%);" src="images/don-du-song-1.jpg" class="d-block w-100" alt="...">

            <div class="carousel-caption d-none d-md-block">
              <h1>ON EST PLUS QU'AMIS</h1>
              <h5>On est donneurs de song</h5>

              <a class="btn btn-primary mt-5" href="http://">REJOIGNEZ-NOUS SUR FACEBOOK</a>
            </div>
          </div> --}}
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

</section>
{{--  --}}
<section class="second ">
    <div class="container">

        {{-- <div class="para anime d-flex flex-column align-items-center mt-5  mb-2">
            <p class="text-danger h2 font-weight-bold mb-4 mt-4">Promesse de don</p>
            <div class="progress mb-4">
                <div class="progress-bar bg-danger" role="progressbar"  aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            <p class="col-md-8 text-center txt">
                Pour recueillir les promesses de dons, le Center a créé un numéro d’appel, le 00 00. Dans les jours qui suivent votre appel, vous recevrez par courrier votre promesse de don qu'il vous
                suffira de retourner avec votre chèque dans l'enveloppe affranchie jointe.
            </p>
        </div> --}}
        <div class="row">
            <div class="col-md-6 pl-0 pr-0">
                <div class="background-gray">
                    <div class="d-flex justify-content-center align-items-center flex-wrap p-2 w-100">
                        <div class="col-md-12  mt-1">
                        <h4 style="margin-bottom: 10px;">DERNIÈRES ACTUALITÉS</h4>
                        @foreach($actualites as $e)
                            <div class="row">
                                <div class="col-md-4 pr-0">
                                    <a href="{{url('actualite/'.$e->id)}}">
                                        <img src="{{url('actualites/'.str_replace(';', '', $e->imageUrl))}}" onerror="this.onerror=null;this.src='/images/404.png';" class="w-100" style="height: 150px;">
                                    </a>
                                </div>
                                <div class="col-md-8 d-flex justify-content-between flex-column ">
                                    <p class="m-0" style="font-size: 1.1em; font-weight: 700;"><a style=" color: black;" href="{{url('actualite/'.$e->id)}}">{{$e->title}}</a></p>
                                    <p class="text-muted" style="font-size: 1.1em"><i class="far fa-calendar-alt"></i> {{date('d/m/Y', strtotime($e->date))}}</p>
                                    <p style="font-size: .9rem">{{substr(strip_tags($e->description),0,150)}} ...</p>
                                    {{-- <div class="d-flex flex-row-reverse mt-5 mt-auto">
                                        <a class="btn btn-danger mybtn text-uppercase" href="{{url('actualite/'.$e->id)}}   ">
                                            <span style="font-size: 1.1em;">plus d'info...</span>
                                        </a>
                                    </div> --}}
                                </div>
                            </div>

                            <hr style="margin: 5px 0 10px">
                        @endforeach

                    </div>
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <a style="margin: 0 auto; width: 100%; text-align: center;" href="/actualite">Toute l'actualité</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 pr-0">
                <div class="row anime ">
                    <div class="col-md-6 col-sm-6 col-lg-6 d-flex justify-content-center pr-1">
                        <div class="mycard d-flex justify-content-between align-items-center">

                            <img class="m-2" src="images/001-blood-1.png" alt="" srcset="">
                            <div class="txt">
                                <p>Meteo du sang</p>
                                {{-- <p>
                                    Un don qui sauve des vies
                                    ,Une action généreuse, altruiste
                                    ,Une responsabilité citoyenne
                                    ,Une nécessité pour maintenir notre  réserve collective de sang
                                </p> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-lg-6 d-flex justify-content-center pl-1">
                        <div class="mycard d-flex justify-content-between align-items-center">

                            <img class="m-2" src="images/002-blood-donation.png" alt="" srcset="">
                            <div class="txt">
                                <p>Ou Donneur votre sang?</p>
                                {{-- <p>
                                    Les donneurs sont attendus tout l’été dans les nombreuses collectes mobiles organisées partout en Maroc.
                                </p> --}}
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 d-flex justify-content-center pr-1">
                        <div class="mycard d-flex justify-content-between align-items-center">

                            <img class="m-2" src="images/002-blood-donation.png" alt="" srcset="">
                            <div class="txt">
                                <p>Pourquoi donner du sang?</p>
                                {{-- <p>
                                    Les donneurs sont attendus tout l’été dans les nombreuses collectes mobiles organisées partout en Maroc.
                                </p> --}}
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 d-flex justify-content-center pl-1">
                        <div class="mycard d-flex justify-content-between align-items-center">

                            <img class="m-2" src="images/camion.png" alt="" srcset="">
                            <div class="txt">
                                <p>Collecte Mobile</p>
                                {{-- <p>
                                    Fournir avec efficience des composants et substituts sanguins, des tissus humains et du sang de cordon sécuritaires, de qualité optimale et en quantité suffisante, pour répondre aux besoins de la population Marocaine.
                                </p> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex-column d-flex justify-content-center align-items-center mymap mt-1">

                    <div class="anime d-flex flex-column align-items-center mt-2 mb-2">
                        <p class="text-danger h2 font-weight-bold text-center">Don du sang</p>
                        <p class="col-md-12 text-center"> <span><img src="images/position.png" style="width: 30px;"  alt=""></span>Clique sur la map pour localiser nos campagnes de don du sang</p>
                        <a href="{{ route('planification') }}">
                            <img src="images/maps-and-flags.png"  style="height: 300px">
                        </a>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
{{--  --}}
@if (false)
<section class="three ">
    <div id="carouselExampleCaptions2" class="carousel slide " data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions2" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions2" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="d-block w-100 fallback"></div>
            <div class="carousel-caption anime d-none d-md-block d-flex flex-column justify-content-center">
                <div class="mb-5">
                    <p class="text-danger h2 font-weight-bold ">Nos activités</p>
                    <p class="text-dark">Les activité d'organisation du don de sang</p>
                </div>
                <div class="row d-flex justify-content-center p-2">
                    <div class="card m-1" style="width: 18rem;">
                        <img src="images/background.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text m-0 text-dark font-weight-bold">Some quick example text</p>
                            <p class="card-text m-0 text-dark text-muted">identity</p>

                        </div>
                    </div>

                    <div class="card m-1" style="width: 18rem;">
                        <img src="images/background2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text m-0 text-dark font-weight-bold">Some quick example text</p>
                            <p class="card-text m-0 text-dark text-muted">identity</p>

                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="d-block w-100 fallback"></div>
            <div class="carousel-caption d-none d-md-block d-flex flex-column justify-content-center">
                <div class="mb-5">
                    <p class="text-danger h2 font-weight-bold ">Nos activités</p>
                    <p class="text-dark">Les activité d'organisation du don de sang</p>
                </div>
                <div class="row d-flex justify-content-center p-2">
                    <div class="card m-1" style="width: 18rem;">
                        <img src="images/background.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text m-0 text-dark font-weight-bold">Some quick example text</p>
                            <p class="card-text m-0 text-dark text-muted">identity</p>

                        </div>
                    </div>

                    <div class="card m-1" style="width: 18rem;">
                        <img src="images/background2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text m-0 text-dark font-weight-bold">Some quick example text</p>
                            <p class="card-text m-0 text-dark text-muted">identity</p>

                        </div>
                    </div>
                </div>
            </div>
          </div>

        <a class="carousel-control-prev" href="#carouselExampleCaptions2" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions2" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

</section>
{{--  --}}
<section class="fourth ">
    <div class="container flex-column d-flex justify-content-center align-items-center">

        <div class="anime d-flex flex-column align-items-center mt-5 mb-5">
            <p class="text-danger h2 font-weight-bold text-center">Don du sang</p>
            <p class="col-md-8 text-center"> <span><img src="images/position.png" style="width: 30px"  alt=""></span>  Clique sur la map pour localiser nos campagnes de don du sang</p>
            <a href="{{ route('planification') }}">
                <img src="images/maps-and-flags.png"  alt="">
            </a>
        </div>
    </div>
</section>
@endif

{{--  --}}
@if (false)
<section class="fifth ">
    <div id="carouselExampleCaptions3" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions3" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions3" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="d-block w-100 fallback"></div>
            <div class="carousel-caption anime d-none d-md-block d-flex flex-column justify-content-center">
                <div class="mb-5">
                    <p class="text-danger h2 font-weight-bold ">A la une</p>
                    <p class="text-dark">Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet,</p>
                </div>
                <div class="row d-flex justify-content-center p-2">
                    <div class="card m-1" style="width: 18rem;">
                        <img src="images/verts.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text m-0 text-dark font-weight-bold">Some quick example text</p>
                            <p class="card-text m-0 text-dark text-muted">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor nulla natus optio nihil illum
                                dicta vero laborum esse.
                            </p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <button class="btn btn-danger text-uppercase">plus d'info...</button>
                                <div class="d-flex text-dark social">
                                    <a href="http://"> <i class="fab fa-facebook-f"></i></a>
                                    <a href="http://">  <i class="fab fa-google-plus-g"></i></a>
                                    <a href="http://"> <i class="fab fa-twitter"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card m-1" style="width: 18rem;">
                        <img src="images/papiers.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text m-0 text-dark font-weight-bold">Some quick example text</p>
                            <p class="card-text m-0 text-dark text-muted">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor nulla natus optio nihil illum
                                dicta vero laborum esse.
                            </p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <button class="btn btn-danger text-uppercase">plus d'info...</button>
                                <div class="d-flex text-dark social">
                                    <a href="http://"> <i class="fab fa-facebook-f"></i></a>
                                    <a href="http://">  <i class="fab fa-google-plus-g"></i></a>
                                    <a href="http://"> <i class="fab fa-twitter"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="d-block w-100 fallback"></div>
            <div class="carousel-caption d-none d-md-block d-flex flex-column justify-content-center">
                <div class="mb-5">
                    <p class="text-danger h2 font-weight-bold ">A la une</p>
                    <p class="text-dark">Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet,</p>
                </div>
                <div class="row d-flex justify-content-center p-2">
                    <div class="card m-1" style="width: 18rem;">
                        <img src="images/verts.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text m-0 text-dark font-weight-bold">Some quick example text</p>
                            <p class="card-text m-0 text-dark text-muted">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor nulla natus optio nihil illum
                                dicta vero laborum esse.
                            </p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <button class="btn btn-danger text-uppercase">plus d'info...</button>
                                <div class="d-flex text-dark social">
                                    <a href="http://"> <i class="fab fa-facebook-f"></i></a>
                                    <a href="http://">  <i class="fab fa-google-plus-g"></i></a>
                                    <a href="http://"> <i class="fab fa-twitter"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card m-1" style="width: 18rem;">
                        <img src="images/papiers.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text m-0 text-dark font-weight-bold">Some quick example text</p>
                            <p class="card-text m-0 text-dark text-muted">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor nulla natus optio nihil illum
                                dicta vero laborum esse.
                            </p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <button class="btn btn-danger text-uppercase">plus d'info...</button>
                                <div class="d-flex text-dark social">
                                    <a href="http://"> <i class="fab fa-facebook-f"></i></a>
                                    <a href="http://">  <i class="fab fa-google-plus-g"></i></a>
                                    <a href="http://"> <i class="fab fa-twitter"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
          </div>

        <a class="carousel-control-prev" href="#carouselExampleCaptions3" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions3" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

</section>
@endif
{{--  --}}
<section class="temoignage ">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-lg-4 col-12 anime">
                <p class="font-weight-bold text-center text-uppercase pt-3 mb-2">La presse en parle</p>
                <div class="mycard2">
                    <img src="images/404.png"  alt="">
                    <section>
                        <span>Le 20/12/2019</span>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </section>
                </div>
                <div class="mycard2">
                    <img src="images/404.png"  alt="">
                    <section>
                        <span>Le 20/12/2019</span>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </section>
                </div>
                <div class="mycard2">
                    <img src="images/404.png"  alt="">
                    <section>
                        <span>Le 20/12/2019</span>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </section>
                </div>
                <div class="mycard2">
                    <img src="images/404.png"  alt="">
                    <section>
                        <span>Le 20/12/2019</span>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </section>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-lg-4 col-12">
                {{-- <p class="text-danger h2 font-weight-bold text-center text-uppercase pt-3">témoignages</p> --}}
                <p class="font-weight-bold text-center text-uppercase pt-3   mb-2">témoignages</p>
                <div class="anime row">
                    {{-- <p class="col-md-8 text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam, incidunt nisi! Cum sequi quibusdam quia similique, laboriosam quidem eum nisi, ducimus accusantium, perferendis id sint odio hic animi expedita quos?</p> --}}
        
                    <div class="col-md-6 col-sm-6">
                        <div class="mycard">
                            <img src="images/user.png"  alt="">
                            <p class="font-weight-bold m-0 mt-2">walid <span class="text-uppercase">bennani</span></p>
                            <p class="text-capitalize m-0">entrepreneur degital</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="mycard">
                            <img src="images/user.png"  alt="">
                            <p class="font-weight-bold m-0 mt-2">Youssef <span class="text-uppercase">khaldoun</span></p>
                            <p class="text-capitalize m-0">developpeur web</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="mycard">
                            <img src="images/user.png"  alt="">
                            <p class="font-weight-bold m-0 mt-2">Omar <span class="text-uppercase">zarhouni</span></p>
                            <p class="text-capitalize m-0">designer</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="mycard">
                            <img src="images/user.png"  alt="">
                            <p class="font-weight-bold m-0 mt-2">Anas <span class="text-uppercase">sabour</span></p>
                            <p class="text-capitalize m-0">entrepreneur</p>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-lg-4 col-12 mt-5 mb-3">
                <div class="mycard">

                    <video  width="100%"  controls >
                        <source src="{{ asset('videos/spot_publicitaire.mp4') }}" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    </div>
            </div>
        </div>
        
    </div>
</section>


{{--  --}}
<section class="images ">
    <div class="d-flex justify-content-center mt-5">
        <p class="text-danger text-uppercase h2 font-weight-bold ">Galerie d'IMAGE</p>
    </div>
    <div id="carouselExampleCaptions5" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        @foreach ($groupes as $i => $groupe)
            <li data-target="#carouselExampleCaptions5" data-slide-to="{{$i}}" class="{{$i == 0 ? 'active' : ''}}"></li>
          @endforeach
        </ol>
        <div class="carousel-inner ">

            @foreach ($groupes as $i => $groupe)
            <div class="{{$i == 0 ? 'carousel-item active' : 'carousel-item'}}   ">
                <div class="d-block w-100 fallback"></div>
                <div class="carousel-caption  d-none d-md-block d-flex flex-column justify-content-center align-items-center">
                    <div class="row d-flex justify-content-center p-2">
                        @foreach ($groupe as $e)
                        <div class="col-md-6 col-sm-6 col-lg-3 mb-3 d-flex justify-content-center">
                            <div class="card" style="width: 12.5rem;">
                                {{-- <img src="images/H.png" class="card-img-top" alt="..."> --}}
                                <img src="{{url('galeries/'.$e)}}" onerror="this.onerror=null;this.src='/images/verts.png';"
                                            class="card-img-top" style="height: 100%" alt="{{$e}}">
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach

        <a class="carousel-control-prev" href="#carouselExampleCaptions5" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions5" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

</section>

@stop


@section('pied_page')
@stop
