@extends('layouts.editor')
@section('content')
    <div class="raw-content-box">
        <div class="raw-content-box__tools">
            <div class="raw-content-box__tools__left">
                <div class="raw-content-box__tools__left__save-btn">
                    <div id="save" class="btn success btn-big">
                        <i class="far fa-save"></i></div>
                </div>

            </div>
            <div class="raw-content-box__tools__right">
                <div class="raw-content-box__tools__right__change-btn">
                    <div id="undo" class="btn disabled"><i class="fas fa-undo-alt"></i></div>
                </div>
                <div class="raw-content-box__tools__right__change-btn">
                    <div id="redo" class="btn"><i class="fas fa-redo-alt"></i></div>
                </div>
            </div>


        </div>
        <div class="raw-content-box__description">
            <input id="id" type="hidden" value="{{$id}}">
            <label class="raw-content-box__description__label" for="title">
                Название
            </label>
            <input class="raw-content-box__description__title" id="title" value="{{$article_title??''}}">
            <label class="raw-content-box__description__label" for="text" >
                Описание
            </label>
            <textarea class="raw-content-box__description__text" id="text" >{{$article_text??''}}</textarea>
        </div>

        <label class="raw-content-box__label" for="raw">
            Текст
        </label>
        <textarea id="raw" class="raw-content-box__textarea">{{$raw ??''}}</textarea>


    </div>
    <div class="result-content-box">
        <div class="result-content-box__tools">
            <div class="result-content-box__tools__refresh-btn">
                <div id="refresh" class="btn danger"><i class="fas fa-sync-alt"></i></div>
            </div>
        </div>
        <div class="result-content-box__article">
            <a class="article-link">
                <div id="result_title" class="article-link__title">{{$article_title??''}}</div>
                <div id="result_text" class="article-link__text">{{$article_text??''}}</div>
            </a>
        </div>
        <div class="result-content-box__content">
            <div id="resultArea" class="markdown">
                {!! $content ?? '' !!}
            </div>
        </div>

    </div>

    <script src="{{asset("js/UndoRedo.js")}}"></script>
    <script src="{{asset("js/Editor/Editor.js")}}"></script>

@endsection
