@extends('layouts.app')

@section('content')

    @foreach($articleList as $article)
        <a href="/articles/1" class="article-link">
            <div class="article-link__title">
                {{$article->name}}
            </div>
            <div class="article-link__text">
                {{$article->text}}
            </div>
        </a>
    @endforeach

@endsection
