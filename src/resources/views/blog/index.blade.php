@extends('layouts.app')

@section('content')

    @if(count($posts) > 0)
        <div class="container">
            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">Company
                            <strong>blog</strong>
                        </h2>
                        <hr>
                    </div>

                    @foreach($posts as $post)

                        <div class="col-lg-12 text-center">
                            <img class="img-responsive img-border img-full" src="{{$post->getContent('imagem')}}"
                                 alt="">
                            <h2>{{$post->getContent('titulo')}}
                                <br>
                                <small>{{$post->getContent('data')}}</small>
                            </h2>
                            <p>{{$post->getContent('descricao')}}</p>
                            <a href="#" class="btn btn-default btn-lg">Read More</a>
                            <hr>
                        </div>

                    @endforeach

                    <div class="col-lg-12 text-center">
                        <ul class="pager">
                            <li class="previous"><a href="#">&larr; Older</a>
                            </li>
                            <li class="next"><a href="#">Newer &rarr;</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection