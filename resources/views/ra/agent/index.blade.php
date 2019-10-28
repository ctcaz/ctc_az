@extends('ra.form')

@section('navigation')
  @include('ra.nav')
@endsection

@section('contents')
  <main role="main">
    <div class="container-fluid clearfix">
        <div class="content">
          <h2 class="h3 main-heading">Профил на ЧТП</h2>

          <div class="form-items">
              <section>
                  <h3><span class="primary-bgr">Данни за юридическо лице</span></h3>
                  <h6><strong>Вид Юридическо лице:</strong> с регистрация в България</h6>
                  <div class="row">
                    <div class="col">
                      <label for="">ЕИК/БУЛСТАТ:*</label>
                      <input type="text" class="form-control" id="">
                    </div>
                    <div class="col">
                      <label for="inputCity">Наименование:*</label>
                      <input type="text" class="form-control" id="">
                    </div>
                    <div class="col">
                      <label for="">Вид на фирмата:</label>
                      <select id="" class="form-control">
                        <option selected>Моля, изберете</option>
                        <option>ЕООД</option>
                        <option>ООД</option>
                        <option>ЕАД</option>
                        <option>АД</option>
                        <option>ЕТ</option>
                      </select>
                    </div>
                  </div>
              </section>

              <section>
                  <h3><span class="primary-bgr">Лица, представители на посредника</span></h3>
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
              </section>

              <section>
                  <h3><span class="primary-bgr">Адреси за контакти</span></h3>
                  <h6><strong>Адрес на управление</strong></h6>

                  <div class="row">
                    <div class="col">
                      <label for="">Държава:*</label>
                      <select id="" class="form-control">
                        <option selected>Моля, изберете</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                      </select>
                    </div>
                    <div class="col">
                      <label for="">Област:*</label>
                      <select id="" class="form-control">
                        <option selected>Моля, изберете</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                      </select>
                    </div>
                    <div class="col">
                      <label for="">Община:*</label>
                      <select id="" class="form-control">
                        <option selected>Моля, изберете</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                      </select>
                    </div>
                    <div class="col">
                      <label for="">Населено място:*</label>
                      <select id="" class="form-control">
                        <option selected>Моля, изберете</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                      </select>
                    </div>
                    <div class="col">
                      <label for="">Район:*</label>
                      <select id="" class="form-control">
                        <option selected>Моля, изберете</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
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
                        <option selected>Моля, изберете</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                      </select>
                    </div>
                    <div class="col">
                      <label for="">Област:*</label>
                      <select id="" class="form-control">
                        <option selected>Моля, изберете</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                      </select>
                    </div>
                    <div class="col">
                      <label for="">Община:*</label>
                      <select id="" class="form-control">
                        <option selected>Моля, изберете</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                      </select>
                    </div>
                    <div class="col">
                      <label for="">Населено място:*</label>
                      <select id="" class="form-control">
                        <option selected>Моля, изберете</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                      </select>
                    </div>
                    <div class="col">
                      <label for="">Район:*</label>
                      <select id="" class="form-control">
                        <option selected>Моля, изберете</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
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
              </section>

              <section>
                  <h3><span class="primary-bgr">Териториален обхват</span></h3>
                  <h6><strong>За Република България:</strong><span class="sep-line "> | </span> Статус: Активна</h6>

                  <div class="row">
                      <div class="col">
                        <label for="">Номер на удостоверение:</label>
                        <input type="text" class="form-control" id="">
                      </div>
                      <div class="col">
                        <label for="inputCity">Дата на удостоверение:</label>
                        <input type="text" class="form-control" id="">
                      </div>
                      <div class="col">
                        <label for="">Срок на валидност:</label>
                        <input type="text" class="form-control" id="">
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
          </section>
          </div>

        </div>
    </div>

  </main>

@endsection
