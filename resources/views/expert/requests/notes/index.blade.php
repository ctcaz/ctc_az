@extends('expert.form')

@section('navigation')
  @include('expert.nav')
@endsection

@section('contents')
  <div class="container-fluid clearfix">
      <div class="tabs">
          <ul class="nav-x clearfix">
            <li><a href="{{route('expert.registration.index')}}"><span class="inner">Заявки за регистрации</span></a></li>
            <li class="active"><a href="{{route('expert.notes.index')}}"><span class="inner">Заявки за уведомления</span></a></li>
            <li><a href="{{route('expert.changes.index')}}"><span class="inner">Заявки за промяна на обстоятелства</span></a></li>
          </ul>
      </div>

      <h2 class="h3 main-heading">Списък нови уведомления за посредническа дейност</h2>
      <p><a href="#" class="btn btn-outline btn-outline-primary btn-lg">Ново уведомление за посредническа дейност</a></p>
      <div class="form-items">
        <section>
            <h3><span class="primary-bgr">Критерии за търсене</span></h3>

                <div class="row">
                  <div class="col-md-3">
                    <label for="">Идентификатор в друга държава:</label>
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
                  <div class="col-md-3 mb-3">
                    <label for="">ID от онлайн регистрация:</label>
                    <input type="text" class="form-control" id="">
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="">Тип:</label>
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

                <h6><strong>Заявки за уведомления</strong></h6>

                <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID от онлайн уведомление</th>
                    <th scope="col">Идентификатор в друга държава</th>
                    <th scope="col">Наименование</th>
                    <th scope="col">Тип</th>
                    <th scope="col">Последна промяна</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>61</td>
                    <td>Киргизстан</td>
                    <td>Берен Трейд Компани</td>
                    <td>Временно</td>
                    <td>19.08.2019 / 12:22:23</td>
                  </tr>
                  <tr>
                    <td>21</td>
                    <td>2345</td>
                    <td>Би Хепи България</td>
                    <td>Временно</td>
                    <td>19.08.2019 / 12:22:23</td>
                  </tr>
                </tbody>
              </table>
              <p><strong class="float-right text-primary">Показани от 1 до 2 от общо 2</strong></p>
          </section>
      </div>

  </div>

@endsection
