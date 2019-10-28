<nav class="site-nav">
  <ul class="nav-x center">
      <li class="{{Request::url()==route('admin.users.index') ? 'active':''}}">
        <a href="{{route('admin.users.index')}}">Потребители</a></li>

      <li><a href="bo-admin-settings.htm">Настройки на системата</a></li>

      <li class="nav-item dropdown">
        @if (Request::url()==route('nom.countries.index'))
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" active>
            Номенклатура
          </a>
        @else
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Номенклатура
          </a>
        @endif

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('nom.genders.index')}}">Полове</a>
          <a class="dropdown-item" href="{{route('nom.languages.index')}}">Езици</a>
          <a class="dropdown-item" href="{{route('nom.currency.index')}}">Валути</a>
          <a class="dropdown-item" href="{{route('nom.carcategory.index')}}">Категории за управление на МПС</a>
          <a class="dropdown-item" href="#">Видове търговци и дружества</a>
          <a class="dropdown-item" href="{{route('nom.prefcontrtypes.index')}}">Предпочитан вид на договора</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{route('nom.countries.index')}}">Страни</a>
          <a class="dropdown-item" href="{{route('regions.index')}}">Области</a>
          <a class="dropdown-item" href="#">Общини</a>
          <a class="dropdown-item" href="#">Градове</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{route('nom.computerskills.index')}}">Компютърни умения</a>
          <a class="dropdown-item" href="{{route('nom.educationlevels.index')}}">Образование</a>
          <a class="dropdown-item" href="{{route('nom.professions.index')}}">Професии</a>
          <a class="dropdown-item" href="{{route('nom.professionclass.index')}}">Видове професии</a>
          <a class="dropdown-item" href="{{route('nom.specialities.index')}}">Специалности</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Видове заетост</a>
          <a class="dropdown-item" href="{{route('nom.workregimes.index')}}">Видове работно време</a>
          <a class="dropdown-item" href="#">Трудов стаж</a>
          <a class="dropdown-item" href="#">Видове заетост</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{route('nom.sadirectorates.index')}}">Бюра по труда</a>
        </div>
      </li>
  </ul>
</nav>
