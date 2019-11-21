
<div class="side-bar">
            <div class="inner">
                <ul class="side-nav">
                    <li class="active"><a href="">ЧТП</a></li>
                    <li><a href="{{route('powr_bo.registrationrequests.index')}}">ПОВР</a></li>
                </ul>
            </div>
        </div>




<h2 class="text-center h4">Административен интерфейс Регистър на частните трудови посредници</h2>
  <nav class="site-nav">
    <ul class="nav-x center">
        @if (Request::url()==route('expert.registration.index'))
          <li class="sub-menu active"><a href="{{route('expert.registration.index')}}">Заявки</a>
        @elseif (Request::url()==route('expert.notes.index'))
          <li class="sub-menu active"><a href="{{route('expert.registration.index')}}">Заявки</a>
        @elseif (Request::url()==route('expert.changes.index'))
          <li class="sub-menu active"><a href="{{route('expert.registration.index')}}">Заявки</a>
        @else
          <li class="sub-menu"><a href="{{route('expert.registration.index')}}">Заявки</a>
        @endif

            <ul class="sub-menu-wrapper">
              <li class="{{Request::url()==route('expert.registration.index') ? 'active':''}}">
                <a href="{{route('expert.registration.index')}}"><span>Заявки за регистрации</span></a></li>
              <li class="{{Request::url()==route('expert.notes.index') ? 'active':''}}">
                <a href="{{route('expert.notes.index')}}"><span>Заявки за уведомления</span></a></li>
              <li class="{{Request::url()==route('expert.changes.index') ? 'active':''}}">
                <a href="{{route('expert.changes.index')}}"><span>Заявки за промяна на обстоятелства</span></a></li>
            </ul>
         </li>

         <li class="{{Request::url()==route('expert.approved.index') ? 'active':''}}">
           <a href="{{route('expert.approved.index')}}">Регистрации</a></li>
         <li class="{{Request::url()==route('expert.notifications.index') ? 'active':''}}">
           <a href="{{route('expert.notifications.index')}}">Уведомления</a></li>


       @if (Request::url()==route('expert.reg.index'))
         <li class="sub-menu active"><a href="{{route('expert.reg.index')}}">Откази</a>
       @elseif (Request::url()==route('expert.not.index'))
         <li class="sub-menu active"><a href="{{route('expert.not.index')}}">Откази</a>
       @elseif (Request::url()==route('expert.chg.index'))
         <li class="sub-menu active"><a href="{{route('expert.chg.index')}}">Откази</a>
       @else
         <li class="sub-menu"><a href="{{route('expert.reg.index')}}">Откази</a>
       @endif
            <ul class="sub-menu-wrapper">
              <li class="{{Request::url()==route('expert.reg.index') ? 'active':''}}">
                <a href="{{route('expert.reg.index')}}"><span>Отказани Регистрации</span></a></li>
              <li class="{{Request::url()==route('expert.not.index') ? 'active':''}}">
                <a href="{{route('expert.not.index')}}"><span>Отказани Уведомления</span></a></li>
              <li class="{{Request::url()==route('expert.chg.index') ? 'active':''}}">
                <a href="{{route('expert.chg.index')}}"><span>Отказани Уведомления</span></a></li>
            </ul>
         </li>
         <li class="{{Request::url()==route('expert.reports.index') ? 'active':''}}">
           <a href="{{route('expert.reports.index')}}">Справки</a></li>

       @if (Request::url()==route('expert.seeking.index'))
         <li class="sub-menu active"><a href="{{route('expert.seeking.index')}}">ТРЛ и УРЛ</a>
       @elseif (Request::url()==route('expert.found.index'))
         <li class="sub-menu active"><a href="{{route('expert.seeking.index')}}">ТРЛ и УРЛ</a>
       @else
         <li class="sub-menu"><a href="{{route('expert.seeking.index')}}">ТРЛ и УРЛ</a>
       @endif

            <ul class="sub-menu-wrapper">
              <li class="{{Request::url()==route('expert.seeking.index') ? 'active':''}}">
                <a href="{{route('expert.seeking.index')}}"><span>Търсещи работа лица</span></a></li>
              <li class="{{Request::url()==route('expert.found.index') ? 'active':''}}">
                <a href="{{route('expert.found.index')}}"><span>Устроени на работа лица</span></a></li>
            </ul>
         </li>

      </ul>
  </nav>
