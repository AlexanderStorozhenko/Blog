<div class="sidebar__filter">

    <div class="sidebar__filter__item">
        <form action="/articles/search" method="post" class="search-panel">
            @csrf
            <input name="q" value="{{old("q")}}" class="search-panel__input" type="text" placeholder="Поиск"/>
            <input type="submit" class="search-panel__btn"><i class="fas fa-search"></i>
        </form>
    </div>

    @if($errors->first())
        <div class="sidebar__filter__item">
            <p>{{$errors->first()}}</p>
        </div>
    @endif

    <div class="sidebar__filter__item">
        <div class="combobox w-3" id="sort-combobox">
            <div class="combobox__info">
                <div class="combobox__info__text">По названию</div>
                <div class="combobox__info__arrow"><i class="fas fa-angle-down"></i>
                </div>
            </div>
            <div class="combobox__items disabled">
                <a href="/articles?sort=name" class="combobox__items__item">
                    по названию
                </a>
                <a href="/articles?sort=rating" class="combobox__items__item">
                    по рейтингу
                </a>
            </div>

        </div>
    </div>
</div>
<script src="{{asset('js/Components/Combobox.js')}}"></script>
<script src="{{asset('js/FilterComboboxes.js')}}"></script>
