@extends('admin.form')

@section('contents')
  <div class="container-fluid clearfix">
    <h2 class="h3 main-heading">Профил на потребителя</h2>
    <form class="" action="{{route('admin.users.update', $user)}}" method="post">
      <div class="form-items">
        @csrf
        @method('PUT')

        <section>
        <h6><strong>Данни за потребител</strong></h6>
            <div class="row">
              <div class="col">
                <label for="name">Потребителско име:*</label>
                <input type="text" name="name" autocomplete="off" value="{{$user->name}}" class="form-control">
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
                <input type="text" name="email" autocomplete="off" value="{{$user->email}}" class="form-control">
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
                          <input type="checkbox" name="roles[]" value="{{$role->id}}" @if($user->roles->contains($role)) checked @endif>
                          <label>{{$role->name}}</label>
                      </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>

        <h6><strong>Данни за потребител</strong></h6>
        <div class="row">
          <div class="col-md-4">
            <label for="">Нова парола:</label>
            <input type="text" class="form-control" id="">
          </div>
          <div class="col-md-4">
            <label for="">Потвърди парола:</label>
            <input type="text" class="form-control" id="">
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="">Активен/Деактивиран:</label>
              <br><br>
              @foreach ($user->activeOptions() as $activeOptionKey => $activeOptionValue)
                <label class="radio-inline"><input type="radio" name="active" {{$user->active == $activeOptionValue ? 'checked' : ''}} value="{{$activeOptionKey}}">{{$activeOptionValue}}</label>
              @endforeach
            </div>
          </div>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block btn-lg">Запази</button>
        </div>
      </section>
      </div>
    </form>
  </div>
@endsection
