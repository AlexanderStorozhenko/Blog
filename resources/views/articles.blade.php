@extends('layouts.app')
@section('content')
@foreach($articleList as $article)
    <div class="article-link">
        <div class="article-link__title">{{$article->name}}</div>
        <div class="article-link__text">
            {{$article->text}}
        </div>
    </div>
@endforeach
@endsection
