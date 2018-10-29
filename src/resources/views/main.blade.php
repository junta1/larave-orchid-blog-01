@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    @if(count($slides) > 0)
                        <div id="carousel-example-generic" class="carousel slide">

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                            @foreach($slides as $key => $slide)
                                <!-- Indicators -->
                                    {{--<ol class="carousel-indicators hidden-xs">--}}
                                    {{--@if($key == 0)--}}
                                    {{--<li data-target="#carousel-example-generic" data-slide-to="{{$key}}"--}}
                                    {{--class="active"></li>--}}
                                    {{--@else--}}
                                    {{--<li data-target="#carousel-example-generic" data-slide-to="{{$key}}"></li>--}}
                                    {{--@endif--}}
                                    {{--</ol>--}}

                                    @if($key == 0)
                                        <div class="item active">
                                            <img class="img-responsive img-full" src="{{$slide->getContent('imagem')}}"
                                                 alt="">
                                        </div>
                                    @else
                                        <div class="item">
                                            <img class="img-responsive img-full" src="{{$slide->getContent('imagem')}}"
                                                 alt="">
                                        </div>
                                    @endif

                                @endforeach
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="icon-prev"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="icon-next"></span>
                            </a>
                        </div>

                    @endif

                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">Business Casual</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>Start Bootstrap</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        @if(count($posts) > 0)
            @foreach($posts as $post)

                @if($post->getContent('imagem') != null)
                    <div class="row">
                        <div class="box">
                            <div class="col-lg-12">
                                <hr>
                                <h2 class="intro-text text-center">
                                    <strong>{{$post->getContent('titulo')}}</strong>
                                </h2>
                                <hr>
                                <img class="img-responsive img-border img-left" src="{{$post->getContent('imagem')}}"
                                     alt="">
                                <hr class="visible-xs">
                                <p>{{$post->getContent('descricao')}}</p>
                            </div>
                        </div>
                    </div>

                @else
                    <div class="row">
                        <div class="box">
                            <div class="col-lg-12">
                                <hr>
                                <h2 class="intro-text text-center">
                                    <strong>{{$post->getContent('titulo')}}</strong>
                                </h2>
                                <hr>
                                <p>{{$post->getContent('descricao')}}</p>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        @endif
    </div>

@endsection