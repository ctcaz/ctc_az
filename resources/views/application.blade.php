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
                    <input name="givenname" type="text" class="form-control" id="givenname" value="{{ old('givenname') }}" autocomplete="off">
                  </div>
                  <div class="col">
                    <label for="">Презиме:</label>
                    <input name="surname" type="text" class="form-control" id="surname" autocomplete="off">
                  </div>
                  <div class="col">
                    <label for="">Фамилия: *</label>
                    <input name="familyname" type="text" class="form-control" id="familyname" autocomplete="off">
                  </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">
                          <div class="form-check-inline">
                              <input name="lnch" class="form-check-input" type="checkbox" id="lnch" value=1>
                              <label class="form-check-label" for="inlineCheckbox1">ЕГН/ЛНЧ: *</label>
                          </div>
                        </label>
                        <input name="identifier" type="text" class="form-control" id="identifier" autocomplete="off">
                    </div>
                    <div class="col">
                      <label for="">Email: *</label>
                      <input name="email" type="text" class="form-control" id="email" autocomplete="off">
                    </div>
                    <div class="col">
                        <label for="">Длъжност: *</label>
                        <input name="position" type="text" class="form-control" id="position" autocomplete="off">
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
                      <input name="bulstat" type="text" class="form-control" id="" autocomplete="off">
                    </div>
                    <div class="col">
                      <label for="inputCity">Наименование:*</label>
                      <input name="comp_name" type="text" class="form-control" id="" autocomplete="off">
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
                        <input type="text" class="form-control" id="" name="comp_zzld" autocomplete="off">
                    </div>
                  </div>

              </section>

              <section>
                  <h3><span class="primary-bgr">Лица, представители на посредника</span></h3>
                  <p>
                    <em>Задължително е да има посочен поне един представител</em>
                    <br><br>
                    <u>
                      <a class="submitter" href="#">Добави заявителя</a>
                    </u>
                  </p>

                  <h6><strong>Данни за лицата</strong></h6>
                  <table class="table" id="reps" name="reps">
                    <thead>
                      <tr>
                        <th scope="col">Имена на лицето</th>
                        <th scope="col">ЕГН / ЛНЧ</th>
                        <th scope="col">Email</th>
                        <th scope="col">Длъжност</th>
                        <th scope="col">Изтрий</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      </tr>
                    </tbody>
                  </table>
                  <p><a data-fancybox data-src="#add-rep" href="javascript:void(0);" class="btn btn-primary" id="add-new-rep">Добави</a></p>

                  <div id="add-rep" title="Добавяне на нов представител" class="modal" tabindex="-1" role="dialog" style="display: none">
                    <section>
                      <div class="modal-content">
                        <div class="modal-body">
                          <form>
                            <fieldset>
                              <h4 class="text-primary mb-3"><strong>Лице, което ще представлява посредника</strong></h4>

                              <div class="row">
                                <div class="col">
                                  <label for="">Име: *</label>
                                  <input type="text" class="form-control" id="givenname_rep" name="givenname_rep" autocomplete="off">
                                </div>
                                <div class="col">
                                  <label for="">Презиме:</label>
                                  <input type="text" class="form-control" id="surname_rep" name="surname_rep" autocomplete="off">
                                </div>
                                <div class="col">
                                  <label for="">Фамилия: *</label>
                                  <input type="text" class="form-control" id="familyname_rep" name="familyname_rep" autocomplete="off">
                                </div>
                              </div>
                              <br>
                              <div class="row">
                                <div class="col">
                                  <label for="">
                                    <div class="form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="lnch_rep" name="lnch_rep" autocomplete="off">
                                      <label class="form-check-label" for="lnch_rep">ЛНЧ/ЕГН</label>
                                    </div>
                                  </label>
                                  <input type="text" class="form-control" id="identifier_rep" name="identifier_rep" autocomplete="off">
                                </div>
                                <div class="col">
                                  <label for="">Email: *</label>
                                  <input type="text" class="form-control" id="email_rep" name="email_rep" autocomplete="off">
                                </div>
                                <div class="col">
                                  <label for="">Длъжност: *</label>
                                  <input type="text" class="form-control" id="position_rep" name="position_rep" autocomplete="off">
                                </div>
                              </div>
                            </fieldset>
                          </form>
                        </div>
                      </div>
                    </section>
                  </div>

              </section>

              <section>
                <h3><span class="primary-bgr">Лица, които ще извършват посредническа дейност</span></h3>
                  <h6><strong>Данни за лицата</strong></h6>
                  <table class="table" id="brokers" name="brokers">
                    <thead>
                      <tr>
                        <th scope="col">Имена на лицето</th>
                        <th scope="col">ЕГН / ЛНЧ</th>
                        <th scope="col">Email</th>
                        <th scope="col">Достъп до услуги</th>
                        <th scope="col">Изтрий</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      </tr>
                    </tbody>
                  </table>

                  <p><a data-fancybox data-src="#add-broker" href="javascript:void(0);" class="btn btn-primary" id="add-new-broker">Добави</a></p>

                  <div id="add-broker" title="Данни за упълномощено лице" class="modal" tabindex="-1" role="dialog" style="display: none">
                    <section>
                      <div class="modal-content">
                        <div class="modal-body">
                          <form>
                            <fieldset>
                              <div class="row">
                                <div class="col">
                                  <label for="">Име: *</label>
                                  <input type="text" class="form-control" id="givenname_broker" name="givenname_broker" autocomplete="off">
                                </div>
                                <div class="col">
                                  <label for="">Презиме:</label>
                                  <input type="text" class="form-control" id="surname_broker" name="surname_broker" autocomplete="off">
                                </div>
                                <div class="col">
                                  <label for="">Фамилия: *</label>
                                  <input type="text" class="form-control" id="familyname_broker" name="familyname_broker" autocomplete="off">
                                </div>
                              </div>
                              <br>
                              <div class="row">
                                <div class="col">
                                  <label for="">
                                    <div class="form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="lnch_broker" name="lnch_broker" autocomplete="off">
                                      <label class="form-check-label" for="lnch_broker">ЛНЧ/ЕГН</label>
                                    </div>
                                  </label>
                                  <input type="text" class="form-control" id="identifier_broker" name="identifier_broker" autocomplete="off">
                                </div>
                                <div class="col">
                                  <label for="">Email: *</label>
                                  <input type="text" class="form-control" id="email_broker" name="email_broker" autocomplete="off">
                                </div>
                                <div class="col">
                                  <label for="">Длъжност: *</label>
                                  <input type="text" class="form-control" id="position_broker" name="position_broker" autocomplete="off">
                                </div>
                              </div>
                              <br>
                              <div class="row">
                                <div class="col">
                                  <h6><strong>Достъп до услуги:*</strong></h6>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col">
                                  <div class="form-group">
                                    <div class="checkbox" id="" name="" value="">
                                        <label>
                                            <input type="checkbox" name="remember"> Промяна на обстоятелства за ЧТП
                                        </label>
                                    </div>
                                    <div class="checkbox" id="" name="" value="">
                                        <label>
                                            <input type="checkbox" name="remember"> Публикуване на заявки за СРМ
                                        </label>
                                    </div>
                                    <div class="checkbox" id="" name="" value="">
                                        <label>
                                            <input type="checkbox" name="remember"> Промяна на заявки за СРМ
                                        </label>
                                    </div>
                                    <div class="checkbox" id="" name="" value="">
                                        <label>
                                            <input type="checkbox" name="remember"> Регистрация на ТРЛ
                                        </label>
                                    </div>
                                  </div>
                                </div>
                              </div>

                            </fieldset>
                          </form>
                        </div>
                      </div>
                    </section>
                  </div>

              </section>

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
                      <div class="form-group" id="mAddrRegion1" style="display: block;">
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
                      <div class="" id="mAddrMuni1" style="display: block;">
                        <label for="">Община:*</label>
                        <select name="mAddrMuni" id="mAddrMuni" class="form-control">
                          <option selected="">Моля, изберете</option>
                        </select>
                      </div>
                    </div>

                    <div class="col">
                      <div class="" id="mAddrCity1" style="display: block;">
                        <label for="">Населено място:*</label>
                        <select name="mAddrCity" id="mAddrCity" class="form-control">
                          <option selected="">Моля, изберете</option>
                        </select>
                      </div>
                    </div>

                    <div class="col">
                      <div class="" id="mAddrCityDistr1" style="display: block;">
                        <label for="mAddrCityDistr">Район:*</label>
                        <select name="mAddrCityDistr" id="mAddrCityDistr" class="form-control">
                          <option selected="">Моля, изберете</option>
                        </select>
                      </div>
                    </div>

                  </div>

                  <div class="form-group">
                    <label for="">Адрес:*</label>
                    <input type="text" class="form-control" id="mAddr" name="mAddr" placeholder="">
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

                    <div class="col" id="cAddrRegion1" style="display: block;">
                        <label for="">Област:*</label>
                        <select id="cAddrRegion" name="cAddrRegion" class="form-control">
                          <option selected="">Моля, изберете</option>
                          @foreach ($regions as $id => $region)
                            <option value="{{ $id }}">
                              {{$region}}
                            </option>
                          @endforeach
                        </select>
                    </div>

                    <div class="col">
                      <div class="" id="cAddrMuni1" style="display: block;">
                        <label for="">Община:*</label>
                        <select name="cAddrMuni" id="cAddrMuni" class="form-control">
                          <option selected="">Моля, изберете</option>
                        </select>
                      </div>
                    </div>

                    <div class="col">
                      <div class="" id="cAddrCity1" style="display: block;">
                        <label for="">Населено място:*</label>
                        <select name="cAddrCity" id="cAddrCity" class="form-control">
                          <option selected="">Моля, изберете</option>
                        </select>
                      </div>
                    </div>

                    <div class="col">
                      <div class="" id="cAddrCityDistr1" style="display: block;">
                        <label for="cAddrCityDistr">Район:*</label>
                        <select name="cAddrCityDistr" id="cAddrCityDistr" class="form-control">
                          <option selected="">Моля, изберете</option>
                        </select>
                      </div>
                    </div>

                  </div>

                  <div class="form-group">
                    <label for="">Адрес:*</label>
                    <input type="text" class="form-control" id="cAddr" name="cAddr" placeholder="" autocomplete="off">
                  </div>

                  <h6 class="mt-4"><strong>Офиси</strong></h6>
                  <table id="offices" name="offices" class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Адрес</th>
                        <th scope="col">Телефон</th>
                        <th scope="col">Email</th>
                        <th scope="col">Лице за контакт</th>
                        <th scope="col">Изтрий</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      </tr>
                    </tbody>
                  </table>

                  <p><a data-fancybox="" data-src="#add-office" href="javascript:void(0);" class="btn btn-primary" id="add-new-office">Добави</a></p>
                  <br>

                  <div id="add-office" title="Добавяне на нов офис" class="modal" tabindex="-1" role="dialog" style="display: none">
                      <div class="modal-content">
                        <div class="modal-body">
                            <form>
                              <fieldset>
                                <div class="form-group">
                                  <u><a class="copyAddress" href="#">Добави данните от адреса на управление</a></u>
                                </div>

                                <div class="form-group">
                                  <div class="row">
                                    <div class="col">
                                      <label for="country">Държава:*</label>
                                      <select name="oCountry" id="oCountry" class="form-control">
                                          <option selected="">Моля, изберете</option>
                                          @foreach ($countries as $country)
                                              <option value="{{ $country->id }}" {{ ( $country->id == 1) ? 'selected' : '' }}>
                                                  {{ $country->name }}
                                              </option>
                                          @endforeach
                                      </select>
                                    </div>

                                    <div class="col">
                                      <div class="form-group" id="oAddrRegion1" style="display: block;">
                                        <label for="region">Област:*</label>
                                        <select name="oAddrRegion" id="oAddrRegion" class="form-control">
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
                                      <div class="" id="oAddrMuni1" style="display: block;">
                                        <label for="">Община:*</label>
                                        <select name="oAddrMuni" id="oAddrMuni" class="form-control">
                                          <option selected="">Моля, изберете</option>
                                        </select>
                                      </div>
                                    </div>

                                    <div class="col">
                                      <div class="" id="oAddrCity1" style="display: block;">
                                        <label for="">Населено място:*</label>
                                        <select name="oAddrCity" id="oAddrCity" class="form-control">
                                          <option selected="">Моля, изберете</option>
                                        </select>
                                      </div>
                                    </div>

                                    <div class="col">
                                      <div class="" id="oAddrCityDistr1" style="display: block;">
                                        <label for="oAddrCityDistr">Район:*</label>
                                        <select name="oAddrCityDistr" id="oAddrCityDistr" class="form-control">
                                          <option selected="">Моля, изберете</option>
                                        </select>
                                      </div>
                                    </div>

                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="oAddr" class="col-form-label">Адрес</label>
                                  <input type="text" name="oAddr" id="oAddr" value="" class="form-control input-lg" autocomplete="off">
                                </div>
                                <div class="form-group">
                                  <label for="oContactPerson" class="col-form-label">Лице за контакт:*</label>
                                  <select name="oContactPerson" id="oContactPerson" class="form-control">
                                    <option selected="">Моля, изберете</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <input type="text" name="oOtherContact" id="oOtherContact" value="" class="form-control" autocomplete="off">
                                </div>

                                <div class="row">
                                  <div class="col">
                                    <div class="form-group">
                                      <label for="tel_off" class="col-form-label">Телефон</label>
                                      <input type="text" name="tel_off" id="tel_off" value="" class="form-control" autocomplete="off">
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="form-group">
                                      <label for="fax_off" class="col-form-label">Факс</label>
                                      <input type="text" name="fax_off" id="fax_off" value="" class="form-control" autocomplete="off">
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="form-group">
                                      <label for="email_off" class="col-form-label">Email</label>
                                      <input type="text" name="email_off" id="email_off" value="" class="form-control" autocomplete="off">
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="mainOffice" name="mainOffice" value=1>
                                    <label class="form-check-label" for="">Главен офис</label>
                                  </div>
                                </div>

                                <!-- Allow form submission with keyboard without duplicating the dialog button -->
                                <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
                              </fieldset>
                            </form>
                        </div>
                      </div>
                  </div>

              </section>

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

                $("#mAddrRegion1").css('display', 'block');
                $("#mAddrMuni1").css('display', 'block');
                $("#mAddrCity1").css('display', 'block');
                $("#mAddrCityDistr1").css('display', 'block');

                $("#cAddrRegion1").css('display', 'block');
                $("#cAddrMuni1").css('display', 'block');
                $("#cAddrCity1").css('display', 'block');
                $("#cAddrCityDistr1").css('display', 'block');

            }

            if (id == 'World') {
                $("#mCountry").val(0);
                $("#cCountry").val(0);

                $("#mAddrRegion1").css('display', 'none');
                $("#mAddrMuni1").css('display', 'none');
                $("#mAddrCity1").css('display', 'none');
                $("#mAddrCityDistr1").css('display', 'none');

                $("#cAddrRegion1").css('display', 'none');
                $("#cAddrMuni1").css('display', 'none');
                $("#cAddrCity1").css('display', 'none');
                $("#cAddrCityDistr1").css('display', 'none');
            }
        });

        //If another country is selected - hide Region/Municipaty/City/District
        //Headquarters
        $('select[name="mCountry"]').on('change', function(){ //listens to changes in "mCountry"
            var id = $(this).val();
            if(id !== '1'){
                $("#mAddrRegion1").css('display', 'none');
                $("#mAddrMuni1").css('display', 'none');
                $("#mAddrCity1").css('display', 'none');
                $("#mAddrCityDistr1").css('display', 'none');
                //alert($('#c_as_m').val());

                //if same address checkbox is on
                if ($('#c_as_m').val() == 'on') {
                    document.getElementById('cCountry').value = document.getElementById('mCountry').value;
                    $("#cAddrRegion1").css('display', 'none');
                    $("#cAddrMuni1").css('display', 'none');
                    $("#cAddrCity1").css('display', 'none');
                    $("#cAddrCityDistr1").css('display', 'none');
                }
            } else {
                $("#mAddrRegion1").css('display', 'block');
                $("#mAddrMuni1").css('display', 'block');
                $("#mAddrCity1").css('display', 'block');
                $("#mAddrCityDistr1").css('display', 'block');

                //if same address checkbox is on
                if ($('#c_as_m').val() == 'on') {
                    document.getElementById('cCountry').value = document.getElementById('mCountry').value;
                    $("#cAddrRegion1").css('display', 'block');
                    $("#cAddrMuni1").css('display', 'block');
                    $("#cAddrCity1").css('display', 'block');
                    $("#cAddrCityDistr1").css('display', 'block');
                }
            }
        });

        //Correspondence
        $('select[name="cCountry"]').on('change', function(){ //listens to changes in "cCountry"
            var id = $(this).val();
            if(id !== '1'){
                //alert(id);
                $("#cAddrRegion1").css('display', 'none');
                $("#cAddrMuni1").css('display', 'none');
                $("#cAddrCity1").css('display', 'none');
                $("#cAddrCityDistr1").css('display', 'none');
            } else {
              $("#cAddrRegion1").css('display', 'block');
              $("#cAddrMuni1").css('display', 'block');
              $("#cAddrCity1").css('display', 'block');
              $("#cAddrCityDistr1").css('display', 'block');
            }
        });

        //Modal
        $('select[name="oCountry"]').on('change', function(){ //listens to changes in "oCountry"
            var id = $(this).val();
            if(id !== '1'){
                //alert(id);
                $("#oAddrRegion1").css('display', 'none');
                $("#oAddrMuni1").css('display', 'none');
                $("#oAddrCity1").css('display', 'none');
                $("#oAddrCityDistr1").css('display', 'none');
            } else {
              $("#oAddrRegion1").css('display', 'block');
              $("#oAddrMuni1").css('display', 'block');
              $("#oAddrCity1").css('display', 'block');
              $("#oAddrCityDistr1").css('display', 'block');
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
                        $('select[name="cAddrCityDistr"]').empty();

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
                $('select[name="cAddrCityDistr"]').empty();
            }
        });

        $('select[name="oAddrRegion"]').on('change', function(){ //listens to changes in "oAddrRegion"

            var oAddrRegion_id = $(this).val();
            var flag = 1; //initializing the first row flag
            //alert(cAddrRegion_id);
            if(oAddrRegion_id){
                $.ajax({
                    url: 'application/getMuni/'+oAddrRegion_id, //use the getMuni method from the Controller
                    type: 'GET',
                    dataType: 'json',
                    success: function(data){
                        //empty the cAddrMuni and cAddrCity dropdowns
                        $('select[name="oAddrMuni"]').empty();
                        $('select[name="oAddrCity"]').empty();
                        $('select[name="oAddrCityDistr"]').empty();

                        $.each(data, function(key, value){
                            //Populate
                            if (flag === 1){
                              flag = 2;
                              $('select[name="oAddrMuni"]').append('<option value="">'+ 'Моля, изберете' +'</option>');
                              $('select[name="oAddrMuni"]').append('<option value="'+key+'">'+ value +'</option>');
                            }else{
                              $('select[name="oAddrMuni"]').append('<option value="'+key+'">'+ value +'</option>');
                            }
                        });
                    }
                });
            } else {
                //If nothing was selected - empty the dropdowns
                $('select[name="oAddrMuni"]').empty();
                $('select[name="oAddrCity"]').empty();
                $('select[name="oAddrCityDistr"]').empty();
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
                        $('select[name="mAddrCityDistr"]').empty();

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
                $('select[name="mAddrCityDistr"]').empty();
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
                        $('select[name="cAddrCityDistr"]').empty();

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
                $('select[name="cAddrCityDistr"]').empty();
            }
        });


      });

        //Populate the first city object based on the selected municipaty
        $('select[name="oAddrMuni"]').on('change', function(){ //listens to changes in "cAddrMuni"
          var oAddrMuni_id = $(this).val();
          flag = 1; //initializing the first row flag
          if(oAddrMuni_id){
            $.ajax({
              url: 'application/getCity/'+oAddrMuni_id, //use the getCity method from the Controller
              type: 'GET',
              dataType: 'json',
              success: function(data){
                $('select[name="oAddrCity"]').empty(); //empty the dropdown
                $('select[name="oAddrCityDistr"]').empty();

                $.each(data, function(key, value){
                  //Populate
                  if (flag === 1){
                    flag = 2;
                    $('select[name="oAddrCity"]').append('<option value="">'+ 'Моля, изберете' +'</option>');
                    $('select[name="oAddrCity"]').append('<option value="'+key+'">'+ value +'</option>');
                  }else{
                    $('select[name="oAddrCity"]').append('<option value="'+key+'">'+ value +'</option>');
                  }
                });
              }
            });
          } else {
            //If nothing was selected - empty the dropdown
            $('select[name="oAddrCity"]').empty();
            $('select[name="oAddrCityDistr"]').empty();
          }
        });

        //Populate the first city district object based on the selected city
        $('select[name="mAddrCity"]').on('change', function(){ //listens to changes in "mAddrCity"
            var city_id = $(this).val();
            flag = 1; //initializing the first row flag
            //alert(city_id);
            if(city_id){
                $.ajax({
                    url: 'application/getCityDistrict/'+city_id, //use the getCityDistrict method from the Controller
                    type: 'GET',
                    dataType: 'json',
                    success: function(data){
                        console.log(data);
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
        $('select[name="cAddrCity"]').on('change', function(){ //listens to changes in "cAddrCity"
            var city_id = $(this).val();
            flag = 1; //initializing the first row flag
            //alert(city_id);
            if(city_id){
                $.ajax({
                    url: 'application/getCityDistrict/'+city_id, //use the getCityDistrict method from the Controller
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

        //Populate the first city district object based on the selected city
        $('select[name="oAddrCity"]').on('change', function(){ //listens to changes in "cAddrCity"
            var city_id = $(this).val();
            flag = 1; //initializing the first row flag
            //alert(city_id);
            if(city_id){
                $.ajax({
                    url: 'application/getCityDistrict/'+city_id, //use the getCityDistrict method from the Controller
                    type: 'GET',
                    dataType: 'json',
                    success: function(data){
                        $('select[name="oAddrCityDistr"]').empty(); //empty the dropdown

                        $.each(data, function(key, value){
                            //Populate
                            if (flag === 1){
                              flag = 2;
                              $('select[name="oAddrCityDistr"]').append('<option value="">'+ 'Моля, изберете' +'</option>');
                              $('select[name="oAddrCityDistr"]').append('<option value="'+key+'">'+ value +'</option>');
                            }else{
                              $('select[name="oAddrCityDistr"]').append('<option value="'+key+'">'+ value +'</option>');
                            }
                        });
                    }
                });
            } else {
                //If nothing was selected - empty the dropdown
                $('select[name="oAddrCityDistr"]').empty();
            }
        });

        //Correspondence address is the same as main
        $('#c_as_m').change(function(){
          if(this.checked == true){
            document.getElementById('cCountry').value = document.getElementById('mCountry').value;

            if ($("#mCountry :selected").val() !== '1') {
              //alert($("#mCountry :selected").val());
              $("#cAddrRegion1").css('display', 'none');
              $("#cAddrMuni1").css('display', 'none');
              $("#cAddrCity1").css('display', 'none');
              $("#cAddrCityDistr1").css('display', 'none');
            } else {
              $("#cAddrRegion1").css('display', 'block');
              $("#cAddrMuni1").css('display', 'block');
              $("#cAddrCity1").css('display', 'block');
              $("#cAddrCityDistr1").css('display', 'block');
            }

            $("#cAddrRegion").empty();
            $("#cAddrRegion").append($("#mAddrRegion").html());
            $("#cAddrMuni").empty();
            $("#cAddrMuni").append($("#mAddrMuni").html());
            $("#cAddrCity").empty();
            $("#cAddrCity").append($("#mAddrCity").html());

            //Show the district
            $("#cAddrCityDistr1").css('display', 'block');
            $("#cAddrCityDistr").empty();
            $("#cAddrCityDistr").append($("#mAddrCityDistr").html());


            $("#cAddrRegion :selected").text($("#mAddrRegion :selected").text());
            $("#cAddrRegion :selected").val($("#mAddrRegion :selected").val());
            $("#cAddrMuni :selected").text($("#mAddrMuni :selected").text());
            $("#cAddrMuni :selected").val($("#mAddrMuni :selected").val());
            $("#cAddrCity :selected").text($("#mAddrCity :selected").text());
            $("#cAddrCity :selected").val($("#mAddrCity :selected").val());
            $("#cAddrCityDistr :selected").text($("#mAddrCityDistr :selected").text());
            $("#cAddrCityDistr :selected").val($("#mAddrCityDistr :selected").val());

            document.getElementById('cAddr').value = document.getElementById('mAddr').value;

          }
        });


        var contacts = []; //[id][name]

        <!--=========Representative===============================-->
        $(document).ready(function() {
          $( function() {
            var off_cnt = 1; //counter for office rows
            var dialog, form,
              // lnch
              // From http://www.whatwg.org/specs/web-apps/current-work/multipage/states-of-the-type-attribute.html#e-mail-state-%28type=email%29
              emailRegex = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/,
              givenname_rep = $( "#givenname_rep" ),
              surname_rep = $( "#surname_rep" ),
              familyname_rep = $( "#familyname_rep" ),
              email_rep = $( "#email_rep" ),
              lnch_rep = $( "#lnch_rep" ),
              identifier_rep = $( "#identifier_rep" ),
              position_rep = $( "#position_rep" ),
              allFields = $( [] ).add( givenname_rep ).add( surname_rep ).add( familyname_rep ).add( email_rep ).add( identifier_rep ).add( position_rep ),
              tips = $( ".validateTips" );

            function updateTips( t ) {
              tips
                .text( t )
                .addClass( "ui-state-highlight" );
              setTimeout(function() {
                tips.removeClass( "ui-state-highlight", 1500 );
              }, 500 );
            }

            function checkLength( o, n, min, max ) {
              if ( o.val().length > max || o.val().length < min ) {
                o.addClass( "ui-state-error" );
                //alert(n;
                updateTips( "Дължината на " + n + " може да бъде от " +
                  min + " до " + max + " символа." );
                return false;
              } else {
                return true;
              }
            }

            function checkRegexp( o, regexp, n ) {
              if ( !( regexp.test( o.val() ) ) ) {
                o.addClass( "ui-state-error" );
                updateTips( n );
                return false;
              } else {
                return true;
              }
            }


            function addReps() {
              var valid = true;

              allFields.removeClass( "ui-state-error" );

              valid = valid && checkLength( givenname_rep, "Име", 3, 255 );
              valid = valid && checkLength( surname_rep, "Презиме", 3, 255 );
              valid = valid && checkLength( familyname_rep, "Фамилия", 3, 255 );
              valid = valid && checkLength( email_rep, "Email", 6, 80 );
              valid = valid && checkLength( identifier_rep, "ЛНЧ/ЕГН", 1, 16 );
              valid = valid && checkLength( position_rep, "Длъжност", 3, 35 );

              //valid = valid && checkRegexp( address, /^[a-z]([0-9a-z_\s])+$/i, "Адресът може да съдържа символите a-z, 0-9, underscores, spaces and must begin with a letter." );
              valid = valid && checkRegexp( email_rep, emailRegex, "eg. ui@jquery.com" );
              valid = valid && checkRegexp( identifier_rep, /^([0-9])+$/, "ЛНЧ/ЕГН може да съдържат само цифри : 0-9" );
              //valid = valid && checkRegexp( name, /^[a-z]([0-9a-z_\s])+$/i, "Username may consist of a-z, 0-9, underscores, spaces and must begin with a letter." );

              //alert(off_cnt);
              if ( valid ) {
                //add contact to the list for displaying in the office modal
                var full_name = givenname_rep.val()+' '+surname_rep.val()+' '+familyname_rep.val();
                //alert(full_name);
                contacts.push({'id' : identifier_rep.val(), 'contact' : full_name});

                var lnch = 0;
                var ischecked = $(lnch_rep).is(":checked");
                if (ischecked) {
                  lnch = 1;
                }

                $( "#reps tbody" ).append( "<tr>" +
                  "<td>" +
                    '<input type="hidden" id="givenname_rep' + off_cnt + '" name="givenname_rep' + off_cnt + '" value="' + givenname_rep.val()+ '">'+
                    '<input type="hidden" id="surname_rep' + off_cnt + '" name="surname_rep' + off_cnt + '" value="' + surname_rep.val()+ '">'+
                    '<input type="hidden" id="familyname_rep' + off_cnt + '" name="familyname_rep' + off_cnt + '" value="' + familyname_rep.val()+ '">'+
                    givenname_rep.val()+' '+surname_rep.val()+' '+familyname_rep.val()+
                  "</td>" +
                  "<td>" +
                    '<input type="hidden" id="identifier_rep' + off_cnt + '" name="identifier_rep' + off_cnt + '" value="' + identifier_rep.val()+ '">'+
                    '<input type="hidden" id="lnch_rep' + off_cnt + '" name="lnch_rep' + off_cnt + '" value="' + lnch+ '">'+
                    identifier_rep.val()+
                  "</td>" +
                  "<td>" +
                    '<input type="hidden" id="email_rep' + off_cnt + '" name="email_rep' + off_cnt + '" value="' + email_rep.val()+ '">'+
                    email_rep.val()+
                  "</td>" +
                  "<td>" +
                    '<input type="hidden" id="position_rep' + off_cnt + '" name="position_rep' + off_cnt + '" value="' + position_rep.val()+ '">'+
                    position_rep.val()+
                  "</td>" +
                  "<td>" +
                    '<button type="button" class="btnDelete btn-danger btn-sm" id="del_office">Изтрий</button>'+
                  "</td>" +

                  "</tr>" );

                off_cnt++;

                dialog.dialog( "close" );
              }
              return valid;
            }

              dialog = $( "#add-rep" ).dialog({
                autoOpen: false,
                show: {effect: "blind", duration: 1000},
                hide: {effect: "clip", duration: 1000},
                width: 1200,
                height: 'auto',
                //width: 350,
                //width: $(window).width(),
                //width: $(window).width() * 0.72,
                modal: true,
                buttons: {
                  "Добавяне на представител": addReps,
                  "Изход": function() {
                    dialog.dialog( "close" );
                  }
                },
                close: function() {
                  //form[ 0 ].reset();
                  //if ( form[0] )form[ 0 ].reset();
                  //$("#add-office")[0].reset();
                  //allFields.val( "" );
                  allFields.val( "" ).removeClass( "ui-state-error" );
                }
              });

              form = dialog.find( "#rep" ).on( "submit", function( event ) {
                event.preventDefault();
                //alert('109');
                addReps();
              });

              $( "#add-new-rep" ).button().on( "click", function() {
                //initialization
                $(".modal-body #lnch_rep").prop("checked", 0);

                dialog.dialog( "open" );
              });

              //Add the applicaiton submitter
              $(".submitter").click(function(){

                var givenname = $('#givenname').val();
                var surname = $('#surname').val();
                var familyname = $('#familyname').val();
                var email = $('#email').val();
                var lnch = $('#lnch').val();
                var identifier = $('#identifier').val();
                var position = $('#position').val();

                //add contact to the list for displaying in the office modal
                var full_name = givenname+' '+surname+' '+familyname;
                //alert(full_name);
                contacts.push({'id' : identifier, 'contact' : full_name});

                //Lnch
                var lnch2 = 0;
                var ischecked = $(lnch).is(":checked");
                if (ischecked) {
                  lnch2 = 1;
                }
                //alert(lnch2);

                $( "#reps tbody" ).append( "<tr>" +
                  "<td>" +
                    '<input type="hidden" id="givenname_rep' + off_cnt + '" name="givenname_rep' + off_cnt + '" value="' + givenname+ '">'+
                    '<input type="hidden" id="surname_rep' + off_cnt + '" name="surname_rep' + off_cnt + '" value="' + surname+ '">'+
                    '<input type="hidden" id="familyname_rep' + off_cnt + '" name="familyname_rep' + off_cnt + '" value="' + familyname+ '">'+
                    givenname + ' '+surname+' '+familyname+
                  "</td>" +
                  "<td>" +
                    '<input type="hidden" id="identifier_rep' + off_cnt + '" name="identifier_rep' + off_cnt + '" value="' + identifier+ '">'+
                    '<input type="hidden" id="lnch_rep' + off_cnt + '" name="lnch_rep' + off_cnt + '" value="' + lnch2+ '">'+
                    identifier+
                  "</td>" +
                  "<td>" +
                    '<input type="hidden" id="email_rep' + off_cnt + '" name="email_rep' + off_cnt + '" value="' + email+ '">'+
                    email+
                  "</td>" +
                  "<td>" +
                    '<input type="hidden" id="position_rep' + off_cnt + '" name="position_rep' + off_cnt + '" value="' + position+ '">'+
                    position+
                  "</td>" +
                  "<td>" +
                    '<button type="button" class="btnDelete btn-danger btn-sm" id="del_office">Изтрий</button>'+
                  "</td>" +

                  "</tr>" );

                off_cnt++;

              });

          });

          //Click Delete
          $("#reps").on('click','.btnDelete',function(){
               // get the current row
               var currentRow = $(this).closest("tr");
               var currentRow1 = $(this).closest("tr")[0];
               var cells = currentRow1.cells;

               var secondCell = cells[1].textContent;

               for (var i = 0; i < contacts.length; i++) {
                 if (contacts[i].id == secondCell) {
                   myRow = i;
                 }
               }

               contacts.splice(myRow, 1);

               currentRow.html('');
          });

        });
        <!--========================================-->

        <!--=========Broker===============================-->
        $(document).ready(function() {
          $( function() {
            var off_cnt = 1; //counter for office rows
            var dialog, form,
              // lnch
              // From http://www.whatwg.org/specs/web-apps/current-work/multipage/states-of-the-type-attribute.html#e-mail-state-%28type=email%29
              emailRegex = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/,
              givenname_broker = $( "#givenname_broker" ),
              surname_broker = $( "#surname_broker" ),
              familyname_broker = $( "#familyname_broker" ),
              email_broker = $( "#email_broker" ),
              lnch_broker = $( "#lnch_broker" ),
              identifier_broker = $( "#identifier_broker" ),
              position_broker = $( "#position_broker" ),
              allFields = $( [] ).add( givenname_broker ).add( surname_broker ).add( familyname_broker ).add( email_broker ).add( identifier_broker ).add( position_broker ),
              tips = $( ".validateTips" );

            function updateTips( t ) {
              tips
                .text( t )
                .addClass( "ui-state-highlight" );
              setTimeout(function() {
                tips.removeClass( "ui-state-highlight", 1500 );
              }, 500 );
            }

            function checkLength( o, n, min, max ) {
              if ( o.val().length > max || o.val().length < min ) {
                o.addClass( "ui-state-error" );
                //alert(n;
                updateTips( "Дължината на " + n + " може да бъде от " +
                  min + " до " + max + " символа." );
                return false;
              } else {
                return true;
              }
            }

            function checkRegexp( o, regexp, n ) {
              if ( !( regexp.test( o.val() ) ) ) {
                o.addClass( "ui-state-error" );
                updateTips( n );
                return false;
              } else {
                return true;
              }
            }


            function addBroker() {
              var valid = true;

              allFields.removeClass( "ui-state-error" );

              valid = valid && checkLength( givenname_broker, "Име", 3, 255 );
              valid = valid && checkLength( surname_broker, "Презиме", 3, 255 );
              valid = valid && checkLength( familyname_broker, "Фамилия", 3, 255 );
              valid = valid && checkLength( email_broker, "Email", 6, 80 );
              valid = valid && checkLength( identifier_broker, "ЛНЧ/ЕГН", 1, 16 );
              valid = valid && checkLength( position_broker, "Длъжност", 3, 35 );

              //valid = valid && checkRegexp( address, /^[a-z]([0-9a-z_\s])+$/i, "Адресът може да съдържа символите a-z, 0-9, underscores, spaces and must begin with a letter." );
              valid = valid && checkRegexp( email_broker, emailRegex, "eg. ui@jquery.com" );
              valid = valid && checkRegexp( identifier_broker, /^([0-9])+$/, "ЛНЧ/ЕГН може да съдържат само цифри : 0-9" );
              //valid = valid && checkRegexp( name, /^[a-z]([0-9a-z_\s])+$/i, "Username may consist of a-z, 0-9, underscores, spaces and must begin with a letter." );

              //alert(off_cnt);
              if ( valid ) {
                //add contact to the list for displaying in the office modal
                var full_name = givenname_broker.val()+' '+surname_broker.val()+' '+familyname_broker.val();
                //alert(full_name);
                contacts.push({'id' : identifier_broker.val(), 'contact' : full_name});

                var lnch = 0;
                var ischecked = $(lnch_broker).is(":checked");
                if (ischecked) {
                  lnch = 1;
                }

                $( "#brokers tbody" ).append( "<tr>" +
                  "<td>" +
                    '<input type="hidden" id="givenname_broker' + off_cnt + '" name="givenname_broker' + off_cnt + '" value="' + givenname_broker.val()+ '">'+
                    '<input type="hidden" id="surname_broker' + off_cnt + '" name="surname_broker' + off_cnt + '" value="' + surname_broker.val()+ '">'+
                    '<input type="hidden" id="familyname_broker' + off_cnt + '" name="familyname_broker' + off_cnt + '" value="' + familyname_broker.val()+ '">'+
                    full_name+
                  "</td>" +
                  "<td>" +
                    '<input type="hidden" id="identifier_broker' + off_cnt + '" name="identifier_broker' + off_cnt + '" value="' + identifier_broker.val()+ '">'+
                    '<input type="hidden" id="lnch_broker' + off_cnt + '" name="lnch_broker' + off_cnt + '" value="' + lnch+ '">'+
                    identifier_broker.val()+
                  "</td>" +
                  "<td>" +
                    '<input type="hidden" id="email_broker' + off_cnt + '" name="email_broker' + off_cnt + '" value="' + email_broker.val()+ '">'+
                    email_broker.val()+
                  "</td>" +
                  "<td>" +
                    '<input type="hidden" id="position_broker' + off_cnt + '" name="position_broker' + off_cnt + '" value="' + position_broker.val()+ '">'+
                    position_broker.val()+
                  "</td>" +
                  "<td>" +
                    '<button type="button" class="btnDelete btn-danger btn-sm" id="del_broker">Изтрий</button>'+
                  "</td>" +

                  "</tr>" );

                off_cnt++;

                dialog.dialog( "close" );
              }
              return valid;
            }

              dialog = $( "#add-broker" ).dialog({
                autoOpen: false,
                show: {effect: "blind", duration: 1000},
                hide: {effect: "clip", duration: 1000},
                width: 1200,
                height: 'auto',
                //width: 350,
                //width: $(window).width(),
                //width: $(window).width() * 0.72,
                modal: true,
                buttons: {
                  "Добави посредник": addBroker,
                  "Изход": function() {
                    dialog.dialog( "close" );
                  }
                },
                close: function() {
                  //form[ 0 ].reset();
                  //if ( form[0] )form[ 0 ].reset();
                  //$("#add-office")[0].reset();
                  //allFields.val( "" );
                  allFields.val( "" ).removeClass( "ui-state-error" );
                }
              });

              form = dialog.find( "#add-broker" ).on( "submit", function( event ) {
                event.preventDefault();
                //alert('109');
                addBroker();
              });

              $( "#add-new-broker" ).button().on( "click", function() {
                //initialization
                $(".modal-body #lnch_broker").prop("checked", 0);

                dialog.dialog( "open" );
              });

          });

          //Click Delete
          $("#brokers").on('click','.btnDelete',function(){
               // get the current row
               var currentRow = $(this).closest("tr");
               var currentRow1 = $(this).closest("tr")[0];
               var cells = currentRow1.cells;

               var secondCell = cells[1].textContent;

               for (var i = 0; i < contacts.length; i++) {
                 if (contacts[i].id == secondCell) {
                   myRow = i;
                 }
               }

               contacts.splice(myRow, 1);

               currentRow.html('');

          });

        });
        <!--========================================-->


        <!--=========Address===============================-->
        $(document).ready(function() {
          $( function() {
            var off_cnt = 1; //counter for office rows
            var dialog, form,

              // From http://www.whatwg.org/specs/web-apps/current-work/multipage/states-of-the-type-attribute.html#e-mail-state-%28type=email%29
              emailRegex = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/,
              oCountry = $('#oCountry'),
              oAddrRegion = $('#oAddrRegion'),
              oAddrMuni = $('#oAddrMuni'),
              oAddrCity = $('#oAddrCity'),
              oAddrCityDistr = $('#oAddrCityDistr'),
              oAddr = $( "#oAddr" ),
              email_off = $( "#email_off" ),
              tel_off = $( "#tel_off" ),
              fax_off = $( "#fax_off" ),
              oContactPerson = $( "#oContactPerson" ),
              oOtherContact = $( "#oOtherContact" ),
              mainOffice = $( "#mainOffice" ),
              allFields = $( [] ).add(oAddrCity).add(oAddr).add(email_off).add(tel_off).add(fax_off).add(oContactPerson),
              tips = $( ".validateTips" );

            function updateTips( t ) {
              tips
                .text( t )
                .addClass( "ui-state-highlight" );
              setTimeout(function() {
                tips.removeClass( "ui-state-highlight", 1500 );
              }, 500 );
            }

            function checkLength( o, n, min, max ) {
              if ( o.val().length > max || o.val().length < min ) {
                o.addClass( "ui-state-error" );
                //alert(n;
                updateTips( "Дължината на " + n + " може да бъде от " +
                  min + " до " + max + " символа." );
                return false;
              } else {
                return true;
              }
            }

            function checkRegexp( o, regexp, n ) {
              if ( !( regexp.test( o.val() ) ) ) {
                o.addClass( "ui-state-error" );
                updateTips( n );
                return false;
              } else {
                return true;
              }
            }

            function addOffice() {
              var valid = true;

              allFields.removeClass( "ui-state-error" );
              valid = valid && checkLength( oAddr, "Адрес", 3, 255 );
              valid = valid && checkLength( email_off, "Email", 6, 80 );
              valid = valid && checkLength( tel_off, "Телефон", 5, 16 );
              //valid = valid && checkLength( fax_off, "Факс", 5, 16 );
              //valid = valid && checkLength( name, "Лице за контакт", 3, 35 );
              //valid = valid && checkRegexp( address, /^[a-z]([0-9a-z_\s])+$/i, "Адресът може да съдържа символите a-z, 0-9, underscores, spaces and must begin with a letter." );
              //valid = valid && checkRegexp( email, emailRegex, "eg. ui@jquery.com" );
              //valid = valid && checkRegexp( tel_fax, /^([0-9])+$/, "Телефонният номер може да съдържа само цифри : 0-9" );
              //valid = valid && checkRegexp( name, /^[a-z]([0-9a-z_\s])+$/i, "Username may consist of a-z, 0-9, underscores, spaces and must begin with a letter." );

              //Main office
              var mainO = 0;
              var mainL = '<input type="checkbox" class="form-control checkbox-inline" id="CheckedDisabled2" disabled>';
              var ischecked = $(mainOffice).is(":checked");
              if (ischecked) {
                mainO = 1;
                mainL = '<input type="checkbox" class="form-control checkbox-inline" id="CheckedDisabled2" checked disabled>';
              }


              if ( valid ) {
                $( "#offices tbody" ).append( "<tr>" +
                  '<td  style="horizontal-align: left">' +
                    '<input type="hidden" id="mainOffice' + off_cnt + '" name="mainOffice' + off_cnt + '" value="' + mainO + '">'+
                    mainL+
                  "</td>" +
                  "<td>" +
                    '<input type="hidden" id="oCountry' + off_cnt + '" name="oCountry' + off_cnt + '" value="' + oCountry.val()+ '">'+
                    '<input type="hidden" id="oAddrRegion' + off_cnt + '" name="oAddrRegion' + off_cnt + '" value="' + oAddrRegion.val()+ '">'+
                    '<input type="hidden" id="oAddrMuni' + off_cnt + '" name="oAddrMuni' + off_cnt + '" value="' + oAddrMuni.val()+ '">'+
                    '<input type="hidden" id="oAddrCity' + off_cnt + '" name="oAddrCity' + off_cnt + '" value="' + oAddrCity.val()+ '">'+
                    '<input type="hidden" id="oAddrCityDistr' + off_cnt + '" name="oAddrCityDistr' + off_cnt + '" value="' + oAddrCityDistr.val()+ '">'+
                    '<input type="hidden" id="oAddr' + off_cnt + '" name="oAddr' + off_cnt + '" value="' + oAddr.val()+ '">'+
                    $('#oAddrCity option:selected').text()+', '+oAddr.val()+
                  "</td>" +
                  "<td>" +
                    '<input type="hidden" id="tel_off' + off_cnt + '" name="tel_off' + off_cnt + '" value="' + tel_off.val()+ '">'+
                    '<input type="hidden" id="fax_off' + off_cnt + '" name="fax_off' + off_cnt + '" value="' + fax_off.val()+ '">'+
                    tel_off.val() +
                  "</td>" +
                  "<td>" +
                    '<input type="hidden" id="email_off' + off_cnt + '" name="email_off' + off_cnt + '" value="' + email_off.val()+ '">'+
                    email_off.val() +
                  "</td>" +
                  "<td>" +
                    '<input type="hidden" id="oContactPerson' + off_cnt + '" name="oContactPerson' + off_cnt + '" value="' + oContactPerson.val()+ '">'+
                    '<input type="hidden" id="oOtherContact' + off_cnt + '" name="oOtherContact' + off_cnt + '" value="' + oOtherContact.val()+ '">'+
                    $('#oContactPerson option:selected').text()+
                  "</td>" +
                  "<td>" +
                    '<button type="button" class="btnDelete btn-danger btn-sm" id="del_office'+ off_cnt +'">Изтрий</button>'+
                  "</td>" +
                "</tr>" );

                off_cnt++;

                dialog.dialog( "close" );
              }
              return valid;
            }

              dialog = $( "#add-office" ).dialog({
                autoOpen: false,
                modal: true,
                show: {effect: "blind", duration: 1000},
                hide: {effect: "clip", duration: 1000},
                width: 1200,
                height: 'auto',
                //width: 350,
                //width: $(window).width(),
                //width: $(window).width() * 0.72,

                buttons: {
                  "Добавяне на офис": addOffice,
                  "Изход": function() {
                    dialog.dialog( "close" );
                  }
                },
                close: function() {
                  //form[ 0 ].reset();
                  //if ( form[0] )form[ 0 ].reset();
                  //$("#add-office")[0].reset();
                  //allFields.val( "" );
                  allFields.val( "" ).removeClass( "ui-state-error" );
                }
              });

              form = dialog.find( "#office" ).on( "submit", function( event ) {
                event.preventDefault();
                addOffice();
              });

              $( "#add-new-office" ).button().on( "click", function() {
                //alert(contacts);
                //var myBookId = $(this).data('id');
                // Controls initialization
                $(".modal-body #oCountry").val( 1 );
                $(".modal-body #oAddrRegion").val( 0 );
                $(".modal-body #oAddrMuni").html( '' );
                $(".modal-body #oAddrCity").html( '' );
                $(".modal-body #oAddrCityDistr").html( '' );
                $(".modal-body #mainOffice").prop("checked", 0);
                $(".modal-body #oAddr").val('');
                $(".modal-body #oOtherContact").val('');
                $(".modal-body #tel_off").val('');
                $(".modal-body #fax_off").val('');
                $(".modal-body #email_off").val('');

                //fill the contact persons dropdowns
                //alert(contacts[0].contact);
                $('#oContactPerson').empty();
                if (contacts.length > 0) {
                  for(var i = 0; i< contacts.length; i++){
                    if (i==0) {$('#oContactPerson').append('<option selected="">Моля, изберете</option>')}
                    $('#oContactPerson').append('<option value="' + contacts[i].id +'">' + contacts[i].contact +'</option>');
                  }
                } else {
                  $('#oContactPerson').append('<option selected="">Моля, изберете</option>');
                }
                console.log(contacts);

                dialog.dialog( "open" );
              });
          });

          //Copy management address
          $(".copyAddress").click(function(){
            //Initialization
            var mCountry = $('#mCountry').val();
            var mAddrRegion = $('#mAddrRegion').val();
            var mAddrMuni = $('#mAddrMuni').val();
            var mAddrCity = $('#mAddrCity').val();
            var mAddrCityDistr = $('#mAddrCityDistr').val();
            var mAddr = $('#mAddr').val();

            console.log(mCountry);
            console.log(mAddrRegion);
            console.log(mAddrMuni);
            console.log(mAddrCity);
            console.log(mAddrCityDistr);
            console.log(mAddr);

            document.getElementById('oCountry').value = document.getElementById('mCountry').value;

            if ($("#mCountry :selected").val() !== '1') {
              //alert($("#mCountry :selected").val());
              $("#oAddrRegion1").css('display', 'none');
              $("#oAddrMuni1").css('display', 'none');
              $("#oAddrCity1").css('display', 'none');
              $("#oAddrCityDistr1").css('display', 'none');
            } else {
              $("#oAddrRegion1").css('display', 'block');
              $("#oAddrMuni1").css('display', 'block');
              $("#oAddrCity1").css('display', 'block');
              $("#oAddrCityDistr1").css('display', 'block');
            }

            $("#oAddrRegion").empty();
            $("#oAddrRegion").append($("#mAddrRegion").html());
            $("#oAddrMuni").empty();
            $("#oAddrMuni").append($("#mAddrMuni").html());
            $("#oAddrCity").empty();
            $("#oAddrCity").append($("#mAddrCity").html());

            //Show the district
            //$("#oAddrCityDistr1").css('display', 'block');
            $("#oAddrCityDistr").empty();
            $("#oAddrCityDistr").append($("#mAddrCityDistr").html());


            $("#oAddrRegion :selected").text($("#mAddrRegion :selected").text());
            $("#oAddrRegion :selected").val($("#mAddrRegion :selected").val());
            $("#oAddrMuni :selected").text($("#mAddrMuni :selected").text());
            $("#oAddrMuni :selected").val($("#mAddrMuni :selected").val());
            $("#oAddrCity :selected").text($("#mAddrCity :selected").text());
            $("#oAddrCity :selected").val($("#mAddrCity :selected").val());
            $("#oAddrCityDistr :selected").text($("#mAddrCityDistr :selected").text());
            $("#oAddrCityDistr :selected").val($("#mAddrCityDistr :selected").val());

            document.getElementById('oAddr').value = document.getElementById('mAddr').value;
            $('#oAddr').focus(); //focus on the address
          });

          //Click Delete1
          $("#offices").on('click','.btnDelete',function(){
               // get the current row
               var currentRow=$(this).closest("tr");

               currentRow.html('');

          });

        });
        <!--========================================-->

    </script>
@endsection
