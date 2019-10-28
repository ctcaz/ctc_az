<!--
		File:	resources\views\admin\nom\professions\index.blade.php
		 Ver:	1.00.003
 Purpose:	Profession index blade
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
-->


@extends('admin.form')

@section('contents')


	    <div class="container-fluid clearfix">
        <div class="content">

        	<h2 class="h3 main-heading">Списък с професии</h2>
					<p><a href="{{route('nom.professions.create')}}" class="btn btn-outline btn-outline-primary btn-lg">Добави професия</a></p>

					<div class="form-items">
						<section>
								<h3><span class="primary-bgr">Критерии за търсене</span></h3>
										<div class="row">
											<div class="col">
												<label for="">Наименование:</label>
												<input type="text" class="form-control" id="fi_name">
											</div>
											<div class="col">
												<label for="">Код:</label>
												<input type="text" class="form-control" id="fi_code">
											</div>
											<div class="col">
												<label for="">Описание:</label>
												<input type="text" class="form-control" id="fi_description">
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

										<h6><strong>Списък с професии</strong></h6>

										<table class="table">
										<thead>
											<tr>
												<th scope="col">Наименование</th>
												<th scope="col">Код</th>
												<th scope="col">Описание</th>
												<th scope="col">Статус</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($n_profession as $n_professions)
												<tr>
													<td>
														<a href="{{route('nom.professions.edit', $n_professions->id)}}" class="text-primary">{{ $n_professions->name }}</a>
													</td>

													<td>{{ $n_professions->code }}</td>
													
													<td>{{ $n_professions->description }}</td>

													<td>{{ $n_professions->is_active }}</td>
												</tr>
											@endforeach
										</tbody>
									</table>

									{!! $n_profession->links() !!}

							</section>
					</div>

        </div>
      </div>
			
@endsection
