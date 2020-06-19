
@include('headers.header')
<div class="container">
    <div class="container__body">

        <div class="main-nav">
            <div class="main-nav__links">
                <a class="main-nav__links__link">Проекты</a>
                <a class="main-nav__links__link selected">Статьи</a>
                <a class="main-nav__links__link">Работодателям</a>
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

