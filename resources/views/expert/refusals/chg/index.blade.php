@extends('expert.form')

@section('navigation')
  @include('expert.nav')
@endsection

@section('contents')
  <div class="container-fluid clearfix">
      <div class="tabs">
          <ul class="nav-x clearfix">
            <li><a href="{{route('expert.reg.index')}}"><span class="inner">Отказани Регистрации</span></a></li>
            <li><a href="{{route('expert.not.index')}}"><span class="inner">Отказани Уведомления</span></a></li>
            <li class="active"><a href="{{route('expert.chg.index')}}"><span class="inner">Отказани Промени на обстоятелствата</span></a></li>
          </ul>
      </div>

      <h2 class="h3 main-heading">Списък отказани регистрации на посредници</h2>
      <div class="form-items">
    <section>
        <h3><span class="primary-bgr">Критерии за търсене</span></h3>

            <div class="row">
              <div class="col-md-3">
                <label for="">Вид Юридическо лице:</label>
                  <select id="" class="form-control">
                    <option selected>Моля, изберете</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                  </select>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label for="inputCity">Наименование:*</label>
                  <input type="text" class="form-control" id="">
              </div>
            </div>

            <div class="row">
              <div class="col-md-3">
                <label for="">Териториален обхват:</label>
                <select id="" class="form-control">
                  <option selected>Моля, изберете</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <a href="#" class="btn btn-primary">Търси</a> <span class="sep-line size-l"> | </span> <a href="#" class="btn btn-outline-danger">Изчисти</a>
            </div>

            <hr>

            <h6><strong>Списък с териториални регистрации</strong></h6>

            <table class="table">
            <thead>
              <tr>
                <th scope="col">ЕИК/БУЛСТАТ / Идентификатор</th>
                <th scope="col">Име</th>
                <th scope="col">Статус</th>
                <th scope="col">Последна промяна</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><a href="#" class="text-primary">7703016781</a></td>
                <td>Калин Павлов Бонев</td>
                <td>Отказана</td>
                <td>07.08.2019 16:14:09</td>
              </tr>
            </tbody>
          </table>

      </section>
  </div>


  </div>

@endsection
