@extends('master')



@section('title')
    {{$model ? $model->title : 'Pas de titre'}}
@stop

@section('content')


    {{-- {{$list}} --}}
<section class="president">

    <div class="mt-3 mb-5">
        <div class="d-flex flex-wrap justify-content-center align-items-center">
            @if(request()->is('article/gouvernance'))
                <div class="col-md-12 mb-5">
                    <img src="{{url('presidents/'.str_replace(';', '', $model->imageUrl))}}" onerror="this.onerror=null;this.src='/images/verts.png';"
                                                class="card-img-top w-100" alt="{{$model->imageUrl}}">
                </div>
            @endif
            
            <div class="with-image">
                {{-- {!! $model ? str_replace('http://localhost:8000', request()->getSchemeAndHttpHost(), $model->description) : 'Le contenu est pas encore publié.' !!} --}}
                {!! $model ? $model->description : 'Le contenu est pas encore publié.' !!}
            </div>

            @if(request()->is('article/reseau'))
                <div class="col-md-12 mt-5">
                    <img src="{{url('presidents/'.str_replace(';', '', $model->imageUrl))}}" onerror="this.onerror=null;this.src='/images/verts.png';"
                    class="card-img-top w-100" alt="{{$model->imageUrl}}">
                </div>
            @endif

            {{-- <video  width="100%" controls style="margin-top: 10%" hidden>
                <source src="assets/videos/covid19.mp4" type="video/mp4">
                Your browser does not support HTML5 video.
            </video> --}}
        </div>
    </div>
</section>

@stop


@section('pied_page')
@stop
