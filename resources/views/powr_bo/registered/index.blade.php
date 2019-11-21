<?php /*<!--
		File:	resources\views\powr_bo\registered\index.blade.php
		 Ver:	1.00.000
 Purpose:	Registered content for POWR Backoffice index blade
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
-->*/?>



@extends('powr_bo.form')

@section('navigation')
  @include('powr_bo.nav')
@endsection


@section('contents')



		<div class="container-fluid clearfix">
			<div class="row">
				<div class="col col-md-10">
					<div class="container-fluid clearfix">
		        <div class="content">
							<!-- <h2 class="h3 main-heading">Списък регистрации</h2>-->
              <h2 class="h3 main-heading">Списък на предприятията, които осигуряват временна работа, съгласно Закон за насърчаване на заетостта (изм. ДВ, бр. 7 от 24.01.2012г.)</h2>

							<div class="form-items">
									<section>
											<!--<h3><span class="primary-bgr">Списък регистрации</span></h3>-->
                      <h3><span class="primary-bgr">Регистрации на ПОВР</span></h3>
												<table class="table">
												<thead>
                          <tr>
                            <th scope="col">ЕИК/БУЛСТАТ / Идентификатор</th>
                            <th scope="col">Наименование</th>
                            <th scope="col">Удостоверение за регистрация № / дата</th>
                            <th scope="col">Седалище и адрес на управление</th>
                            <th scope="col">Валидност на регистрацията</th>
                            <th scope="col">Последна промяна</th>
                          </tr>
												</thead>
												<tbody>
                          @foreach ($powr_regs as $row)
    												<tr>
                              <td>
                                <a href="{{route('powr_bo.registered.edit', $row->id)}}" class="text-primary">{{ $row->uic }}</a>
                              </td>
                              <td>{{ $row->name }} {{ $row->ctypeName }}</td>
                              <td>{{ $row->zzldcode }}</td>
                              <td>{{ $row->m_street }} <br> <label>Офис:</label> {{ $row->m_street }}</td>
                              <td>{{ $row->date_valid }}</td>
                              <td>{{ $row->lastupdated }}</td>

->get()    												</tr>
    											@endforeach

                          <?php /*
													<tr>
														<td><a href="#" class="text-primary">001</a></td>
														<td>205740423</td>
														<td>Човешка сила</td>
														<td>Нов посредник</td>
														<td>Подадена</td>
														<td>19.08.2019 / 12:22:23</td>
													</tr>
													<tr>
														<td><a href="#" class="text-primary">002</a></td>
														<td>205740423</td>
														<td>Човешка сила</td>
														<td>Нов посредник</td>
														<td>Подадена</td>
														<td>19.08.2019 / 12:22:23</td>
													</tr>
													<tr>
														<td><a href="#" class="text-primary">003</a></td>
														<td>205740423</td>
														<td>Човешка сила</td>
														<td>Нов посредник</td>
														<td>Подадена</td>
														<td>19.08.2019 / 12:22:23</td>
													</tr>
                          */ ?>
												</tbody>
											</table>
                      {!! $powr_regs->links() !!}

									</section>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php
		/*
	    <div class="container-fluid clearfix">
        <div class="content">

        	<h2 class="h3 main-heading">Списък страни</h2>
					<p><a href="{{route('nom.countries.create')}}" class="btn btn-outline btn-outline-primary btn-lg">Добави страна</a></p>

					<div class="form-items">
						<section>
								<h3><span class="primary-bgr">Критерии за търсене</span></h3>
										<div class="row">
											<div class="col">
												<label for="">Наименование:</label>
												<input type="text" class="form-control" id="">
											</div>
											<div class="col">
												<label for="">Код:</label>
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

										<h6><strong>Списък страни</strong></h6>

										<table class="table">
										<thead>
											<tr>
												<th scope="col">Наименование</th>
												<th scope="col">Код</th>
												<th scope="col">Статус</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($n_countries as $n_country)
												<tr>
													<td>
														<a href="{{route('nom.countries.edit', $n_country->id)}}" class="text-primary">{{ $n_country->name }}</a>
													</td>

													<td>{{ $n_country->code }}</td>

													<td>{{ $n_country->is_active }}</td>
												</tr>
											@endforeach
										</tbody>
									</table>

									{!! $n_countries->links() !!}

							</section>
					</div>

        </div>
      </div>
	  */
	?>
@endsection
