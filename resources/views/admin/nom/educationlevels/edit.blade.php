<?php /*<!--
		File:	resources\views\admin\nom\educationlevels\edit.blade.php
		 Ver:	1.00.003
 Purpose:	Education levels edit blade
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
-->*/?>



@extends('admin.form')

@section('contents')
  <div class="container-fluid clearfix">
    <h2 class="h3 main-heading">Редактиране на вид образование</h2>

    <form class="" action="{{route('nom.educationlevels.update', $n_education_level->id)}}" method="post">
      <div class="form-items">
        @csrf
        @method('PUT')

        <section>
          <h6><strong>Редактиране на вид образование</strong></h6>
            <div class="row">
              <div class="col">
                <label for="name">Наименование</label>
                <input type="text" name="name" autocomplete="off" value="{{$n_education_level->name}}" class="form-control">
              </div>


              <div class="col">
                <label for="code">Наименование EN</label>
                <input type="text" name="name_en" autocomplete="off" value="{{$n_education_level->name_en}}" class="form-control">
              </div>

              <div class="col">
                <label for="">Активен/Деактивиран:</label>
                <br><br>
                @foreach ($n_education_level->activeOptions() as $activeOptionKey => $activeOptionValue)
                  <label class="radio-inline"><input type="radio" name="is_active" {{$n_education_level->is_active == $activeOptionValue ? 'checked' : ''}} value="{{$activeOptionKey}}">{{$activeOptionValue}}</label>
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
								  <a href="{{ url('/admin/nom/educationlevels/') }}">
                  <button type="submit" class="btn btn-primary btn-lg" align="right">Отказ</button>
									</a href>
		</p>
		  <div class="col col-md-4">
			</div>

  </div>
@endsection
