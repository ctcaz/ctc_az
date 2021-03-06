<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Информационно-комуникационна платформа "Частни трудови посредници"</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="icon" href="../favicon.ico">
<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/_m.css">
<link rel="stylesheet" href="../css/_c.css">
<link rel="stylesheet" href="../css/_r.css">

<script src="../js/jquery-3.3.1.slim.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
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
      <div class="level-1">
      	<div class="container-fluid clearfix">
        	<div class="float-left"><a href="https://www.az.government.bg/" class="header-btn"><strong>www.az.government.bg</strong></a></div>
            <div class="meta float-right">
            	<div class="lang"> <a href="#" title="English" class="lang-change"><img src="../img/flags/24/EN.png" alt="EN"> <span>English</span></a>
                    <ul>
                        <li class="current"><a href="#" title="English" style="background-image: url(../img/flags/24/EN.png);"><span>English</span></a></li>
                        <li class=""><a href="#" title="Български" style="background-image: url(../img/flags/24/BG.png);"><span>Български</span></a></li>
                    </ul>
                </div>
                <div class="login logged-out">
                	<a href="#" class="header-btn login-btn"><i><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"><style>.st0{fill:none;stroke:#fff;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}</style><circle class="st0" cx="16" cy="11.7" r="4.6"/><path class="st0" d="M26.4 26.2c-1-5.7-5.3-9.8-10.4-9.8-5.1 0-9.4 4.2-10.4 9.8h20.8z"/></svg></i></a>
                </div>
            </div>
        </div>
      </div>
      <div class="level-2">
      	<div class="container-fluid clearfix">
        	<div class="site-logo float-left clearfix">
            	<i class="float-left"><img src="../img/coat-of-arms-bg.png" alt=""/></i>
                <h3 class="sub-title">Министерство на труда и социалната политика</h3>
                <h1 class="main-title">Агенция по заетостта</h1>
            </div>
            <div class="site-logo float-right clearfix">
            	<i><img src="../img/az-logo-bg.png" width="72" height="80" alt="Агенция по заетостта" /> <span class="text-hide">Агенция по заетостта</span></i>
            </div>
            <hr>
        </div>
      </div>
    </header>

	<main role="main">
	<div class="container-fluid">
    	<h2 class="text-center h3">Информационно-комуникационна платформа "Частни трудови посредници"</h2>
        <div class="index-items">
        	<div class="row">
                <div class="col-md-4">
                  <h4 class="success-bgr text-center">Регистрация на Частен Трудов Посредник</h4>
                  <p>Информационно-комуникационна платформа &quot;Частни трудови посредници&quot; предоставя функционална възможност за попълване на Заявка за регистрация като частен трудов посредник.</p>
                    <p>Кандидатстващото лице може да попълни заявката като избере бутона Заявка за регистрация на частен трудов посредник и попълни нужните данни. Задължително изискване е комплекта от документи по чл. 7 и чл. 8 от Наредбата за условията и реда за извършване на посредническа дейност по наемане на работа да се подаде или изпрати в Агенцията по заетостта, бул. “Княз Ал. Дондуков” №3, София 1000.</p>
                    <p>За по-подробна информация свалете приложения файл с линк Изтегли инструкциите под параграфа.<br><br></p>
                    <p><a href="#" class="btn btn-light pdf">Изтегли инструкции</a></p>
                    <p><a href="inside-01.htm" class="btn btn-outline btn-outline-success btn-lg btn-block btn-more">Заявка за регистрация на ЧТП</a></p>
                </div>
                <div class="col-md-4">
                  <h4 class="warning-bgr text-center">Уведомление за временно/еднократно предоставяне на услуги</h4>
                  <p>Информационно-комуникационна платформа &quot;Частни трудови посредници&quot; предоставя функционална възможност за попълване на Уведомление (Приложение 4 към чл. 18а, алинея 1 от Наредба за условията и реда за извършване на посредническа дейност по наемане на работа).</p>
        <p>Кандидатстващото лице може да попълни уведомлението като избере бутона Уведомление за временно/еднократно предоставяне на посреднически услуги и попълни нужните данни. Попълненото Уведомление се разпечатва, подписва и подпечатва от заявителят и се подава или изпраща в Агенцията по заетостта, бул. “Княз Ал. Дондуков” №3, 1000, София.</p>
        <p>За по-подробна информация свалете приложения файл с линк Изтегли инструкциите под параграфа.</p>
                    <p><a href="#" class="btn btn-light pdf">Изтегли инструкции</a></p>
                    <p><a href="inside-01.htm" class="btn btn-outline btn-outline-warning btn-lg btn-block btn-more">Подаване на Уведомление</a></p>
                </div>
                <div class="col-md-4">
                  <h4 class="primary-bgr text-center">Вход като регистриран частен трудов посредник</h4>
                  <div class="login-bar">
                    <form>
                      <div class="form-group">
                        <label for="e-mail">Email</label>
                        <input type="email" class="form-control form-control-lg" id="e-mail">
                      </div>
                      <div class="form-group">
                        <label for="password">Парола</label>
                        <input type="password" class="form-control form-control-lg" id="password">
                      </div>
                      <div class="form-group"><a href="inside-01.htm" class="btn btn-primary btn-block btn-lg">Вход</a><!--<button type="submit" class="btn btn-primary btn-block btn-lg">Вход</button>--></div>
                      <p class="text-right m-0"><a href="#">Забравена парола</a></p>
                    </form>
                  </div>
                </div>
              </div>
        </div>
    </div>

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
        <span class="flag float-right"><i><img src="../img/esf-logo-bg.png" alt="Европейски социален фонд"/></i><small class="title">Европейски социален фонд</small></span>
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
</body>
</html>
