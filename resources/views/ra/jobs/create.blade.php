@extends('ra.form')

@section('navigation')
  @include('ra.nav')
@endsection

@section('contents')
  <main role="main">
    <div class="container-fluid clearfix">
        <div class="content">
            <h2 class="h3 main-heading">Подаване на Свободни работни места</h2>

              <hr>
              <div class="form-items">
                <section>
                    <h3><span class="primary-bgr">Работодател</span></h3>
                    <h6><strong>Име на фирмата</strong><span class="sep-text"></span> Булстат:</h6>
                </section>
                <section>
                  <h3><span class="primary-bgr">Работно място</span></h3>
                  <div class="row">
                    <div class="col">
                        <label for="">Длъжност:*</label>
                        <input type="text" class="form-control" id="">
                    </div>
                      <div class="col">
                        <label for="">Категория труд:</label>
                        <select id="" class="form-control">
                          <option selected>Моля, изберете</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                        </select>
                      </div>
                      <div class="col">
                        <label for="">Свободно от дата:*</label>
                        <input type="text" class="form-control" id="">
                      </div>
                  </div>
                  <div class="row">
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="">
                            <label class="form-check-label" for="">Сезонна заетост</label>
                        </div>
                    </div>
                      <div class="col">
                        <label for="">Брой места:*</label>
                        <input type="text" class="form-control" id="" placeholder="">
                      </div>
                      <div class="col">
                        <label for="">За първи път</label>
                        <input type="text" class="form-control" id="" placeholder="">
                      </div>
                      <div class="col">
                        <label for="">Социално подпомагане</label>
                        <input type="text" class="form-control" id="" placeholder="">
                      </div>
                  </div>
                  <div class="row">
                    <div class="col">
                        <label for="">Основни отговорности на работника</label>
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                        <label for="">Допълнителни задачи</label>
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                  </div>
                  <div class="row">
                      <div class="col">
                          <label for="">Трудово възнаграждение (лв.)</label>
                          <input type="text" class="form-control" id="" placeholder="">
                      </div>
                      <div class="col">
                        <label for="">Трудово възнаграждение (валута)</label>
                        <input type="text" class="form-control" id="" placeholder="">
                      </div>
                      <div class="col-md-2">
                          <label for="">&nbsp;</label>
                          <select id="" class="form-control">
                              <option selected>Валута</option>
                              <option>USD</option>
                              <option>EUR</option>
                          </select>
                        </div>
                    </div>
                </section>
                <section>
                  <h3><span class="primary-bgr">Общи условия</span></h3>
                  <div class="row">
                    <div class="col">
                        <label for="">Работно време *</label>
                          <select id="" class="form-control">
                            <option selected>Моля, изберете</option>
                            <option>Пълно</option>
                            <option>Непълно</option>
                          </select>
                    </div>
                    <div class="col">
                      <label for="">Начин на работа *</label>
                        <select id="" class="form-control">
                          <option selected>Моля, изберете</option>
                          <option>1</option>
                          <option>2</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="">Обект на работодателя</label>
                          <select id="" class="form-control">
                            <option selected>Моля, изберете</option>
                            <option>1</option>
                            <option>2</option>
                          </select>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col">
                        <label for="">Пол</label>
                        <select id="" class="form-control">
                            <option selected>Моля, изберете</option>
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </div>
                    <div class="col">
                      <label for="">Подходящо за *</label>
                      <select id="" class="form-control">
                          <option selected>Моля, изберете</option>
                          <option>1</option>
                          <option>2</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="">Възраст</label>
                          <input type="text" class="form-control" id="" placeholder="От - до">
                      </div>
                  </div>
                  <em>Забележка: Пол и възраст могат да се въвеждат само при спазване на чл. 7 от Закона за защита от дискриминация, чл.2 и чл. 23 от ЗНЗ</em>
                </section>
                <section>
                    <h3><span class="primary-bgr">Начин на кандидатстване</span></h3>
                    <div class="row">
                      <div class="col">
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="c-1">
                              <label class="form-check-label" for="c-1">Чрез ТП</label>
                          </div>
                      </div>
                        <div class="col">
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="c-2">
                              <label class="form-check-label" for="c-2">Свободно</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="c-3">
                              <label class="form-check-label" for="c-3">Косвено</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="c-4">
                              <label class="form-check-label" for="c-4">Друг</label>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                          <div class="col">
                              <label for="">Пояснения, ако сте отбелязали (Друг):</label>
                              <input type="text" class="form-control" id="">
                          </div>
                      </div>
                  </section>
                <section>
                    <h3><span class="primary-bgr">Начин на кандидатстване по линия на EURES</span></h3>
                    <div class="row">
                        <div class="col">
                            <label for="">Начин:</label>
                            <select id="" class="form-control">
                              <option selected>Моля, изберете</option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="">Пояснения</label>
                            <input type="text" class="form-control" id="" placeholder="">
                          </div>
                      </div>
                  </section>
                  <section>
                    <h3><span class="primary-bgr">Условия за наемане</span></h3>
                      <div class="row">
                        <div class="col-md-2">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline1">Срочно</label>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline2">Безсрочно</label>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-top: -.5em;">
                        <label for="">Брой месеци:*</label>
                        <input type="text" class="form-control" id="" placeholder="" style="display: inline-block; width: auto;">
                      </div>
                      </div>
                  </section>
                  <section>
                    <h3><span class="primary-bgr">Процедура по селекция и подбор</span></h3>
                      <div class="row">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="r-1" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label" for="r-1">Директно насочване и ТРЛ към работодателя</label>
                          </div>
                      </div>
                      <div class="row">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="r-2" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label" for="r-2">Предоставяне на списък с подходящи ТРЛ от ТП на работодателя</label>
                          </div>
                      </div>
                      <div class="row">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="r-3" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label" for="r-3">Първоначална селекция по документи от ТП</label>
                          </div>
                      </div>
                      <div class="row">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="r-4" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label" for="r-4">Подбор чрез събеседване с ТП (интервю)</label>
                          </div>
                      </div>
                      <div class="row">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="r-5" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label" for="r-5">Директно кандидатстване с документи</label>
                          </div>
                      </div>
                  </section>
              </div>
        </div>
    </div>
  </main>
@endsection
