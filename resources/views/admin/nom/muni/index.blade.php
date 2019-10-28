@extends('admin.form')

@section('contents')
	    <div class="container-fluid clearfix">
        <div class="content">

        	<h2 class="h3 main-heading">Списък области</h2>
					<p><a href="{{route('nom.muni.create')}}" class="btn btn-outline btn-outline-primary btn-lg">Добави област</a></p>

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

										<h6><strong>Списък области</strong></h6>

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
														<a href="{{route('nom.countries.edit', $n_country)}}" class="text-primary">{{ $n_country->name }}</a>
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

@endsection
