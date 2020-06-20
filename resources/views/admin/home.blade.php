@extends('layouts.admin')
@section('content')
    @foreach($articles as $article)
    <div class="admin-article-link">

        <a class="admin-article-link__link" href="/admin/article/change/{{$article->id}}">
            <div class="admin-article-link__link__title">{{$article->name}}</div>
            <div class="admin-article-link__link__text">
                {{$article->text}}
            </div>
        </a>

        <div class="admin-article-link__delete">
            <button class="admin-article-link__delete__btn" id="admin-article-edit ">
                <i class="far fa-trash-alt"></i>
            </button>
        </div>

    </div>
    @endforeach
@endsection
