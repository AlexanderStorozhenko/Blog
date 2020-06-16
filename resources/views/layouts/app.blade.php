<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Document</title>
</head>

<body class="body">
<header class="header">

    <div class="header__text">
        <div class="header__title">Александр Стороженко</div>
        <div class="header__subtitles">
            <div class="header__subtitles__subtitle">
                <div class="header__subtitles__subtitle__glitch-black">web development</div>
                <div class="header__subtitles__subtitle__glitch-violet">web development</div>
                <div class="header__subtitles__subtitle__glitch-blue">web development</div>
                web development
            </div>
            <div class="header__subtitles__subtitle">
                <div class="header__subtitles__subtitle__glitch-black">software engineering</div>
                <div class="header__subtitles__subtitle__glitch-violet">software engineering</div>
                <div class="header__subtitles__subtitle__glitch-blue">software engineering</div>
                software engineering
            </div>

        </div>
    </div>

</header>

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


</body>
</html>
