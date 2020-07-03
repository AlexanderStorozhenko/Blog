@include("head")

<body class="body">
<header class="header">
    <div class="header__text">
        <div class="header__title">{{$title ?? ''}} {{ $id ?? '' }}</div>
            <div class="header__links">
                <a class="header__links__link " href="/admin/">Главная</a>
                <a class="header__links__link danger" href="/admin/logout">Выйти</a>
            </div>
    </div>
</header>
