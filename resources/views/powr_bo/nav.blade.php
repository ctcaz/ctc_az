<?php /*<!--
		File:	resources\views\powr_bo\nav.blade.php
		 Ver:	1.00.000
 Purpose:	NAVIGATION for POWR Backoffice blade
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
-->*/?>

<h2 class="text-center h4">Информационно-комуникационна платформа "Предприятията, осигуряващи временна заетост"</h2>

<div class="container-fluid clearfix">
		<nav class="site-nav">
				<ul class="nav-x center">
					<li class="sub-menu"><a href="#">Заявки</a>
							<ul class="sub-menu-wrapper">
								<li><a href="#"><span>Заявки за регистрации</span></a></li>
								<li><a href="#"><span>Заявки за уведомления</span></a></li>
								<li><a href="#"><span>Заявки за промяна на обстоятелства</span></a></li>
							</ul>
					 </li>
					 <li class="active"><a href="{{route('powr_bo.registered.index')}}">Регистрации</a></li>
					 <li class="sub-menu"><a href="#">Откази</a>
							<ul class="sub-menu-wrapper">
								<li><a href="#"><span>Отказани Регистрации</span></a></li>
								<li><a href="#"><span>Отказани Уведомления</span></a></li>
								<li><a href="#"><span>Отказани Промени на обстоятелствата</span></a></li>
							</ul>
					 </li>
					 <li class=""><a href="#">Справки</a></li>
				</ul>
		</nav>


  <?php
		/*
		<!--
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
		-->
		*/
	?>
