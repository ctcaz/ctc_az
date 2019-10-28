@extends('expert.form')

@section('navigation')
  @include('expert.nav')
@endsection

@section('contents')
  <div class="container-fluid clearfix">

    <div class="tabs">
          <ul class="nav-x clearfix">
            <li><a href="{{route('expert.seeking.index')}}"><span class="inner">Търсещи работа лица</span></a></li>
            <li class="active"><a href="{{route('expert.found.index')}}"><span class="inner">Устроени на работа лица</span></a></li>
          </ul>
      </div>

      <h2 class="h3 main-heading">Списък на устроените на работа лица (УРЛ)</h2>
        <div class="form-items">
          <section>
              <h3><span class="primary-bgr">Критерии за търсене</span></h3>
                <h6><strong>По данни за Частен трудов посредник</strong></h6>
                  <div class="row">
                    <div class="col-md-3">
                      <label for="">За териториален обхват:</label>
                        <select id="" class="form-control">
                          <option selected>Моля, изберете</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                      <label for="">Вид Юридическо лице:</label>
                        <select id="" class="form-control">
                          <option selected>Всички</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                        </select>
                    </div>
                  </div>
                  <h6><strong>По данни за устроено на работа лице</strong></h6>

                  <div class="row">
                    <div class="col">
                      <label for="">Номер на посреднически договор:</label>
                      <input type="text" class="form-control" id="">
                    </div>
                    <div class="col">
                      <label for="">Статус:</label>
                      <select id="" class="form-control">
                        <option selected>Моля, изберете</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                      </select>
                    </div>
                    <div class="col">
                      <label for="">ЕГН/ЛНЧ:</label>
                      <input type="text" class="form-control" id="">
                    </div>
                    <div class="col">
                      <label for="">Имена на лицето:</label>
                      <input type="text" class="form-control" id="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <label for="">Вид на трудовия договор:</label>
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

                  <h6><strong>Търсещи работа лица</strong></h6>

                  <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Имена на лицето</th>
                      <th scope="col">ЕГН/ЛНЧ</th>
                      <th scope="col">ЧТП</th>
                      <th scope="col">Номер/Дата на <br>посреднически договор</th>
                      <th scope="col">Статус</th>
                      <th scope="col">Работодател</th>
                      <th scope="col">Дата&nbsp;/&nbsp;Краен <br>срок на ТД</th>
                      <th scope="col">Последна <br>промяна</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a href="#" class="text-primary">Георги Иванов Симеонов</a></td>
                      <td>9705270443</td>
                      <td>Валиант Ейджънси Къмпани</td>
                      <td>1225Д / 19.01.2017</td>
                      <td>Активен</td>
                      <td>ВАЛИАНТ ШИПИНГ С.А. - ГЪРЦИЯ /</td>
                      <td>23.07.2019</td>
                      <td>20.08.2019 / 14:36:53</td>
                    </tr>
                  </tbody>
                </table>

            </section>
        </div>


  </div>

@endsection
