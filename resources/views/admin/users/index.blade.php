@extends('admin.form')

@section('contents')
	    <div class="container-fluid clearfix">
        <div class="content">

        	<h2 class="h3 main-heading">Списък потребители</h2>
            <p><a href="{{route('admin.users.create')}}" class="btn btn-outline btn-outline-primary btn-lg">Създай потребител</a></p>
            <div class="form-items">
            	<section>
                	<h3><span class="primary-bgr">Критерии за търсене</span></h3>
                      <div class="row">
                        <div class="col">
                          <label for="">Име:</label>
                          <input type="text" class="form-control" id="">
                        </div>
                        <div class="col">
                          <label for="">Презиме:</label>
                          <input type="text" class="form-control" id="">
                        </div>
                        <div class="col">
                          <label for="">Фамилия:</label>
                          <input type="text" class="form-control" id="">
                        </div>
                        <div class="col">
                          <label for="">Потребителско име:</label>
                          <input type="text" class="form-control" id="">
                        </div>
                        <div class="col">
                          <label for="">Роля:</label>
                          <input type="text" class="form-control" id="">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                          <label class="form-check-label" for="inlineRadio1">Активни</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">Неактивни</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                          <label class="form-check-label" for="inlineRadio3">Всички</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <a href="#" class="btn btn-primary">Търси</a> <span class="sep-line size-l"> | </span> <a href="#" class="btn btn-outline-danger">Изчисти</a>
                      </div>

                      <hr>

                      <h6><strong>Списък потребители</strong></h6>

                      <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Email</th>
                          <th scope="col">Потребителско име</th>
                          <th scope="col">Роля</th>
                          <th scope="col">Статус</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($users as $user)
                          <tr>
                            <td>
                              <a href="{{route('admin.users.edit', $user->id)}}" class="text-primary">{{ $user->email }}</a>
                            </td>

														<td>{{ $user->name }}</td>

                            <td>{{ implode(',', $user->roles()->get()->pluck('name')->toArray()) }}</td>

                            <td>{{ $user->active }}</td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>

                    {!! $users->links() !!}

                </section>
            </div>

        </div>
      </div>

@endsection
