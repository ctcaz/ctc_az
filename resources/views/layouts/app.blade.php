<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Информационно-комуникационна платформа "Частни трудови посредници"</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="icon" href="{{asset('favicon.ico')}}">
<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/_m.css')}}">
<link rel="stylesheet" href="{{asset('css/_c.css')}}">
<link rel="stylesheet" href="{{asset('css/_r.css')}}">

<link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">
<link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">


<script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/jquery.js')}}"></script>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{asset('js/jquery-ui.min.js')}}"></script>


<script>

$(document).ready(function() {

	// Responsive nav

	$(".nav-collapse").bind("click", function(){

	$("body").toggleClass("nav-on");

	return false;
	});


	// Padding for main, based on footer's height

	var bumpIt = function() {
      $('main').css('padding-bottom', $('#footer').outerHeight());
		  },
		  didResize = false;

	  bumpIt();

	  $(window).resize(function() {
		didResize = true;
	  });
	  setInterval(function() {
		if(didResize) {
		  didResize = false;
		  bumpIt();
		}
	  }, 250);

});

$(document).ready(function(){$(".lang-change").bind("click",function(){return $(this).parent().toggleClass("on"),!1}),$("html").click(function(){$(".lang-change").parent().removeClass("on")})});

</script>
</head>

<body class="index sticky-footer">
<div id="site">
    <header id="header">
			@yield('header-1')

      <div class="level-2">
      	<div class="container-fluid clearfix">
        	<div class="site-logo float-left clearfix">
            	<i class="float-left"><img src="{{asset('img/coat-of-arms-bg.png')}}" alt=""/></i>
                <h3 class="sub-title">Министерство на труда и социалната политика</h3>
                <h1 class="main-title">Агенция по заетостта</h1>
            </div>
            <div class="site-logo float-right clearfix">
            	<i><img src="{{asset('img/az-logo-bg.png')}}" width="72" height="80" alt="Агенция по заетостта" /> <span class="text-hide">Агенция по заетостта</span></i>
            </div>
            <hr>

						@yield('nav')
        </div>
      </div>
    </header>

		<main role="main">
			@yield('content')
		</main>


<footer id="footer">
  <div class="level-1">
  	<div class="container-fluid">
    	<p>При проблем, свързан с работата на системата, достъп на потребители или предоставената функционалност на частните трудови посредници, свържете се със служителите на дирекция "Разрешения за работа и регистрация на частни посредници" на адрес <strong><script>
document.write(unescape('%3C%61%20%68%72%65%66%3D%22%6D%61%69%6C%74%6F%3A%61%7A%5F%73%75%70%70%6F%72%74%5F%70%6F%73%72%65%64%6E%69%63%69%40%61%7A%2E%67%6F%76%65%72%6E%6D%65%6E%74%2E%62%67%22%3E%61%7A%5F%73%75%70%70%6F%72%74%5F%70%6F%73%72%65%64%6E%69%63%69%40%61%7A%2E%67%6F%76%65%72%6E%6D%65%6E%74%2E%62%67%3C%2F%61%3E'));
</script></strong></p>
    </div>
  </div>
  <div class="level-2">
  	<div class="container-fluid">
    	<span class="flag float-left"><i><svg xmlns="http://www.w3.org/2000/svg" width="70" height="48"><path fill="#039" d="M0 0h70v48H0z"/><path d="M34.2 10.3l-1.4-1h1.7l.5-1.6.5 1.6h1.7l-1.4 1 .5 1.6-1.4-1-1.4 1 .7-1.6zm-7.7 3.5l1.4-1 1.4 1-.5-1.6 1.4-1h-1.7L28 9.6l-.5 1.6h-1.7l1.4 1-.7 1.6zm-3.8 1l-.5 1.6h-1.7l1.4 1-.6 1.6 1.4-1 1.4 1-.5-1.6 1.4-1h-1.7l-.6-1.6zm-1.9 10.3l1.4 1-.5-1.6 1.4-1h-1.7l-.5-1.6-.5 1.6h-1.7l1.4 1-.5 1.6 1.2-1zm2.4 5.5l-.5-1.6-.5 1.6h-1.7l1.4 1-.5 1.6 1.4-1 1.4 1-.5-1.6 1.4-1h-1.9zm5.2 5.2l-.5-1.6-.5 1.6h-1.7l1.4 1-.5 1.6 1.4-1 1.4 1-.5-1.6 1.4-1h-1.9zm7.1 1.9l-.5-1.6-.5 1.6h-1.7l1.4 1-.5 1.6 1.4-1 1.4 1-.5-1.6 1.4-1h-1.9zm7.1-1.9l-.5-1.6-.5 1.6h-1.7l1.4 1-.5 1.6 1.4-1 1.4 1-.5-1.6 1.4-1h-1.9zm5.2-5.2l-.5-1.6-.5 1.6h-1.7l1.4 1-.5 1.6 1.4-1 1.4 1-.5-1.6 1.4-1h-1.9zm3.6-7.1h-1.7l-.5-1.6-.5 1.6H47l1.4 1-.5 1.6 1.4-1 1.4 1-.7-1.6 1.4-1zM45.9 19l1.4-1 1.4 1-.5-1.6 1.4-1h-1.7l-.5-1.6-.5 1.6h-1.7l1.4 1-.7 1.6zm-3.8-9.4l-.5 1.6h-1.7l1.4 1-.5 1.6 1.4-1 1.4 1-.6-1.6 1.4-1h-1.7l-.6-1.6z" fill="#fc0"/></svg></i><small class="title">Европейски съюз</small></span>
        <span class="flag float-right"><i><img src="{{asset('img/esf-logo-bg.png')}}" alt="Европейски социален фонд"/></i><small class="title">Европейски социален фонд</small></span>
        <p>Оперативна програма "Развитие на човешките ресурси"(2007-2013), Агенция по заетостта
BG 0501 РО001-6.1.05- <strong>"ПОВИШАВАНЕ КАЧЕСТВОТО НА ПРЕДСТАВЯНИТЕ ОТ АГЕНЦИЯ ПО ЗАЕТОСТТА УСЛУГИ НА ГРАЖДАНИТЕ И БИЗНЕСА С ФОКУС ВЪРХУ УЯЗВИМИТЕ ГРУПИ НА ПАЗАРА НА ТРУДА" - "ДА УСПЕЕМ ЗАЕДНО"</strong><br>
Проектът се осъществява с финансовата подкрепа на Оперативна програма "Развитие на човешките ресурси", съфинансирана от Европейския социален фонд на Европейския съюз<br>
<strong>Инвестира във вашето бъдеще!</strong></p>
		<p><small>Този подсайт е изготвен с финансовата помощ на Европейския социален фонд. Агенция по заетостта носи цялата отговорност за съдържанието на настоящия подсайт, и при никакви обстоятелства не може да се приеме като официална позиция на Европейския съюз или Договарящия орган.</small></p>
    </div>
  </div>
  <div class="level-3">
  	<div class="container-fluid">
    	<p class="footer-copy">© 2019 Агенция по заетостта</p>
  	</div>
  </div>
</footer>
</div>

		@yield('scripts')

</body>
</html>
