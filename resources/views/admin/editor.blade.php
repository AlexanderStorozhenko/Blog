@extends('layouts.editor')
@section('content')
    <div class="raw-content-box">

        <div class="raw-content-box__tools">

            <div class="raw-content-box__tools__left">
                <div class="raw-content-box__tools__left__save-btn">
                    <input type="submit" class="btn" id="save" value="Save">
                    {{--                    <i class="far fa-save"></i>--}}
                    {{--                    </input>--}}
                </div>
            </div>

            <div class="raw-content-box__tools__right">
                <div class="raw-content-box__tools__right__change-btn">
                    <div class="btn" id="undo"><i class="fas fa-undo-alt"></i></div>
                </div>
                <div class="raw-content-box__tools__right__change-btn">
                    <div class="btn" id="redo"><i class="fas fa-redo-alt"></i></div>
                </div>
            </div>


        </div>
        <textarea class="raw-content-box__textarea">
            {{$raw ?? ''}}
            </textarea>
    </div>
    <div class="result-content-box">
        <div class="result-content-box__tools">
            <div class="result-content-box__tools__refresh-btn">
                <div id="refresh" class="btn"><i class="fas fa-sync-alt"></i></div>
            </div>
        </div>
        <div class="result-content-box__content">
            <div class="markdown" id="resultArea">

                   {!! $content ?? ''!!}

            </div>
        </div>
    </div>

    <script src="{{asset("js/UndoRedo.js")}}"></script>
    <script src="{{asset("js/Editor/raw_textfield.js")}}"></script>

@endsection
