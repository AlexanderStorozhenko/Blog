@include('headers.header')
<div class="container">
    <div class="container__body">

        <div class="main-nav">
            <div class="main-nav__links">
                <a href="/projects" class="main-nav__links__link {{$selected['projects']??''}}">Проекты</a>
                <a href="/articles" class="main-nav__links__link {{$selected['articles']??''}}">Статьи</a>
                <a href="/job" class="main-nav__links__link {{$selected['job']??''}}">Работодателям</a>
            </div>
        </div>
        <div class="container__body__content">
            <div class="content">
                @yield('content')
            </div>
            <div class="sidebar">
                @yield('sidebar')
            </div>
        </div>

    </div>
</div>

