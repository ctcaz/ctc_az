<!--
		File:	resources\views\admin\nom\sadirectorates\edit.blade.php
		 Ver:	1.00.003
 Purpose:	SA Directorate edit blade
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
-->



@extends('admin.form')

@section('contents')
  <div class="container-fluid clearfix">
    <h2 class="h3 main-heading">Редактиране на бюро по труда</h2>
		
    <form class="" action="{{route('nom.sadirectorates.update', $n_sadirectorate->id)}}" method="post">
      <div class="form-items">
        @csrf
        @method('PUT')

        <section>
          <h6><strong>Редактиране на вид работно време</strong></h6>

            <div class="row" style="background-color:lavender;">
						  <div class="col col-md-2 h5" align="right"><label for="name">Наименование</label></div>
							<div class="col col-md-8"><input type="text" name="name" autocomplete="off" value="{{$n_sadirectorate->name}}" class="form-control">
							</div>
            </div>

            <div class="row" style="background-color:lavenderblush;">
						  <div class="col col-md-2 h5" align="right"><label for="code">Код</label></div>
							<div class="col col-md-8"><input type="text" name="code" autocomplete="off" value="{{$n_sadirectorate->code}}" class="form-control">
							</div>
            </div>

            <div class="row" style="background-color:lavender;">
						  <div class="col col-md-2 h5" align="right"><label for="phone">тел.</label></div>
							<div class="col col-md-8"><input type="text" name="phone" autocomplete="off" value="{{$n_sadirectorate->phone}}" class="form-control">
							</div>
            </div>

            <div class="row" style="background-color:lavenderblush;">
						  <div class="col col-md-2 h5" align="right"><label for="address">Адрес</label></div>
							<div class="col col-md-8"><input type="text" name="address" autocomplete="off" value="{{$n_sadirectorate->address}}" class="form-control">
							</div>
            </div>


            <div class="row" style="background-color:lavender;">
						  <div class="col col-md-2 h5" align="right"><label for="email">e-mail</label></div>
							<div class="col col-md-8"><input type="text" name="email" autocomplete="off" value="{{$n_sadirectorate->email}}" class="form-control">
							</div>
            </div>

            <div class="row" style="background-color:lavenderblush;">
						  <div class="col col-md-2 h5" align="right"><label for="phone_ais">тел.-АИС</label></div>
							<div class="col col-md-8"><input type="text" name="phone_ais" autocomplete="off" value="{{$n_sadirectorate->phone_ais}}" class="form-control">
							</div>
            </div>


            <div class="row" style="background-color:lavender;">
						  <div class="col col-md-2 h5" align="right"><label for="bic">BIC</label></div>
							<div class="col col-md-8"><input type="text" name="bic" autocomplete="off" value="{{$n_sadirectorate->bic}}" class="form-control">
							</div>
            </div>

            <div class="row" style="background-color:lavenderblush;">
						  <div class="col col-md-2 h5" align="right"><label for="iban">IBAN</label></div>
							<div class="col col-md-8"><input type="text" name="iban" autocomplete="off" value="{{$n_sadirectorate->iban}}" class="form-control">
							</div>
            </div>


            <div class="row" style="background-color:lavender;">
						  <div class="col col-md-2 h5" align="right"><label for="director">Директор</label></div>
							<div class="col col-md-8"><input type="text" name="director" autocomplete="off" value="{{$n_sadirectorate->director}}" class="form-control">
							</div>
            </div>

            <div class="row" style="background-color:lavenderblush;">
						  <div class="col col-md-2 h5" align="right"><label for="eik">ЕИК</label></div>
							<div class="col col-md-8"><input type="text" name="eik" autocomplete="off" value="{{$n_sadirectorate->eik}}" class="form-control">
							</div>
            </div>

            <div class="row" style="background-color:lavender;">
						  <div class="col col-md-2 h5" align="right"><label for="is_active">Активен/Деактивиран:</label></div>
							<div class="col col-md-8">
                @foreach ($n_sadirectorate->activeOptions() as $activeOptionKey => $activeOptionValue)
                  <label class="radio-inline"><input type="radio" name="is_active" {{$n_sadirectorate->is_active == $activeOptionValue ? 'checked' : ''}} value="{{$activeOptionKey}}">{{$activeOptionValue}}</label>
                @endforeach
							</div>
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
								  <a href="{{ url('/admin/nom/sadirectorates/') }}">  
                  <button type="submit" class="btn btn-primary btn-lg" align="right">Отказ</button>
									</a href>
		</p>
		  <div class="col col-md-4">
			</div>

  </div>
@endsection
