@extends('layouts.app')

@section('header-1')
  <div class="level-1">
    <div class="container-fluid clearfix">
        <div class="float-left">
          <a href="https://www.az.government.bg/" class="header-btn"><strong>www.az.government.bg</strong></a>
        </div>
        <div class="meta float-right">
            <div class="login logged-in">
              <a href="#" class="header-btn login-btn">
                <i>
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32">
                    <style>
                      .st0{fill:none;stroke:#fff;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}
                    </style>
                    <circle class="st0" cx="16" cy="11.7" r="4.6"/>
                    <path class="st0" d="M26.4 26.2c-1-5.7-5.3-9.8-10.4-9.8-5.1 0-9.4 4.2-10.4 9.8h20.8z"/>
                  </svg>
                </i>
                <span class="user">{{ Auth::user()->name }}</span>
              </a>

              <form action="{{ route('logout') }}" method="post" class="float-right">
                @csrf

                <button type="submit" class="btn header-btn">Изход</button>
              </form>



            </div>
        </div>
    </div>
  </div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Роли</div>

                <div class="card-body">
                    <!--
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (auth()->user()->hasRole('Администратор'))
                      <a href="{{route('admin.users.index')}}">
                        <button type="button" class="btn btn-danger">Администратор</button>
                      </a>
                    @endif

                    @if (auth()->user()->hasRole('Експерт'))
                      <a href="{{route('expert.registration.index')}}">
                        <button type="button" class="btn btn-warning">Експерт</button>
                      </a>
                    @endif

                    @if (auth()->user()->hasRole('Трудов посредник'))
                      <a href="{{route('ra.start.index')}}">
                        <button type="button" class="btn btn-success">Трудов посредник</button>
                      </a>
                    @endif


                    @if (auth()->user()->hasRole('ПОВР'))
                      <a href="{{route('powr.home.index')}}">
                        <button type="button" class="btn btn-info">ПОВР</button>
                      </a>
                    @endif
                    //-->

                    <div class="radio">
                      <label style="font-size: 2.5em">
                        @if (auth()->user()->hasRole('Администратор'))
                          <input type="radio" name="role">
                          <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                          <a href="{{route('admin.users.index')}}">Администратор</a>
                        @endif
                        <br>
                        @if (auth()->user()->hasRole('Експерт'))
                          <input type="radio" name="role">
                          <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                          <a href="{{route('expert.registration.index')}}">Експерт</a>
                        @endif
                        <br>
                        @if (auth()->user()->hasRole('Трудов посредник'))
                          <input type="radio" name="role">
                          <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                          <a href="{{route('ra.start.index')}}">Трудов посредник</a>
                        @endif
                        <br>
                        @if (auth()->user()->hasRole('ПОВР'))
                          <input type="radio" name="role">
                          <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                          <a href="{{route('powr.home.index')}}">ПОВР</a>
                        @endif
                      </label>
                    </div>

                </div>
            </div>




        </div>
    </div>
</div>
@endsection
