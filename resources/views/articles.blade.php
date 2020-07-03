@php($selected = ["articles"=>"selected"])
@extends('layouts.app',$selected)

@section('content')

    @if($articleList->count() == 0)
        <h3>Ничего не найдено</h3>
    @endif

    @foreach($articleList as $article)
        <a href="/articles/{{$article->id}}" class="article-link">
            <div class="article-link__title">
                {{$article->name}}
            </div>
            <div class="article-link__text">
                {{$article->text}}
            </div>
        </a>
    @endforeach

@endsection

@section('sidebar')
    @include('sidebars.filter_sidebar')
@endsection
