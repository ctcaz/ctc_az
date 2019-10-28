<!--
		File:	resources\views\admin\nom\genders\index.blade.php
		 Ver:	1.00.003
 Purpose:	Currency index blade
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
-->


@extends('admin.form')

@section('contents')


	    <div class="container-fluid clearfix">
        <div class="content">

        	<h2 class="h3 main-heading">Списък категории за управление на МПС</h2>
					<p><a href="{{route('nom.carcategory.create')}}" class="btn btn-outline btn-outline-primary btn-lg">Добави категория</a></p>

					<div class="form-items">
						<section>
								<h3><span class="primary-bgr">Критерии за търсене</span></h3>
										<div class="row">
											<div class="col">
												<label for="">Категория:</label>
												<input type="text" class="form-control" id="fi_category">
											</div>
											<div class="col">
												<label for="">Описание:</label>
												<input type="text" class="form-control" id="fi_descr">
											</div>
											<div class="col">
												<label for="">Код стар:</label>
												<input type="text" class="form-control" id="fi_code_old">
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

										<h6><strong>Списък категории за управление на МПС</strong></h6>

										<table class="table">
										<thead>
											<tr>
												<th scope="col">Категория</th>
												<th scope="col">Описание</th>
												<th scope="col">Код стар</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($n_car_categories as $n_carcategory)
												<tr>
													<td>
														<a href="{{route('nom.carcategory.edit', $n_carcategory)}}" class="text-primary">{{ $n_carcategory->category }}</a>
													</td>

													<td>{{ $n_carcategory->description }}</td>

													<td>{{ $n_carcategory->old_code }}</td>
												</tr>
											@endforeach
										</tbody>
									</table>

									{!! $n_car_categories->links() !!}

							</section>
					</div>

        </div>
      </div>
			
@endsection
