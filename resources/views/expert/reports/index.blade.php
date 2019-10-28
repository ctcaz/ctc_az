@extends('expert.form')

@section('navigation')
  @include('expert.nav')
@endsection

@section('contents')
  <div class="container-fluid clearfix">

    <h2 class="h3 main-heading">Справки</h2>
      <div class="form-items">
        <section>

                <div class="row">
                  <div class="col">
                      <select id="" class="form-control">
                        <option selected>Справка за регистрираните и устроени на работа морски специалисти</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                      </select>
                  </div>
                  <div class="col">
                    <a href="#" class="btn btn-primary">Покажи</a>
                  </div>
                </div>

          </section>
      </div>

  </div>

@endsection
