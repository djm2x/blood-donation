@extends('master')

@section('entete')
@stop

@section('titre')
@stop

@section('titre_contenu')
@stop

@section('content')
<section class="first">
    <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner ">
          <div class="carousel-item active">
            <img src="images/don-du-song-1.jpg" class="d-block w-100" alt="...">

            <div class="carousel-caption d-none d-md-block">
              <h1>ON EST PLUS QU'AMIS</h1>
              <h5>On est donneurs de song</h5>

              <a class="btn btn-primary mt-5 " href="http://">REJOIGNEZ-NOUS SUR FACEBOOK</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/don-du-song-1.jpg" class="d-block w-100" alt="...">

            <div class="carousel-caption d-none d-md-block">
              <h1>ON EST PLUS QU'AMIS</h1>
              <h5>On est donneurs de song</h5>

              <a class="btn btn-primary mt-5" href="http://">REJOIGNEZ-NOUS SUR FACEBOOK</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/don-du-song-1.jpg" class="d-block w-100" alt="...">

            <div class="carousel-caption d-none d-md-block">
              <h1>ON EST PLUS QU'AMIS</h1>
              <h5>On est donneurs de song</h5>

              <a class="btn btn-primary mt-5" href="http://">REJOIGNEZ-NOUS SUR FACEBOOK</a>
            </div>
          </div>
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

</section>
{{--  --}}
<section class="second ">
    <div class="container flex-column d-flex justify-content-center align-items-center">

        <div class="para anime d-flex flex-column align-items-center mt-5  mb-2">
            <p class="text-danger h2 font-weight-bold mb-4 mt-4">Promesse de don</p>
            <div class="progress mb-4">
                <div class="progress-bar bg-danger" role="progressbar"  aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            <p class="col-md-8 text-center txt">
                Pour recueillir les promesses de dons, le Center a créé un numéro d’appel, le 00 00. Dans les jours qui suivent votre appel, vous recevrez par courrier votre promesse de don qu'il vous
                suffira de retourner avec votre chèque dans l'enveloppe affranchie jointe.
            </p>
        </div>

        <div class="row anime d-flex justify-content-center mt-5 mb-5">
            <div class="col-md-6 col-sm-6 col-lg-4 d-flex justify-content-center p-2">
                <img class="m-2" src="images/001-blood-1.png" alt="" srcset="">
                <div class="txt">
                    <p>Meteo du sang</p>
                    <p>
                        Un don qui sauve des vies
                        ,Une action généreuse, altruiste
                        ,Une responsabilité citoyenne
                        ,Une nécessité pour maintenir notre  réserve collective de sang
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-lg-4 d-flex justify-content-center p-2">
                <img class="m-2" src="images/002-blood-donation.png" alt="" srcset="">
                <div class="txt">
                    <p>Ou Donneur votre sang?</p>
                    <p>
                        Les donneurs sont attendus tout l’été dans les nombreuses collectes mobiles organisées partout en Maroc.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-lg-4 d-flex justify-content-center p-2">
                <img class="m-2" src="images/003-blood.png" alt="" srcset="">
                <div class="txt">
                    <p>Collecte Mobile</p>
                    <p>
                        Fournir avec efficience des composants et substituts sanguins, des tissus humains et du sang de cordon sécuritaires, de qualité optimale et en quantité suffisante, pour répondre aux besoins de la population Marocaine.
                    </p>
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
@endif
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
    <div class="container flex-column d-flex justify-content-center align-items-center">

        <div class="anime d-flex flex-column align-items-center mt-5 mb-5">
            <p class="text-danger h2 font-weight-bold text-center text-uppercase">témoignages</p>
            <p class="col-md-8 text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam, incidunt nisi! Cum sequi quibusdam quia similique, laboriosam quidem eum nisi, ducimus accusantium, perferendis id sint odio hic animi expedita quos?</p>

            <div class="d-flex flex-column justify-content-center align-items-center">
                <img src="images/user.png"  alt="">
                <p class="font-weight-bold m-0 mt-2">walid <span class="text-uppercase">bennani</span></p>
                <p class="text-capitalize m-0">entrepreneur degital</p>
            </div>
        </div>
    </div>
</section>


{{--  --}}
<section class="images ">
    <div class="d-flex justify-content-center mt-5">
        <p class="text-danger text-uppercase h2 font-weight-bold ">Galerie d'IMAGE</p>
    </div>
    <div id="carouselExampleCaptions4" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions4" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions4" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner ">
          <div class="carousel-item active">
            <div class="d-block w-100 fallback"></div>
            <div class="carousel-caption  d-none d-md-block d-flex flex-column justify-content-center align-items-center">

                <div class="row d-flex justify-content-center p-2">
                    <div class="col-md-6 col-sm-6 col-lg-3 mb-3 d-flex justify-content-center">
                        <div class="card" style="width: 12.5rem;">
                            <img src="images/H.png" class="card-img-top" alt="...">
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-lg-3 mb-3  d-flex justify-content-center">
                        <div class="card" style="width: 12.5rem;">
                            <img src="images/2H.png" class="card-img-top" alt="...">
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-lg-3 mb-3  d-flex justify-content-center">
                        <div class="card" style="width: 12.5rem;">
                            <img src="images/Y.png" class="card-img-top" alt="...">
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-lg-3 mb-3  d-flex justify-content-center">
                        <div class="card" style="width: 12.5rem;">
                            <img src="images/PASS.png" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="d-block w-100 fallback"></div>
            <div class="carousel-caption d-none d-md-block d-flex flex-column justify-content-center">

                <div class="row d-flex justify-content-center p-2">
                    <div class="col-md-6 col-sm-6 col-lg-3 mb-3  d-flex justify-content-center">
                        <div class="card" style="width: 12.5rem;">
                            <img src="images/H.png" class="card-img-top" alt="...">
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-lg-3 mb-3  d-flex justify-content-center">
                        <div class="card" style="width: 12.5rem;">
                            <img src="images/2H.png" class="card-img-top" alt="...">
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-lg-3 mb-3  d-flex justify-content-center">
                        <div class="card" style="width: 12.5rem;">
                            <img src="images/Y.png" class="card-img-top" alt="...">
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-lg-3 mb-3  d-flex justify-content-center">
                        <div class="card" style="width: 12.5rem;">
                            <img src="images/PASS.png" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
            </div>
          </div>

        <a class="carousel-control-prev" href="#carouselExampleCaptions4" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions4" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

</section>

@stop


@section('pied_page')
@stop
