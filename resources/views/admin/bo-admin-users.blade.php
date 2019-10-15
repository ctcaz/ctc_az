<!doctype html>
<html>
<head>
  <meta charset="utf-8">

  <title>Информационно-комуникационна платформа "Частни трудови посредници"</title>

  <meta name="description" content="">
  <meta name="keywords" content="">
  <link rel="icon" href="../favicon.ico">
  <meta name="viewport" content="width=device-width">


  <!-- Styles -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/_m.css') }}" rel="stylesheet">
  <link href="{{ asset('css/_c.css') }}" rel="stylesheet">
  <link href="{{ asset('css/_r.css') }}" rel="stylesheet">

  <!-- Scripts -->
  <script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}" defer></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>

  <SCript>
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

  </script>
</head>

  <body class="inside sticky-footer">
    <div id="site">
      <header id="header">
        <div class="level-1">
          <div class="container-fluid clearfix">
            <div class="float-left"><a href="https://www.az.government.bg/" class="header-btn"><strong>www.az.government.bg</strong></a></div>
              <div class="meta float-right">
                  <div class="login logged-in">
                    <a href="#" class="header-btn login-btn"><i><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"><style>.st0{fill:none;stroke:#fff;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}</style><circle class="st0" cx="16" cy="11.7" r="4.6"/><path class="st0" d="M26.4 26.2c-1-5.7-5.3-9.8-10.4-9.8-5.1 0-9.4 4.2-10.4 9.8h20.8z"/></svg></i><span class="user">Админ</span></a>
                      <a href="bo-login.htm" class="header-btn">Изход</a>
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
        <div class="container-fluid clearfix">
            <h2 class="text-center h4">Административен интерфейс Регистър на частните трудови посредници</h2>
              <nav class="site-nav">
                <ul class="nav-x center">
                    <li class="active"><a href="bo-admin-users.htm">Потребители</a></li>
                    <li><a href="bo-admin-settings.htm">Настройки на системата</a></li>
                  </ul>
              </nav>
              
              <div class="content">
                  
                <h2 class="h3 main-heading">Списък потребители</h2>
                  <p><a href="bo-admin-user-profile.htm" class="btn btn-outline btn-outline-primary btn-lg">Създай потребител</a></p>
                  <div class="form-items">
                    <section>
                        <h3><span class="primary-bgr">Критерии за търсене</span></h3>
                            <div class="row">
                              <div class="col">
                                <label for="">Име:</label>
                                <input type="text" class="form-control" id="">
                              </div>
                              <div class="col">
                                <label for="">Презиме:</label>
                                <input type="text" class="form-control" id="">
                              </div>
                              <div class="col">
                                <label for="">Фамилия:</label>
                                <input type="text" class="form-control" id="">
                              </div>
                              <div class="col">
                                <label for="">Потребителско име:</label>
                                <input type="text" class="form-control" id="">
                              </div>
                              <div class="col">
                                <label for="">Роля:</label>
                                <input type="text" class="form-control" id="">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Активни</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Неактивни</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                <label class="form-check-label" for="inlineRadio3">Всички</label>
                              </div>
                            </div>
                            <div class="form-group">
                              <a href="#" class="btn btn-primary">Търси</a> <span class="sep-line size-l"> | </span> <a href="#" class="btn btn-outline-danger">Изчисти</a>
                            </div>
                            
                            <hr>
                            
                            <h6><strong>Списък потребители</strong></h6>
                            
                            <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Потребителско име</th>
                                <th scope="col">Имена на лицето</th>
                                <th scope="col">Роля</th>
                                <th scope="col">Статус</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td><a href="#" class="text-primary">V.Spasova@az.government.bg</a></td>
                                <td>Виолета Спасова</td>
                                <td>Експерт</td>
                                <td>Активен</td>
                              </tr>
                              <tr>
                                <td><a href="#" class="text-primary">sswaz@az.bg</a></td>
                                <td>Администратор</td>
                                <td>Администратор</td>
                                <td>Активен</td>
                              </tr>
                            </tbody>
                          </table>
                            
                      </section>
                  </div>
              </div>
          </div>

      </main>
      
      <footer id="footer">
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
