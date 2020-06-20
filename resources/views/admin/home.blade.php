@extends('layouts.admin')
@section('content')


    <div href="#" class="admin-article-link">

        <a class="admin-article-link__link" href="#">
            <div class="admin-article-link__link__title">LINQ</div>
            <div class="admin-article-link__link__text">
                Удобная работа с множествами
            </div>
        </a>

        <div class="admin-article-link__delete">
            <button class="admin-article-link__delete__btn" id="admin-article-edit ">
                <i class="far fa-trash-alt"></i>
            </button>
        </div>

    </div>
    <div href="#" class="admin-article-link">

        <a class="admin-article-link__link" href="/admin/article/change/1">
            <div class="admin-article-link__link__title">LINQ</div>
            <div class="admin-article-link__link__text">
                Удобная работа с множествами
            </div>
        </a>

        <div class="admin-article-link__delete">
            <button class="admin-article-link__delete__btn" id="admin-article-edit ">
                <i class="far fa-trash-alt"></i>
            </button>
        </div>

    </div>

@endsection
