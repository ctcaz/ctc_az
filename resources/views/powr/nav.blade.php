<!--
		File:	resources\views\powr\nav.blade.php
		 Ver:	1.00.000
 Purpose:	NAVIGATION for POWR blade
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
-->

<h2 class="text-center h4">Информационно-комуникационна платформа "Предприятията, осигуряващи временна заетост"</h2>
	
	<nav class="site-nav">
		<ul class="nav-x center">
      <li class="{{Request::url()==route('powr.home.index') ? 'active':''}}">
        <a href="{{route('powr.home.index')}}">Начало</a></li>
			
      <li class="{{Request::url()==route('powr.profile.index') ? 'active':''}}">
        <a href="{{route('powr.profile.index')}}">Профил</a></li>
			
      <li class="{{Request::url()==route('powr.eservices.index') ? 'active':''}}">
        <a href="{{route('powr.eservices.index')}}">Е-услуги</a></li>
			
      <li class="{{Request::url()==route('powr.srm.index') ? 'active':''}}">
        <a href="{{route('powr.srm.index')}}">СРМ</a></li>
			
      <li class="{{Request::url()==route('powr.help.index') ? 'active':''}}">
        <a href="{{route('powr.help.index')}}">Помощ</a></li>
			
			<!--
                  <li class=""><a href="inside-02.htm"><span>Профил</span></a></li>
                  <li class=""><a href="inside-03.htm"><span>Е-услуги</span></a></li>
                  <li class=""><a href="inside-04.htm"><span>СРМ</span></a></li>
                  <li class=""><a href="inside-05.htm"><span>Помощ</span></a></li>
			-->
		</ul>
	</nav>

