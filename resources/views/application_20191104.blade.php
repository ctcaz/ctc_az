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
                    <input name="givenname" type="text" class="form-control" id="" value="{{ old('givenname') }}">
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
                              <input name="lnch" class="form-check-input" type="checkbox" id="inlineCheckbox1" value=1>
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
                        <input class="form-check-input" type="radio" name="RadioBul" id="Bul" value="option1">
                        <label class="form-check-label" for="inlineRadio1">с регистрация в България</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="RadioBul" id="World" value="option2">
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

                  <div class="row">
                    <div class="col-md-4">
                      <label for="">Идентификационен номер на удостоверението за вписване в регистъра по чл. 10, ал. 1, т. 2 ЗЗЛД:</label>
                        <input type="text" class="form-control" id="" name="comp_zzld">
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

                  <p><a data-fancybox data-src="#add-user-2" href="#" class="btn btn-primary" id="create-new-user">Добави</a></p>

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
                      <select name="mCountry" id="mCountry" class="form-control">
                          <option selected="">Моля, изберете</option>
                          @foreach ($countries as $country)
                              <option value="{{ $country->id }}" {{ ( $country->id == 1) ? 'selected' : '' }}>
                                  {{ $country->name }}
                              </option>
                          @endforeach
                      </select>
                    </div>

                    <div class="col">
                      <div class="form-group" id="mAddrRegion" style="display: block;">
                        <label for="region">Област:*</label>
                        <select name="mAddrRegion" id="mAddrRegion" class="form-control">
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
                      <div class="" id="mAddrMuni" style="display: block;">
                        <label for="">Община:*</label>
                        <select name="mAddrMuni" id="mAddrMuni" class="form-control">
                          <option selected="">Моля, изберете</option>
                        </select>
                      </div>
                    </div>

                    <div class="col">
                      <div class="" id="mAddrCity" style="display: block;">
                        <label for="">Населено място:*</label>
                        <select name="mAddrCity" id="mAddrCity" class="form-control">
                          <option selected="">Моля, изберете</option>
                        </select>
                      </div>
                    </div>

                    <div class="col">
                      <div class="" id="mAddrCityDistr" style="display: block;">
                        <label for="mAddrCityDistr">Район:*</label>
                        <select name="mAddrCityDistr" id="mAddrCityDistr" class="form-control">
                          <option selected="">Моля, изберете</option>
                        </select>
                      </div>
                    </div>

                  </div>

                  <div class="form-group">
                    <label for="">Адрес:*</label>
                    <input type="text" class="form-control" id="" placeholder="">
                  </div>

                  <h6 class="mt-4"><strong>Адрес за кореспонденция</strong></h6>
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="c_as_m" name="c_as_m">
                      <label class="form-check-label" for="">Същият като адрес на управление</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col">
                      <label for="">Държава:*</label>
                      <select name="cCountry" id="cCountry" class="form-control">
                        <option selected="">Моля, изберете</option>
                        @foreach ($countries as $country)
                            <option value="{{ $country->id }}" {{ ( $country->id == 1) ? 'selected' : '' }}>
                                {{ $country->name }}
                            </option>
                        @endforeach
                      </select>
                    </div>

                    <div class="col">
                      <div class="" id="cAddrRegion" style="display: block;">
                        <label for="">Област:*</label>
                        <select name="cAddrRegion" id="cAddrRegion" class="form-control" name="cAddrRegion">
                          <option selected="">Моля, изберете</option>
                          @foreach ($regions as $id => $region)
                            <option value="{{ $id }}">
                              {{$region}}
                            </option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="col">
                      <div class="" id="cAddrMuni" style="display: block;">
                        <label for="">Община:*</label>
                        <select name="cAddrMuni" id="cAddrMuni" class="form-control">
                          <option selected="">Моля, изберете</option>
                        </select>
                      </div>
                    </div>

                    <div class="col">
                      <div class="" id="cAddrCity" style="display: block;">
                        <label for="">Населено място:*</label>
                        <select name="cAddrCity" id="cAddrCity" class="form-control">
                          <option selected="">Моля, изберете</option>
                        </select>
                      </div>
                    </div>

                    <div class="col">
                      <div class="" id="cAddrCityDistr" style="display: block;">
                        <label for="cAddrCityDistr">Район:*</label>
                        <select name="cAddrCityDistr" id="cAddrCityDistr" class="form-control">
                          <option selected="">Моля, изберете</option>
                        </select>
                      </div>
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
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="ter_BG" value="За Република България">
                        <label class="form-check-label" for="inlineCheckbox1">За Република България</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="ter_World" value="За други държави">
                        <label class="form-check-label" for="inlineCheckbox1">За други държави</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="ter_Sailor" value="За моряци">
                        <label class="form-check-label" for="inlineCheckbox3">За моряци</label>
                      </div>
                  </div>
              </section>

              <section>
                  <h3><span class="primary-bgr">Вид посреднически услуги</span></h3>
                  <h6><strong>Посреднически услуги:*</strong></h6>

                  <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="" name="consulting" value="информиране и/или консултиране на търсещите работа лица и на работодателите">
                        <label class="form-check-label" for="">
                          информиране и/или консултиране на търсещите работа лица и на работодателите
                        </label>
                      </div>
                  </div>

                  <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="" name="psychology" value="психологическо подпомагане на търсещите работа лица">
                        <label class="form-check-label" for="">
                          психологическо подпомагане на търсещите работа лица
                        </label>
                      </div>
                  </div>

                  <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="" name="elders" value="насочване към обучение на възрастни">
                        <label class="form-check-label" for="">
                          насочване към обучение на възрастни
                        </label>
                      </div>
                  </div>

                  <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="" name="moving" value="насочване и подпомагане за започване на работа, включително в друго населено място в страната или в други държави">
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
                        <input class="form-check-input" type="checkbox" id="" name="eurespartner" value=1>
                        <label class="form-check-label" for="">
                          Партньор на EURES
                        </label>
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="" name="apiuser" value=1>
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
        //Check the registration region and show/hide Region/Municipaty/City/District
        $("input[name='RadioBul']").click(function() {
            let id = $(this).attr("id");

            if (id == 'Bul') {
                $("#mCountry").val(1);
                $("#cCountry").val(1);

                $("#mAddrRegion").css('display', 'block');
                $("#mAddrMuni").css('display', 'block');
                $("#mAddrCity").css('display', 'block');
                $("#mAddrCityDistr").css('display', 'block');

                $("#cAddrRegion").css('display', 'block');
                $("#cAddrMuni").css('display', 'block');
                $("#cAddrCity").css('display', 'block');
                $("#cAddrCityDistr").css('display', 'block');
            }

            if (id == 'World') {
                $("#mCountry").val(0);
                $("#cCountry").val(0);

                $("#mAddrRegion").css('display', 'none');
                $("#mAddrMuni").css('display', 'none');
                $("#mAddrCity").css('display', 'none');
                $("#mAddrCityDistr").css('display', 'none');

                $("#cAddrRegion").css('display', 'none');
                $("#cAddrMuni").css('display', 'none');
                $("#cAddrCity").css('display', 'none');
                $("#cAddrCityDistr").css('display', 'none');
            }
        });

        //If another country is selected - hide Region/Municipaty/City/District
        //Headquarters
        $('select[name="mCountry"]').on('change', function(){ //listens to changes in "mCountry"
            var id = $(this).val();
            if(id !== '1'){
                //alert(id);
                $("#mAddrRegion").css('display', 'none');
                $("#mAddrMuni").css('display', 'none');
                $("#mAddrCity").css('display', 'none');
                $("#mAddrCityDistr").css('display', 'none');
            } else {
              $("#mAddrRegion").css('display', 'block');
              $("#mAddrMuni").css('display', 'block');
              $("#mAddrCity").css('display', 'block');
              $("#mAddrCityDistr").css('display', 'block');
            }
        });

        //Correspondence
        $('select[name="cCountry"]').on('change', function(){ //listens to changes in "mCountry"
            var id = $(this).val();
            if(id !== '1'){
                //alert(id);
                $("#cAddrRegion").css('display', 'none');
                $("#cAddrMuni").css('display', 'none');
                $("#cAddrCity").css('display', 'none');
                $("#cAddrCityDistr").css('display', 'none');
            } else {
              $("#cAddrRegion").css('display', 'block');
              $("#cAddrMuni").css('display', 'block');
              $("#cAddrCity").css('display', 'block');
              $("#cAddrCityDistr").css('display', 'block');
            }
        });

        //Populate the first municipaty object based on the selected refion
        $('select[name="mAddrRegion"]').on('change', function(){ //listens to changes in "mAddrRegion"
            var region_id = $(this).val();
            var flag = 1; //initializing the first row flag
            //alert("region_id");
            if(region_id){
                $.ajax({
                    url: 'application/getMuni/'+region_id, //use the getMuni method from the Controller
                    type: 'GET',
                    dataType: 'json',
                    success: function(data){
                        //empty the mAddrMuni and mAddrCity dropdowns
                        $('select[name="mAddrMuni"]').empty();
                        $('select[name="mAddrCity"]').empty();
                        $('select[name="mAddrCityDistr"]').empty();

                        $.each(data, function(key, value){
                            //Populate
                            if (flag === 1){
                              flag = 2;
                              $('select[name="mAddrMuni"]').append('<option value="">'+ 'Моля, изберете' +'</option>');
                              $('select[name="mAddrMuni"]').append('<option value="'+key+'">'+ value +'</option>');
                            }else{
                              $('select[name="mAddrMuni"]').append('<option value="'+key+'">'+ value +'</option>');
                            }

                        });

                    }
                });
            } else {
                //If nothing was selected - empty the dropdowns
                $('select[name="mAddrMuni"]').empty();
                $('select[name="mAddrCity"]').empty();
                $('select[name="mAddrCityDistr"]').empty();
            }
        });

        $('select[name="cAddrRegion"]').on('change', function(){ //listens to changes in "cAddrRegion"

            var cAddrRegion_id = $(this).val();
            var flag = 1; //initializing the first row flag
            //alert(cAddrRegion_id);
            if(cAddrRegion_id){
                $.ajax({
                    url: 'application/getMuni/'+cAddrRegion_id, //use the getMuni method from the Controller
                    type: 'GET',
                    dataType: 'json',
                    success: function(data){
                        //empty the cAddrMuni and cAddrCity dropdowns
                        $('select[name="cAddrMuni"]').empty();
                        $('select[name="cAddrCity"]').empty();

                        $.each(data, function(key, value){
                            //Populate
                            if (flag === 1){
                              flag = 2;
                              $('select[name="cAddrMuni"]').append('<option value="">'+ 'Моля, изберете' +'</option>');
                              $('select[name="cAddrMuni"]').append('<option value="'+key+'">'+ value +'</option>');
                            }else{
                              $('select[name="cAddrMuni"]').append('<option value="'+key+'">'+ value +'</option>');
                            }

                        });

                    }
                });
            } else {
                //If nothing was selected - empty the dropdowns
                $('select[name="cAddrMuni"]').empty();
                $('select[name="cAddrCity"]').empty();
            }
        });

        //Populate the first city object based on the selected municipaty
        $('select[name="mAddrMuni"]').on('change', function(){ //listens to changes in "mAddrMuni"
            var muni_id = $(this).val();
            flag = 1; //initializing the first row flag
            if(muni_id){
                $.ajax({
                    url: 'application/getCity/'+muni_id, //use the getCity method from the Controller
                    type: 'GET',
                    dataType: 'json',
                    success: function(data){
                        $('select[name="mAddrCity"]').empty(); //empty the dropdown

                        $.each(data, function(key, value){
                            //Populate
                            if (flag === 1){
                              flag = 2;
                              $('select[name="mAddrCity"]').append('<option value="">'+ 'Моля, изберете' +'</option>');
                              $('select[name="mAddrCity"]').append('<option value="'+key+'">'+ value +'</option>');
                            }else{
                              $('select[name="mAddrCity"]').append('<option value="'+key+'">'+ value +'</option>');
                            }

                        });

                    }
                });
            } else {
                //If nothing was selected - empty the dropdown
                $('select[name="mAddrCity"]').empty();
            }
        });

        //Populate the first city object based on the selected municipaty
        $('select[name="cAddrMuni"]').on('change', function(){ //listens to changes in "cAddrMuni"
            var cAddrMuni_id = $(this).val();
            flag = 1; //initializing the first row flag
            if(cAddrMuni_id){
                $.ajax({
                    url: 'application/getCity/'+cAddrMuni_id, //use the getCity method from the Controller
                    type: 'GET',
                    dataType: 'json',
                    success: function(data){
                        $('select[name="cAddrCity"]').empty(); //empty the dropdown

                        $.each(data, function(key, value){
                            //Populate
                            if (flag === 1){
                              flag = 2;
                              $('select[name="cAddrCity"]').append('<option value="">'+ 'Моля, изберете' +'</option>');
                              $('select[name="cAddrCity"]').append('<option value="'+key+'">'+ value +'</option>');
                            }else{
                              $('select[name="cAddrCity"]').append('<option value="'+key+'">'+ value +'</option>');
                            }

                        });

                    }
                });
            } else {
                //If nothing was selected - empty the dropdown
                $('select[name="cAddrCity"]').empty();
            }
        });

        });

        //Populate the first city district object based on the selected city
        $('select[name="mAddrCity"]').on('change', function(){ //listens to changes in "mAddrMuni"
            var city_id = $(this).val();
            flag = 1; //initializing the first row flag
            //alert(city_id);
            if(city_id){
                $.ajax({
                    url: 'powr_regreq/getCityDistrict/'+city_id, //use the getCity method from the Controller
                    type: 'GET',
                    dataType: 'json',
                    success: function(data){
                        $('select[name="mAddrCityDistr"]').empty(); //empty the dropdown

                        $.each(data, function(key, value){
                            //Populate
                            if (flag === 1){
                              flag = 2;
                              $('select[name="mAddrCityDistr"]').append('<option value="">'+ 'Моля, изберете' +'</option>');
                              $('select[name="mAddrCityDistr"]').append('<option value="'+key+'">'+ value +'</option>');
                            }else{
                              $('select[name="mAddrCityDistr"]').append('<option value="'+key+'">'+ value +'</option>');
                            }

                        });

                    }
                });
            } else {
                //If nothing was selected - empty the dropdown
                $('select[name="mAddrCityDistr"]').empty();
            }
        });

        //Populate the first city district object based on the selected city
        $('select[name="cAddrCity"]').on('change', function(){ //listens to changes in "cAddrMuni"
            var city_id = $(this).val();
            flag = 1; //initializing the first row flag
            //alert(city_id);
            if(city_id){
                $.ajax({
                    url: 'powr_regreq/getCityDistrict/'+city_id, //use the getCity method from the Controller
                    type: 'GET',
                    dataType: 'json',
                    success: function(data){
                        $('select[name="cAddrCityDistr"]').empty(); //empty the dropdown

                        $.each(data, function(key, value){
                            //Populate
                            if (flag === 1){
                              flag = 2;
                              $('select[name="cAddrCityDistr"]').append('<option value="">'+ 'Моля, изберете' +'</option>');
                              $('select[name="cAddrCityDistr"]').append('<option value="'+key+'">'+ value +'</option>');
                            }else{
                              $('select[name="cAddrCityDistr"]').append('<option value="'+key+'">'+ value +'</option>');
                            }

                        });

                    }
                });
            } else {
                //If nothing was selected - empty the dropdown
                $('select[name="cAddrCityDistr"]').empty();
            }
        });

        //Correspondence address is the same as main
        $('#c_as_m').change(function(){
          if(this.checked == true){
            document.getElementById('cCountry').value = document.getElementById('mCountry').value;
            var val = document.getElementById("mCountry").value;
            alert(val);
            if (val == '1') {
                $("#cAddrRegion").css('display', 'block');
                $("#cAddrMuni").css('display', 'block');
                $("#cAddrCity").css('display', 'block');
                $("#cAddrCityDistr").css('display', 'block');

                $val1=$("#mAddrRegion :selected").val();
                $('#cAddrRegion').val('32');
                alert($val1);
            } else {
                $("#cAddrRegion").css('display', 'none');
                $("#cAddrMuni").css('display', 'none');
                $("#cAddrCity").css('display', 'none');
                $("#cAddrCityDistr").css('display', 'none');
            }

            //alert(val);

          }
        });

    </script>
@endsection
