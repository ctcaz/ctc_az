<!--
		File:	resources\views\admin\nom\genders\edit.blade.php
		 Ver:	1.00.003
 Purpose:	Gender edit blade
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
-->



@extends('admin.form')

@section('contents')
  <div class="container-fluid clearfix">
    <h2 class="h3 main-heading">Корекция на пол</h2>
		
    <form class="" action="{{route('nom.genders.update', $n_gender)}}" method="post">
      <div class="form-items">
        @csrf
        @method('PUT')

        <section>
          <h6><strong>Корекция на пол</strong></h6>
            <div class="row">
              <div class="col">
                <label for="name">Наименование</label>
                <input type="text" name="name" autocomplete="off" value="{{$n_gender->name}}" class="form-control">
              </div>
							
							
              <div class="col">
                <label for="code">Код</label>
                <input type="text" name="code" autocomplete="off" value="{{$n_gender->code}}" class="form-control">
              </div>
							
              <div class="col">
                <label for="">Активен/Деактивиран:</label>
                <br><br>
                @foreach ($n_gender->activeOptions() as $activeOptionKey => $activeOptionValue)
                  <label class="radio-inline"><input type="radio" name="is_active" {{$n_gender->is_active == $activeOptionValue ? 'checked' : ''}} value="{{$activeOptionKey}}">{{$activeOptionValue}}</label>
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
								  <a href="{{ url('/admin/nom/genders/') }}">  
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
