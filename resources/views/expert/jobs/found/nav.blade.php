<h2 class="text-center h4">Административен интерфейс Регистър на частните трудови посредници</h2>
  <nav class="site-nav">
    <ul class="nav-x center">
        <li><a href="{{route('expert.registration.index')}}">Заявки</a>
            <ul class="sub-menu-wrapper">
              <li><a href="{{route('expert.registration.index')}}"><span>Заявки за регистрации</span></a></li>
              <li><a href="{{route('expert.notes.index')}}"><span>Заявки за уведомления</span></a></li>
              <li><a href="{{route('expert.changes.index')}}"><span>Заявки за промяна на обстоятелства</span></a></li>
            </ul>
         </li>
         <li><a href="{{route('expert.approved.index')}}">Регистрации</a></li>
         <li><a href="{{route('expert.notifications.index')}}">Уведомления</a></li>
         <li class="sub-menu"><a href="bo-04.htm">Откази</a>
            <ul class="sub-menu-wrapper">
              <li><a href="bo-04.htm"><span>Отказани Регистрации</span></a></li>
              <li><a href="bo-04-2.htm"><span>Отказани Уведомления</span></a></li>
              <li><a href="bo-04-3.htm"><span>Отказани Промени на обстоятелствата</span></a></li>
            </ul>
         </li>
         <li class=""><a href="{{route('expert.reports.index')}}">Справки</a></li>
         <li class="sub-menu active"><a href="{{route('expert.seeking.index')}}">ТРЛ и УРЛ</a>
            <ul class="sub-menu-wrapper">
              <li><a href="{{route('expert.seeking.index')}}"><span>Търсещи работа лица</span></a></li>
              <li class="active"><a href="{{route('expert.found.index')}}"><span>Устроени на работа лица</span></a></li>
            </ul>
         </li>
      </ul>
  </nav>
