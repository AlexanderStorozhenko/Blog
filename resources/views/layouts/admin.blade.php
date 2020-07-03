@include('head')
<header class="header">
    <div class="header__text">
        <div class="header__title">Админ панель</div>
        <a href="/admin/logout">выйти</a>
    </div>
</header>
<body>
    <div class="container">
        <div class="admin-nav">
            <div class="admin-nav__links">
                <a class="admin-nav__links__link selected">Статьи</a>
                <a class="admin-nav__links__link">О себе</a>
            </div>
            <div class="admin-nav__tools">
                <div class="search-panel">
                    <input class="search-panel__input" type="text" placeholder="Поиск"/>
                    <a class="search-panel__btn"><i class="fas fa-search"></i></a>
                </div>
                <a href="/admin/article/add" class="btn"><span class="btn__span">+</span> Добавить</a>
            </div>
        </div>
        <div class="admin-content">
            @yield('content')
        </div>
    </div>
</body>
