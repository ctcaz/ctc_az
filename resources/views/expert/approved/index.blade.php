@extends('expert.form')

@section('navigation')
  @include('expert.nav')
@endsection

@section('contents')
  <div class="container-fluid clearfix">

    <h2 class="h3 main-heading">Списък одобрени регистрации на посредници</h2>
      <div class="form-items">
        <section>
            <h3><span class="primary-bgr">Критерии за търсене</span></h3>
              <h6><strong>По данни за Частен трудов посредник</strong></h6>

                <div class="row">
                  <div class="col-md-4">
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

                <h6><strong>По данни за регистрация</strong></h6>

                <div class="row">
                  <div class="col">
                    <label for="">Номер на удостоверение:</label>
                    <input type="text" class="form-control" id="">
                  </div>
                  <div class="col">
                    <label for="">Статус:</label>
                    <select id="" class="form-control">
                      <option selected>Активна</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                    </select>
                  </div>
                  <div class="col">
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
                    <th scope="col">Номер / Дата на Удостоверение</th>
                    <th scope="col">Териториален обхват</th>
                    <th scope="col">Статус</th>
                    <th scope="col">Последна промяна</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a href="#" class="text-primary">204309291</a></td>
                    <td>Бест Бългериън Груп ООД</td>
                    <td>2869 / 16.08.2019</td>
                    <td>За други държави</td>
                    <td>Активна</td>
                    <td>16.08.2019 16:08:56</td>
                  </tr>
                  <tr>
                    <td><a href="#" class="text-primary">175253982</a></td>
                    <td>ТЛ Консулт ЕООД</td>
                    <td>2868 / 16.08.2019</td>
                    <td>За Република България</td>
                    <td>Активна</td>
                    <td>16.08.2019 16:07:56</td>
                  </tr>
                </tbody>
              </table>

          </section>
      </div>


  </div>

@endsection
