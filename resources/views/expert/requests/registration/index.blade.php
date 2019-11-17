@extends('expert.form')

@section('navigation')
  @include('expert.nav')
@endsection

@section('contents')
  <div class="container-fluid clearfix">
      <div class="tabs">
          <ul class="nav-x clearfix">
            <li class="active"><a href="{{route('expert.registration.index')}}"><span class="inner">Заявки за регистрации</span></a></li>
            <li><a href="{{route('expert.notes.index')}}"><span class="inner">Заявки за уведомления</span></a></li>
            <li><a href="{{route('expert.changes.index')}}"><span class="inner">Заявки за промяна на обстоятелства</span></a></li>
          </ul>
      </div>

      <h2 class="h3 main-heading">Списък нови заявления за регистрация</h2>

      <p><a href="{{route('application.index')}}" class="btn btn-outline btn-outline-primary btn-lg">Нова заявка за регистрация на ЧТП</a></p>

      <form class="" action="{{route('expert.registration.index')}}" method="GET">
        <div class="form-items">
          @csrf
          <section>
            <h3><span class="primary-bgr">Критерии за търсене</span></h3>

                <div class="row">
                  <div class="col-md-3">
                    <label for="">Вид Юридическо лице:</label>
                      <select id="comp_type" name="comp_type" class="form-control">
                          <option></option>
                          @foreach ($company_types as $company_type)
                              <option value="{{ $company_type->id }}" {{ $request->comp_type == $company_type->id ? 'selected' : '' }}>
                                  {{$company_type->name}}
                              </option>
                          @endforeach
                      </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label for="inputCity">Наименование:*</label>
                      <input type="text" class="form-control" id="name" name="name" value="{{ $request->name !== '' ? $request->name : '' }}">
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    <label for="">ID от онлайн регистрация:</label>
                    <input type="text" class="form-control" id="">
                  </div>
                  <div class="col">
                    <label for="">ЕИК/Идентификатор:</label>
                    <select id="" class="form-control">
                      <option selected>Моля, изберете</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                    </select>
                  </div>

                  <div class="col">
                    <label for="">Статус:</label>
                    <select id="status" name="status" class="form-control">
                      <option value=""></option>
                      <option value="Подадена" {{ $request->status == "Подадена" ? 'selected' : '' }}>Подадена</option>
                      <option value="Проверка" {{ $request->status == "Проверка" ? 'selected' : '' }}>Проверка</option>
                      <option value="Одобрена" {{ $request->status == "Одобрена" ? 'selected' : '' }}>Одобрена</option>
                      <option value="Регистриран" {{ $request->status == "Регистриран" ? 'selected' : '' }}>Регистриран</option>
                      <option value="Отказ" {{ $request->status == "Отказ" ? 'selected' : '' }}>Отказ</option>
                      <option value="Временно прекратена регистрация" {{ $request->status == "Временно прекратена регистрация" ? 'selected' : '' }}>Временно прекратена регистрация</option>
                      <option value="Прекратена регистрация" {{ $request->status == "Прекратена регистрация" ? 'selected' : '' }}>Прекратена регистрация</option>
                      <option value="Изтекла регистрация" {{ $request->status == "Изтекла регистрация" ? 'selected' : '' }}>Изтекла регистрация</option>
                    </select>
                  </div>


                  <div class="col">
                    <label for="">Състояние:</label>
                    <select id="state" name="state" class="form-control">
                      <option></option>
                      <option>Получено ID</option>
                      <option>Проверка документи</option>
                      <option>Очаква документи</option>
                      <option>Очаква отговор от ГИТ</option>
                      <option>Чака плащане</option>
                      <option>Подготовка за издаване</option>
                      <option>Отказана регистрация</option>
                      <option>Прекратена регистрация</option>
                      <option>Обжалване в съда</option>
                      <option>Действаща регистрация</option>
                      <option>Искане за прекратяване</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" value="Filter" class="btn btn-primary">Търси</button> <span class="sep-line size-l"> | </span> <a href="#" class="btn btn-outline-danger">Изчисти</a>
                </div>

          </section>
        </div>
      </form>

      <hr>
      <h6><strong>Заявки за регистрации</strong></h6>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID от онлайн регистрация</th>
            <th scope="col">ЕИК/Идентификатор</th>
            <th scope="col">Наименование</th>
            <th scope="col">Статус</th>
            <th scope="col">Състояние</th>
            <th scope="col">Последна промяна</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($requests_agency as $request)
            <tr>
              <td>
                <a href="#" class="text-primary">{{ $request->id }}</a>
              </td>
              <td>{{ $request->getCompanyUIC() }}</td>
              <td>{{ $request->getCompanyName() }}</td>
              <td>{{ $request->status }}</td>
              <td>{{ $request->state }}</td>
              <td>
                {{ date('d-m-Y / H:i:s', strtotime($request->lastupdated)) }}
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

      {{ $requests_agency->links() }}


  </div>

@endsection
