<?php /*<!--
		File:	resources\views\admin\users\create.blade.php
		 Ver:	1.00.003
 Purpose:	Users create blade
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
-->*/?>

@extends('admin.form')

@section('contents')
  <div class="container-fluid clearfix">
    <h2 class="h3 main-heading">НОВ ПОТРЕБИТЕЛ</h2>

    <form class="" action="{{route('admin.users.store')}}" method="post">
      <div class="form-items">
        @csrf


        <section>
          <h6><strong>Данни за потребител</strong></h6>
          <div class="row">
            <div class="col">
              <label for="name">Потребителско име:*</label>
              <input type="text" name="name" autocomplete="off" value="{{old('name')}}" class="form-control">
            </div>
            <div class="col">
              <label for="">Презиме:</label>
              <input type="text" class="form-control" id="">
            </div>
            <div class="col">
              <label for="">Фамилия:</label>
              <input type="text" class="form-control" id="">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label for="email">Email:*</label>
              <input type="text" name="email" autocomplete="off" value="{{old('email')}}" class="form-control">
            </div>
            <div class="col">
              <label for="">Длъжност:</label>
              <input type="text" class="form-control" id="">
            </div>

            <div class="col">
              <label for="">Роля:*</label>
              <div class="card">
                <div class="card-body">
                  @foreach ($roles as $role)
                    <div class="custom-checkbox">
                        <input type="checkbox" name="roles[]" value="{{$role->id}}">
                        <label>{{$role->name}}</label>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-8">
              <div class="row">
                <div class="col-md-3" align="right">
                  <label for="password2">Парола:</label>
                </div>
                <div class="col-md-4" align="left">
                  <!-- (?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}
                    pattern="(?=.[a-zA-Z0-9])" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                    <input type="password" id="psw" name="psw" class="form-control" required>
                  -->
                  <input type="password" name="password" id="password2" onkeyup="checkPass();" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3" align="right">
                  <label for="confirm2">Потвърди парола:</label>
                </div>
                <div class="col-md-4" align="left">
                  <input type="password" name="confirm" id="confirm2" onkeyup="checkPass();">
                  <br>
                  <span id="confirm-message2" class="confirm-message"></span>
                </div>
              </div>
          </div>

            <div class="col-md-4">
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
								  <a href="{{ url('/admin/users/') }}">
                  <button type="submit" class="btn btn-primary btn-lg" align="right">Отказ</button>
									</a href>
		</p>

  </div>

  <script type="text/javascript">
  function checkPass()
  {
      //Store the password field objects into variables ...
      var password = document.getElementById('password2');
      var confirm  = document.getElementById('confirm2');
      //Store the Confirmation Message Object ...
      var message = document.getElementById('confirm-message2');
      //Set the colors we will be using ...
      var good_color = "#66cc66";
      var bad_color  = "#ff6666";
      //Compare the values in the password field
      //and the confirmation field
      if(password.value == confirm.value){
          //The passwords match.
          //Set the color to the good color and inform
          //the user that they have entered the correct password
          confirm.style.backgroundColor = good_color;
          message.style.color           = good_color;
          //message.innerHTML             = '<img src="/wp-content/uploads/2019/04/tick.png" alt="Passwords Match!">';
      }else{
          //The passwords do not match.
          //Set the color to the bad color and
          //notify the user.
          confirm.style.backgroundColor = bad_color;
          message.style.color           = bad_color;
          //message.innerHTML             = '<img src="/wp-content/uploads/2019/04/publish_x.png" alt="Passwords Do Not Match!">';
      }
  }
  </script>

@endsection
