@extends('layouts.app')

@section('content')

    <div class="container">

        @if(count($posts) > 0)
            <div class="row">
                <div class="box">

                    @foreach($posts as $post)

                        <div class="col-lg-12">
                            <hr>
                            <h2 class="intro-text text-center">
                                <strong>{{$post->getContent('titulo')}}</strong>
                            </h2>
                            <hr>
                        </div>
                        <div class="col-md-6">
                            <img class="img-responsive img-border-left" src="{{ $post->getContent('imagem') }}" alt="">
                        </div>
                        <div class="col-md-6">
                            <p>{{$post->getContent('descricao')}}</p>
                        </div>

                    @endforeach

                    <div class="clearfix"></div>
                </div>
            </div>
        @endif

        @if(count($teams) > 0)
            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">OUR
                            <strong>Team</strong>
                        </h2>
                        <hr>
                    </div>

                    @foreach($teams as $team)

                        <div class="col-sm-4 text-center">
                            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                            <h3>{{$team->getContent('nome')}}
                                <small>{{$team->getContent('cargo')}}</small>
                            </h3>
                        </div>

                    @endforeach

                    <div class="clearfix"></div>
                </div>
            </div>
        @endif

        @if(count($posts) == 0 and count($teams) == 0)
            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">
                            <strong>Não há postagens!</strong>
                        </h2>
                        <hr>
                    </div>
                </div>
            </div>
        @endif

    </div>

@endsection