@extends("layouts.app")

@section('content')
    <div class="markdown">
        @parsedown($content)
    </div>
@endsection
