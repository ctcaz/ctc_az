@extends('expert.form')

@section('navigation')
  @include('expert.nav')
@endsection

@section('contents')
  <div class="container-fluid clearfix">
      <div class="tabs">
          <ul class="nav-x clearfix">
            <li><a href="{{route('expert.registration.index')}}"><span class="inner">Заявки за регистрации</span></a></li>
            <li><a href="{{route('expert.notes.index')}}"><span class="inner">Заявки за уведомления</span></a></li>
            <li class="active"><a href="{{route('expert.changes.index')}}"><span class="inner">Заявки за промяна на обстоятелства</span></a></li>
          </ul>
      </div>

      <h2 class="h3 main-heading">Списък нови заявления за промяна на обстоятелства</h2>
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
                  <div class="col-md-3 mb-3">
                    <label for="">Статус:</label>
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

                <h6><strong>Заявки за промяна на обстоятелства</strong></h6>

                <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Ури на преписка</th>
                    <th scope="col">ЕИК/Идентификатор</th>
                    <th scope="col">Наименование</th>
                    <th scope="col">Вид на промяната</th>
                    <th scope="col">Статус</th>
                    <th scope="col">Последна промяна</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                  </tr>
                </tbody>
              </table>
              <p><strong class="text-danger">Няма намерени резултати</strong></p>
          </section>
      </div>


  </div>

@endsection
