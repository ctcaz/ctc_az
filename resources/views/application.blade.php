@extends('layouts.app')

@section('header-1')
  <div class="level-1">
    <div class="container-fluid clearfix">
        <div class="float-left">
          <a href="https://www.az.government.bg/" class="header-btn"><strong>www.az.government.bg</strong></a>
        </div>
        <div class="meta float-right">
            <div class="login logged-in">
              <a href="#" class="header-btn login-btn">
                <i>
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32">
                    <style>
                      .st0{fill:none;stroke:#fff;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}
                    </style>
                    <circle class="st0" cx="16" cy="11.7" r="4.6"/>
                    <path class="st0" d="M26.4 26.2c-1-5.7-5.3-9.8-10.4-9.8-5.1 0-9.4 4.2-10.4 9.8h20.8z"/>
                  </svg>
                </i>
              </a>

            </div>
        </div>
    </div>
  </div>
@endsection

@section('content')
  <div class="container-fluid">
      <h2 class="text-center h3">Информационно-комуникационна платформа "Частни трудови посредници"</h2>
      <hr class="size-s">
      <h2 class="h3 main-heading">Заявление за регистрация на частен трудов посредник</h2>

      <form class="" action="{{route('application.store')}}" method="post">

          @csrf

          <div class="form-items">
              <section>
                <h3><span class="primary-bgr">Данни за заявител</span></h3>
                <div class="row">
                  <div class="col">
                    <label for="">Име: *</label>
                    <input name="givenname" type="text" class="form-control" id="" value="{{ old('name') }}">
                  </div>
                  <div class="col">
                    <label for="">Презиме:</label>
                    <input name="surname" type="text" class="form-control" id="">
                  </div>
                  <div class="col">
                    <label for="">Фамилия: *</label>
                    <input name="familyname" type="text" class="form-control" id="">
                  </div>
                </div>
                <div class="row">
                    <div class="col">
                      <div class="col-25">
                          <div class="form-check-inline">
                              <input name="lnch" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                              <label class="form-check-label" for="inlineCheckbox1">ЛНЧ</label>
                          </div>
                      </div>
                      <div class="col-75">
                        <label for="">ЕГН/ЛНЧ: *</label>
                        <input name="identifier" type="text" class="form-control" id="">
                      </div>
                    </div>
                    <div class="col">
                      <label for="">Email: *</label>
                      <input name="email" type="text" class="form-control" id="">
                    </div>
                    <div class="col">
                        <label for="">Длъжност: *</label>
                        <input name="position" type="text" class="form-control" id="">
                      </div>
                </div>
              </section>
              <section>
                <h3><span class="primary-bgr">Данни за юридическо лице</span></h3>
                  <h6><strong>Вид Юридическо лице:</strong></h6>
                  <div class="row">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="RegRadio" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">с регистрация в България</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="RegRadio" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">с регистрация в друга държава</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col">
                      <label for="">ЕИК/БУЛСТАТ:*</label>
                      <input name="bulstat" type="text" class="form-control" id="">
                    </div>
                    <div class="col">
                      <label for="inputCity">Наименование:*</label>
                      <input name="comp_name" type="text" class="form-control" id="">
                    </div>
                    <div class="col">
                      <label for="">Вид на фирмата:</label>
                      <select name="comp_type" id="" class="form-control">
                        <option selected="">Моля, изберете</option>
                        @foreach ($company_types as $company_type)
                            <option value="{{ $company_type->id }}">
                              {{$company_type->name}}
                            </option>
                        @endforeach
                      </select>
                    </div>
                  </div>
              </section>
              <section>
                  <h3><span class="primary-bgr">Лица, представители на посредника</span></h3>
                  <p><em>Задължително е да има посочен поне един представител</em></p>
                  <h6><strong>Данни за лицата</strong></h6>
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Имена на лицето</th>
                        <th scope="col">ЕГН / ЛНЧ</th>
                        <th scope="col">Email</th>
                        <th scope="col">Длъжност</th>
                        <th scope="col">Потребителски профил</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Боряна Божидарова Андонова</td>
                        <td>5555555555</td>
                        <td>office@ctc.bg</td>
                        <td>координатор</td>
                        <td>office@ctc.bg</td>
                      </tr>
                    </tbody>
                  </table>
                  <p><a data-fancybox data-src="#add-user" href="javascript:;" class="btn btn-primary">Добави</a></p>
              </section>

              <div id="add-user" style="display: none;" class="">
                  <section>
                      <h4 class="text-primary mb-3"><strong>Лице, което ще представлява посредника</strong></h4>

                      <div class="row">
                          <div class="col">
                            <label for="">Име: *</label>
                            <input type="text" class="form-control" id="">
                          </div>
                          <div class="col">
                            <label for="">Презиме:</label>
                            <input type="text" class="form-control" id="">
                          </div>
                          <div class="col">
                            <label for="">Фамилия: *</label>
                            <input type="text" class="form-control" id="">
                          </div>
                      </div>

                      <div class="row">
                        <div class="col">
                          <div class="col-25">
                              <div class="form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                  <label class="form-check-label" for="inlineCheckbox1">ЛНЧ</label>
                              </div>
                          </div>
                          <div class="col-75">
                            <label for="">ЕГН/ЛНЧ: *</label>
                            <input type="text" class="form-control" id="">
                          </div>
                        </div>
                        <div class="col">
                          <label for="">Email: *</label>
                          <input type="text" class="form-control" id="">
                        </div>
                        <div class="col">
                          <label for="">Длъжност: *</label>
                          <input type="text" class="form-control" id="">
                        </div>
                      </div>

                      <p><a href="#" class="btn btn-primary">Запази</a> <span class="sep-line "> | </span> <a data-fancybox-close href="#" class="btn btn-outline-danger">Отказ</a></p>
                  </section>
              </div>

              <section>
                <h3><span class="primary-bgr">Лица, които ще извършват посредническа дейност</span></h3>
                  <h6><strong>Данни за лицата</strong></h6>
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Имена на лицето</th>
                        <th scope="col">ЕГН / ЛНЧ</th>
                        <th scope="col">Email</th>
                        <th scope="col">Достъп до услуги</th>
                        <th scope="col">Потребителски профил</th>
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
                  <p><a data-fancybox data-src="#add-user-2" href="javascript:;" class="btn btn-primary">Добави</a></p>
              </section>

              <div id="add-user-2" style="display: none;">
                  <section>
                      <h4 class="text-primary mb-3"><strong>Лице, което ще представлява посредника</strong></h4>

                      <div class="row">
                          <div class="col">
                            <label for="">Име: *</label>
                            <input type="text" class="form-control" id="">
                          </div>
                          <div class="col">
                            <label for="">Презиме:</label>
                            <input type="text" class="form-control" id="">
                          </div>
                          <div class="col">
                      <label for="">Фамилия: *</label>
                      <input type="text" class="form-control" id="">
                    </div>
                      </div>

                      <div class="row">
                        <div class="col">
                          <div class="col-25">
                              <div class="form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                  <label class="form-check-label" for="inlineCheckbox1">ЛНЧ</label>
                              </div>
                          </div>
                          <div class="col-75">
                              <label for="">ЕГН/ЛНЧ: *</label>
                              <input type="text" class="form-control" id="">
                            </div>
                        </div>
                        <div class="col">
                          <label for="">Email: *</label>
                          <input type="text" class="form-control" id="">
                        </div>
                      </div>

                      <h6><strong>Достъп до услуги:*</strong></h6>

                      <div class="form-group">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="">
                            <label class="form-check-label" for="">
                              Промяна на обстоятелства за ЧТП
                            </label>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="">
                            <label class="form-check-label" for="">
                              Публикуване на заявки за СРМ
                            </label>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="">
                            <label class="form-check-label" for="">
                              Промяна на заявки за СРМ
                            </label>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="">
                            <label class="form-check-label" for="">
                              Регистрация на ТРЛ и УРЛ
                            </label>
                          </div>
                      </div>

                      <p><a href="#" class="btn btn-primary">Запази</a> <span class="sep-line "> | </span> <a data-fancybox-close href="#" class="btn btn-outline-danger">Отказ</a></p>
                  </section>
              </div>

              <section>
                  <h3><span class="primary-bgr">Адреси за контакти</span></h3>
                  <h6><strong>Адрес на управление</strong></h6>

                  <div class="row">
                    <div class="col">
                      <label for="country">Държава:*</label>
                      <select id="" class="form-control">
                          <option selected="">Моля, изберете</option>
                          @foreach ($countries as $country)
                              <option value="{{ $country->id }}" {{ ( $country->id == 1) ? 'selected' : '' }}>
                                  {{ $country->name }}
                              </option>
                          @endforeach
                      </select>
                    </div>

                    <div class="col">
                      <div class="form-group">
                          <label for="region">Област:*</label>
                          <select name="region1" id="region1" class="form-control">
                            <option selected="">Моля, изберете</option>
                            @foreach ($regions as $key => $value)
                                <option value="{{ $key }}">
                                    {{$value}}
                                </option>
                            @endforeach
                          </select>
                      </div>
                    </div>

                    <div class="col">
                      <label for="">Община:*</label>
                      <select name="muni1" id="muni1" class="form-control">
                          <option selected="">Моля, изберете</option>

                      </select>
                    </div>

                    <div class="col">
                      <label for="">Населено място:*</label>
                      <select name="city1" id="" class="form-control">
                          <option selected="">Моля, изберете</option>

                      </select>
                    </div>

                  </div>

                  <div class="form-group">
                    <label for="">Адрес:*</label>
                    <input type="text" class="form-control" id="" placeholder="">
                  </div>

                  <h6 class="mt-4"><strong>Адрес за кореспонденция</strong></h6>
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="">
                      <label class="form-check-label" for="">Същият като адрес на управление</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <label for="">Държава:*</label>
                      <select id="" class="form-control">
                        <option selected="">Моля, изберете</option>
                        @foreach ($countries as $country)
                            <option value="{{ $country->id }}" {{ ( $country->id == 1) ? 'selected' : '' }}>
                                {{ $country->name }}
                            </option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col">
                      <label for="">Област:*</label>
                      <select id="" class="form-control">
                        <option selected="">Моля, изберете</option>
                        @foreach ($regions as $id => $region)
                            <option value="{{ $id }}">
                              {{$region}}
                            </option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col">
                      <label for="">Община:*</label>
                      <select id="" class="form-control">
                        <option selected="">Моля, изберете</option>

                      </select>
                    </div>
                    <div class="col">
                      <label for="">Населено място:*</label>
                      <select id="" class="form-control">
                        <option selected="">Моля, изберете</option>

                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="">Адрес:*</label>
                    <input type="text" class="form-control" id="" placeholder="">
                  </div>

                  <h6 class="mt-4"><strong>Офиси</strong></h6>
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Адрес</th>
                        <th scope="col">Телефон, Факс</th>
                        <th scope="col">Email</th>
                        <th scope="col">Лице за контакт</th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>София, ул.Братя Миладинови 16, ет.1, офис 1</td>
                      <td>0884777372</td>
                      <td>office@ctc.bg</td>
                      <td>Боряна Андонова</td>
                    </tr>
                    </tbody>
                  </table>
                  <p><a data-fancybox data-src="#add-office" href="javascript:;" class="btn btn-primary">Добави</a></p>
              </section>

              <div id="add-office" style="display: none;">
                <section>
                    <h4 class="text-primary mb-3"><strong>Данни за офис</strong></h4>

                    <div class="row">
                      <div class="col">
                        <label for="">Област:*</label>
                        <select id="" class="form-control">
                          <option selected="">Моля, изберете</option>
                          @foreach ($regions as $id => $region)
                              <option value="{{$id}}">
                                {{$region}}
                              </option>
                          @endforeach
                        </select>
                      </div>
                      <div class="col">
                        <label for="">Община:*</label>
                        <select id="" class="form-control">
                          <option selected="">Моля, изберете</option>

                        </select>
                      </div>
                      <div class="col">
                        <label for="">Населено място:*</label>
                        <select id="" class="form-control">
                          <option selected="">Моля, изберете</option>

                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                    <label for="">Адрес:*</label>
                    <input type="text" class="form-control" id="" placeholder="">
                  </div>

                    <div class="form-group">
                      <label for="">Лице за контакт:</label>
                      <select id="" class="form-control">
                          <option selected="">Моля, изберете</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                      </select>
                      <input type="text" class="form-control" id="" placeholder="">
                    </div>

                    <div class="row">
                      <div class="col">
                        <label for="">Телефон:</label>
                        <input type="text" class="form-control" id="" placeholder="">
                      </div>
                      <div class="col">
                        <label for="">Факс:</label>
                        <input type="text" class="form-control" id="" placeholder="">
                      </div>
                      <div class="col">
                        <label for="">E-mail:</label>
                        <input type="text" class="form-control" id="" placeholder="">
                      </div>
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="">
                          <label class="form-check-label" for="">Главен офис</label>
                          <span class="sep-text size-l"> &nbsp; </span>
                          <input class="form-check-input" type="checkbox" id="">
                          <label class="form-check-label" for="">Същият като адрес на управление</label>
                        </div>
                    </div>

                    <p><a href="#" class="btn btn-primary">Запази</a> <span class="sep-line "> | </span> <a data-fancybox-close href="#" class="btn btn-outline-danger">Отказ</a></p>
                </section>
              </div>

              <section>
                  <h3><span class="primary-bgr">Териториален обхват</span></h3>
                  <h6><strong>Обхват:*</strong></h6>
                  <div class="form-group">
                      <div class="form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">За Република България</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox1">За други държави</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                        <label class="form-check-label" for="inlineCheckbox3">За моряци</label>
                      </div>
                  </div>
              </section>
              <section>
                  <h3><span class="primary-bgr">Вид посреднически услуги</span></h3>
                  <h6><strong>Посреднически услуги:*</strong></h6>

                  <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="">
                        <label class="form-check-label" for="">
                          информиране и/или консултиране на търсещите работа лица и на работодателите
                        </label>
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="">
                        <label class="form-check-label" for="">
                          психологическо подпомагане на търсещите работа лица
                        </label>
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="">
                        <label class="form-check-label" for="">
                          насочване към обучение на възрастни
                        </label>
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="">
                        <label class="form-check-label" for="">
                          насочване и подпомагане за започване на работа, включително в друго населено място в страната или в други държави
                        </label>
                      </div>
                  </div>
              </section>
              <section>
                  <h3><span class="primary-bgr">Допълнителни данни</span></h3>
                  <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="">
                        <label class="form-check-label" for="">
                          Партньор на EURES
                        </label>
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="">
                        <label class="form-check-label" for="">
                          Ще използва система за публикуване на данни по автоматизиран път
                        </label>
                      </div>
                  </div>
              </section>
              <section>
                  <h3><span class="primary-bgr">Данни за документи предоставени от посредника</span></h3>
                  <h6><strong>Прикачени файлове</strong> <span class="sep-line "> | </span> няма</h6>
                  <p><a href="#" class="btn btn-primary">Добави</a></p>
              </section>

              <p class="text-center"><button type="submit" class="btn btn-primary btn-lg">Подай</button> <span class="sep-line "> | </span>  <a href="/" class="btn btn-outline-danger btn-lg">Отказ</a></p>
          </div>
      </form>
  </div>
@endsection

@section('scripts')

    <script>
        $(document).ready(function(){
            //Check the registration region
            $('input[name="RegRadio"]').on('change', function(){
                var radio = $(this).val();
                console.log(radio);
            });


            //Populate the first municipaty object based on the selected refion
            $('select[name="region1"]').on('change', function(){ //listens to changes in "region1"
                var region_id = $(this).val();
                var flag = 1; //initializing the first row flag
                if(region_id){
                    $.ajax({
                        url: 'application/getMuni/'+region_id, //use the getMuni method from the Controller
                        type: 'GET',
                        dataType: 'json',
                        success: function(data){
                            //empty the muni1 and city1 dropdowns
                            $('select[name="muni1"]').empty();
                            $('select[name="city1"]').empty();

                            $.each(data, function(key, value){
                                //Populate
                                if (flag === 1){
                                  flag = 2;
                                  $('select[name="muni1"]').append('<option value="">'+ 'Моля, изберете' +'</option>');
                                  $('select[name="muni1"]').append('<option value="'+key+'">'+ value +'</option>');
                                }else{
                                  $('select[name="muni1"]').append('<option value="'+key+'">'+ value +'</option>');
                                }

                            });

                        }
                    });
                } else {
                    //If nothing was selected - empty the dropdowns
                    $('select[name="muni1"]').empty();
                    $('select[name="city1"]').empty();
                }
            });

            //Populate the first city object based on the selected municipaty
            $('select[name="muni1"]').on('change', function(){ //listens to changes in "muni1"
                var muni_id = $(this).val();
                flag = 1; //initializing the first row flag
                if(muni_id){
                    $.ajax({
                        url: 'application/getCity/'+muni_id, //use the getCity method from the Controller
                        type: 'GET',
                        dataType: 'json',
                        success: function(data){
                            $('select[name="city1"]').empty(); //empty the dropdown

                            $.each(data, function(key, value){
                                //Populate
                                if (flag === 1){
                                  flag = 2;
                                  $('select[name="city1"]').append('<option value="">'+ 'Моля, изберете' +'</option>');
                                  $('select[name="city1"]').append('<option value="'+key+'">'+ value +'</option>');
                                }else{
                                  $('select[name="city1"]').append('<option value="'+key+'">'+ value +'</option>');
                                }

                            });

                        }
                    });
                } else {
                    //If nothing was selected - empty the dropdown
                    $('select[name="city1"]').empty();
                }
            });
        });
    </script>
@endsection
