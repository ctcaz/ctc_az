<!--
		File:	resources\views\admin\nom\carcategory\edit.blade.php
		 Ver:	1.00.003
 Purpose:	Carcategory/Driver licence edit blade
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
-->



@extends('admin.form')

@section('contents')
  <div class="container-fluid clearfix">
    <h2 class="h3 main-heading">Корекция на категория за управление на МПС</h2>


    <form class="" action="{{route('nom.carcategory.update', $n_carcategory)}}" method="post">
      <div class="form-items">
        @csrf
        @method('PUT')

        <section>
          <h6><strong>Корекция на категория за управление на МПС</strong></h6>
            <div class="row">
              <div class="col">
                <label for="name">Категория</label>
                <input type="text" name="name" autocomplete="off" value="{{$n_carcategory->category}}" class="form-control">
              </div>
							
							
              <div class="col">
                <label for="code">Описание</label>
                <input type="text" name="code" autocomplete="off" value="{{$n_carcategory->description}}" class="form-control">
              </div>
							
              <div class="col">
                <label for="">Активен/Деактивиран:</label>
								<input type="text" name="code" autocomplete="off" value="{{$n_carcategory->old_code}}" class="form-control">
              </div>

            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary">Запази</button>
							<!--<button type="submit" class="btn btn-primary btn-lg">Запази</button>-->
            </div>

      </section>

      </div>
    </form>
		<p align="center">
								  <a href="{{ url('/admin/nom/carcategory/') }}">  
                  <button type="submit" class="btn btn-primary btn-lg" align="right">Отказ</button>
									</a href>
		</p>
		  <div class="col col-md-4">
			</div>

		<!--
		  <button type="reset" formaction="{{ url('/admin/nom/genders/') }}" class="btn btn-primary btn-lg">Отказ</button>
		-->
  </div>
@endsection
