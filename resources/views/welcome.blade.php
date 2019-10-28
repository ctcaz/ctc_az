@extends('layouts.app')

@section('header-1')
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
@endsection


@section('content')
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
          <p><a href="{{route('application.index')}}" class="btn btn-outline btn-outline-success btn-lg btn-block btn-more">Заявка за регистрация на ЧТП</a></p>
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

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row">
                    <label for="e-mail">Email</label>
                    <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="password">Парола</label>
                    <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="off">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">
                        {{ __('Вход') }}
                    </button>

                    @if (Route::has('password.request'))
                      <p class="text-right m-0">
                        <a href="{{ route('password.request') }}">
                            {{ __('Забравена парола?') }}
                        </a>
                      </p>
                    @endif
                </div>

            </form>

          </div>
        </div>
    </div>
  </div>
</div>
</main>
@endsection
