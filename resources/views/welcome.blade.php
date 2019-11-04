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

<div class="container-fluid">
		<h2 class="text-center h3">Информационно-комуникационна платформа <br><small class="h5 text-secondary">частни трудови посредници и предприятия осигуряващи временна работа</small></h2>
			<div class="index-items">
				<div class="row">
						<div class="col-md-4 info">
								<div class="inner">
										<p>Платформата предоставя функционална възможност за подаване на Заявление за регистрация като частен трудов посредник, Уведомление (Приложение 4 към чл. 18а, алинея 1 от Наредба за условията и реда за извършване на посредническа дейност по наемане на работа) както и регистрация на Предприятия осигуряващи временна работа.</p>
									<p>За по-подробна информация свалете приложения файл под параграфа.</p>
									<p><a href="../tmp/Instruction-Registration.pdf" class="btn btn-light pdf" target="_blank">Изтегли инструкции</a></p>
									</div>
							</div>
							<div class="col-md-4 registration">
								<h4 class="success-bgr text-center">Регистрация</h4>
									<div class="inner">
										<!--
										<p><a href="registration-application.htm" class="btn btn-outline btn-outline-success btn-lg btn-block btn-more">Заявление за регистрация на ЧТП</a></p>
										<p><a href="notice-application.htm" class="btn btn-outline btn-outline-warning btn-lg btn-block btn-more">Подаване на Уведомление</a></p>
										<p><a href="registration-povr.htm" class="btn btn-outline btn-outline-primary btn-lg btn-block btn-more">Регистрация на ПОВР</a></p>
									-->
										<p><a href="{{route('application.index')}}" class="btn btn-outline btn-outline-success btn-lg btn-block btn-more">Заявка за регистрация на ЧТП</a></p>
										<p><a href="notice-application.htm" class="btn btn-outline btn-outline-warning btn-lg btn-block btn-more">Подаване на Уведомление</a></p>
										<p><a href="{{route('powr_regreq.index')}}" class="btn btn-outline btn-outline-primary btn-lg btn-block btn-more">Регистрация на ПОВР</a></p>
									</div>
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

@endsection
