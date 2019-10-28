<!--
		File:	resources\views\admin\nom\professionclass\create.blade.php
		 Ver:	1.00.003
 Purpose:	Profession class create blade
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
-->

@extends('admin.form')

@section('contents')
  <div class="container-fluid clearfix">
    <h2 class="h3 main-heading">Добавяне на вид професия</h2>

    <form class="" action="{{route('nom.professionclass.store')}}" method="post">
      <div class="form-items">
        @csrf
        

        <section>
          <h6><strong>Добавяне на вид професия</strong></h6>
            <div class="row">
              <div class="col">
                <label for="name">Наименование:</label>
                <input type="text" name="name" autocomplete="off" value="{{old('name')}}" class="form-control">
              </div>


              <div class="col">
                <label for="code">Код:</label>
                <input type="text" name="code" autocomplete="off" value="{{old('code')}}" class="form-control">
              </div>

              <div class="col">
                <label for="code">Ниво:</label>
                <input type="text" name="lvl" autocomplete="off" value="{{old('lvl')}}" class="form-control">
              </div>

              <div class="col">
                  <label for="">Активен/Деактивиран:</label>
                  <br><br>
                  <label class="radio-inline"><input type="radio" name="is_active" checked value="Y">Активна</label>
                  <label class="radio-inline"><input type="radio" name="is_active" value="N">Неактивна</label>
              </div>

            </div>


            <div class="form-group">
              <button type="submit" class="btn btn-primary">Запази</button>
            </div>
        </section>


      </div>
    </form>
		<p align="center">
								  <a href="{{ url('/admin/nom/professionclass/') }}">  
                  <button type="submit" class="btn btn-primary btn-lg" align="right">Отказ</button>
									</a href>
		</p>

  </div>
@endsection
