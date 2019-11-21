<<<<<<< HEAD
<?php /*
<!--
		File:	resources\views\powr\eservices\index.blade.php
=======
<?php /* <!--
		File:	resources\views\powr\home\index.blade.php
>>>>>>> 8919d46813dbbf5754011e3c4293fbafe6b39236
		 Ver:	1.00.000
 Purpose:	eServices content for POWR index blade
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
--> */ ?>

@extends('powr.form')

@section('navigation')
  @include('powr.nav')
@endsection

@section('contents')
  <div class="container-fluid clearfix">

    <h2 class="h3 main-heading">Електронни административни услуги</h2>

    <p><a href="../_templates/registration-povr.htm" class="btn btn-outline btn-outline-primary" style="padding-left: 4em;"><i class="icon-add-doc"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><g fill="none" stroke="#1e8bc3" stroke-width="2" stroke-miterlimit="10"><path stroke-linecap="round" d="M21 22H3V2h12.1L21 9z"/><path d="M14 2v7h7"/></g></svg></i> Изменение и допълнения на обстоятелствата на ПОВР</a></p>

    <p><a href="../_templates/registration-povr.htm" class="btn btn-outline btn-outline-primary" style="padding-left: 4em;"><i class="icon-add-doc"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><g fill="none" stroke="#1e8bc3" stroke-width="2" stroke-miterlimit="10"><path stroke-linecap="round" d="M21 22H3V2h12.1L21 9z"/><path d="M14 2v7h7"/></g></svg></i> Продължаване срока на регистрация на ПОВР</a></p>

    <p><a href="inside-03-cancel-registration.htm" class="btn btn-outline btn-outline-primary" style="padding-left: 4em;"><i class="icon-add-doc"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><g fill="none" stroke="#1e8bc3" stroke-width="2" stroke-miterlimit="10"><path stroke-linecap="round" d="M21 22H3V2h12.1L21 9z"/><path d="M14 2v7h7"/></g></svg></i> Прекратяване на регистрация на ПОВР</a></p>

    <p><a href="inside-03-add-insurance.htm" class="btn btn-outline btn-outline-primary" style="padding-left: 4em;"><i class="icon-add-doc"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><g fill="none" stroke="#1e8bc3" stroke-width="2" stroke-miterlimit="10"><path stroke-linecap="round" d="M21 22H3V2h12.1L21 9z"/><path d="M14 2v7h7"/></g></svg></i> Подаване на ежегодни документи на ПОВР</a></p>


  </div>

@endsection
