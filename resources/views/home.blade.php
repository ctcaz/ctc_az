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
                    <a href="#" class="header-btn login-btn"><i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32">
                            <style>.st0{fill:none;stroke:#fff;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}</style>
                            <circle class="st0" cx="16" cy="11.7" r="4.6"/>
                            <path class="st0" d="M26.4 26.2c-1-5.7-5.3-9.8-10.4-9.8-5.1 0-9.4 4.2-10.4 9.8h20.8z"/>
                        </svg>
                        </i><span class="user">{{ Auth::user()->name }}</span>
                    </a>

                    <a href="{{ route('logout') }}" class="header-btn">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf

                            <button type="submit" class="btn btn-primary btn-block btn-lg">
								{{ __('Изход') }}
							</button>

                        </form>
                    </a>

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
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Номенклатура
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Полове</a>
                        <a class="dropdown-item" href="#">Езици</a>
                        <a class="dropdown-item" href="#">Валути</a>
                        <a class="dropdown-item" href="#">Категории за управление на МПС</a>
                        <a class="dropdown-item" href="#">Видове търговци и дружества</a>
                        <a class="dropdown-item" href="#">Предпочитан вид на договора</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Страни</a>
                        <a class="dropdown-item" href="#">Области</a>
                        <a class="dropdown-item" href="#">Общини</a>
                        <a class="dropdown-item" href="#">Градове</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Компютърни умения</a>
                        <a class="dropdown-item" href="#">Образование</a>
                        <a class="dropdown-item" href="#">Професии</a>
                        <a class="dropdown-item" href="#">Видове професии</a>
                        <a class="dropdown-item" href="#">Специалности</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Видове заетост</a>
                        <a class="dropdown-item" href="#">Видове работно време</a>
                        <a class="dropdown-item" href="#">Трудов стаж</a>
                        <a class="dropdown-item" href="#">Видове заетост</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Бюра по труда</a>
                      </div>
                    </li>
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
                              @foreach ($users as $user)

                                <tr>
                                  <td><a href="#" class="text-primary">{{ $user->email }}</a></td>
                                  <td>{{ $user->name }}</td>
                                  @if ($user->role_id == 1)
                                    <td>Администратор</td>
                                  @endif  
                                  <td>Активен</td>
                                </tr>
                                
                              @endforeach

                            </tbody>
                          </table>
                            
                      </section>
                  </div>
              </div>
          </div>

      </main>
      
      <footer id="footer">
        <div class="level-3">
          <div class="container-fluid">
              <p class="footer-copy">© 2019 Агенция по заетостта</p>
          </div>
        </div>
      </footer>
    </div>
  </body>
</html>
