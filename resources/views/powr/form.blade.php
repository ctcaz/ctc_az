<?php /* <!--
		File:	resources\views\powr\form.blade.php
		 Ver:	1.00.000
 Purpose:	FORM for POWR blade
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
--> */ ?>

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

@section('nav')
  @yield('navigation')
@endsection

@section('content')
  @yield('contents')
@endsection
