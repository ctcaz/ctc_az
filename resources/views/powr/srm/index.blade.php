<!--
		File:	resources\views\powr\srm\index.blade.php
		 Ver:	1.00.000
 Purpose:	SRM content for POWR index blade
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
-->

@extends('powr.form')

@section('navigation')
  @include('powr.nav')
@endsection

@section('contents')
  <div class="container-fluid clearfix">

        	<h2 class="h3 main-heading">Свободни работни места</h2>
            <p><a href="#" class="btn btn-outline btn-outline-primary" style="padding-left: 4em;"><i class="icon-add-doc"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><g fill="none" stroke="#1e8bc3" stroke-width="2" stroke-miterlimit="10"><path stroke-linecap="round" d="M21 22H3V2h12.1L21 9z"/><path d="M14 2v7h7"/></g></svg></i> Подай СРМ</a></p>
            <hr>
            <div class="form-items hide">
            	<section>
                	<h3><span class="primary-bgr">СРМ</span></h3>
                    <h6><strong>Заявка спецификация:</strong></h6>
                    <div class="row"></div>
                    <h6><strong>Работно място:</strong></h6>
                </section>
            </div>

  </div>

@endsection
