<?php /*<!--
		File:	resources\views\admin\nom\educationlevels\index.blade.php
		 Ver:	1.00.003
 Purpose:	Education levels index blade
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
-->*/?>


@extends('admin.form')

@section('contents')


	    <div class="container-fluid clearfix">
        <div class="content">

        	<h2 class="h3 main-heading">Списък с вид образование</h2>
					<p><a href="{{route('nom.educationlevels.create')}}" class="btn btn-outline btn-outline-primary btn-lg">Добави вид образование</a></p>

					<div class="form-items">
						<section>
								<h3><span class="primary-bgr">Критерии за търсене</span></h3>
										<div class="row">
											<div class="col">
												<label for="">Наименование:</label>
												<input type="text" class="form-control" id="fi_name">
											</div>
											<div class="col">
												<label for="">Наименование EN:</label>
												<input type="text" class="form-control" id="fi_name_en">
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
											<a href="#" class="btn btn-primary">Търси</a> <span class="sep-line size-l"> | </span> <input class="btn btn-outline-danger" type="reset" value="Изчисти">


											<!--
											<a href="#" class="btn btn-outline-danger" id="btn_clear");">Изчисти</a>
											<button id="btn_clear">Изчисти</button>
											<input type="reset">Изчисти</input>
											-->
										</div>

										<hr>

										<h6><strong>Списък с вид образование</strong></h6>

										<table class="table">
										<thead>
											<tr>
												<th scope="col">Наименование</th>
												<th scope="col">Наименование EN</th>
												<th scope="col">Статус</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($n_education_level as $n_educationlevels)
												<tr>
													<td>
														<a href="{{route('nom.educationlevels.edit', $n_educationlevels->id)}}" class="text-primary">{{ $n_educationlevels->name }}</a>
													</td>

													<td>{{ $n_educationlevels->name_en }}</td>

													<td>{{ $n_educationlevels->is_active }}</td>
												</tr>
											@endforeach
										</tbody>
									</table>

									{!! $n_education_level->links() !!}

							</section>
					</div>

        </div>
      </div>

@endsection
