<?php /*<!--
		File:	resources\views\admin\nom\computerskills\edit.blade.php
		 Ver:	1.00.003
 Purpose:	Computer skills edit blade
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
-->*/?>



@extends('admin.form')

@section('contents')
  <div class="container-fluid clearfix">
    <h2 class="h3 main-heading">Корекция на компютърни умения</h2>

    <form class="" action="{{route('nom.computerskills.update', $n_computer_skills->id)}}" method="post">
      <div class="form-items">
        @csrf
        @method('PUT')

        <section>
          <h6><strong>Корекция на компютърни умения</strong></h6>
            <div class="row">
              <div class="col">
                <label for="name">Наименование</label>
                <input type="text" name="name" autocomplete="off" value="{{$n_computer_skills->name}}" class="form-control">
              </div>


              <div class="col">
                <label for="code">Описание</label>
                <input type="text" name="description" autocomplete="off" value="{{$n_computer_skills->description}}" class="form-control">
              </div>

              <div class="col">
                <label for="">Активен/Деактивиран:</label>
                <br><br>
                @foreach ($n_computer_skills->activeOptions() as $activeOptionKey => $activeOptionValue)
                  <label class="radio-inline"><input type="radio" name="is_active" {{$n_computer_skills->is_active == $activeOptionValue ? 'checked' : ''}} value="{{$activeOptionKey}}">{{$activeOptionValue}}</label>
                @endforeach
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
								  <a href="{{ url('/admin/nom/computerskills/') }}">
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
