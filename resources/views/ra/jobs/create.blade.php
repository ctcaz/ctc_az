@extends('ra.form')

@section('navigation')
  @include('ra.nav')
@endsection

@section('contents')
  <div class="container-fluid clearfix">
        <div class="content">
            <h2 class="h3 main-heading">Подаване на Свободни работни места</h2>
            <hr>

            <form class="" action="{{route('ra.jobs.store')}}" method="post">
                @csrf

                <div class="form-items">
                  <section>
                    <h3><span class="primary-bgr">Работодател</span></h3>
                    <h6><strong>Име на фирмата</strong><span class="sep-text"></span> Булстат:</h6>
                  </section>

                  <section>
                    <h3><span class="primary-bgr">Работно място</span></h3>

                    <div class="row">
                      <div class="col">
                        <label for="">Длъжност/професия:*</label>
                        <select name="profession_group" id="profession_group" class="form-control">
                          <option>Моля, изберете</option>
                          @foreach ($lvl1 as $firstLvl)
                            <optgroup label="{{$firstLvl->code . ' - ' . $firstLvl->name}}">
                              @foreach ($lvl2 as $secondLvl)
                                @if ($firstLvl->id == $secondLvl->parent_id)
                                  <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;{{$secondLvl->code . ' - ' . $secondLvl->name}}">
                                    @foreach ($lvl3 as $thirdLvl)
                                      @if ($secondLvl->id == $thirdLvl->parent_id)
                                        <option value="{{$thirdLvl->code}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$thirdLvl->code . ' - ' . $thirdLvl->name}}</option>
                                      @endif
                                    @endforeach
                                  </optgroup>
                                @endif
                              @endforeach
                            </optgroup>
                          @endforeach
                        </select>

                        <span class="text-danger">{{ $errors->first('professionspecialty_id') }}</span>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col">
                        <label for="">Специалност:*</label>
                        <select name="prof" id="prof" class="form-control">
                          <option selected="">Моля, изберете</option>
                        </select>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col">
                        <label for="decimalofjobs">Брой работни места (общо):*</label>
                        <input type="number" class="form-control" id="decimalofjobs" name="decimalofjobs" placeholder="">
                        <span class="text-danger">{{ $errors->first('decimalofjobs') }}</span>
                      </div>

                      <div class="col">
                        <label for="">от тях: разкрити за първи път</label>
                        <input type="text" class="form-control" id="decimalofopenjobs" name="decimalofopenjobs">
                      </div>

                      <div class="col">
                        <label for="">Работното място е свободно от:*</label>
                        <p><input class=flatpickr type="text" placeholder="Изберете дата.." name="jobavailablefrom" id="jobavailablefrom"></p>
                      </div>

                      <div class="col">
                        <label for="">Срок на валидност на заявката:*</label>
                        <p><input class=flatpickr type="text" placeholder="Изберете дата.." name="jobvalidityperiod" id="jobvalidityperiod"></p>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col">
                        <label for="mainresponsibilities">Основни отговорности на работника</label>
                        <textarea class="form-control" rows="2" id="mainresponsibilities" name="mainresponsibilities" maxlength="255"></textarea>
                      </div>
                      <div class="col">
                        <label for="extratasks">Допълнителни задачи</label>
                        <textarea class="form-control" rows="2" id="extratasks" name="extratasks" maxlength="255"></textarea>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col">
                        <label for="">Обект на работодателя</label>
                        <select id="" class="form-control">
                          <option selected>Моля, изберете</option>
                          <option>1</option>
                          <option>2</option>
                        </select>
                      </div>
                    </div>
                  </section>

                  <section>
                    <h3><span class="primary-bgr">Общи условия</span></h3>

                    <div class="row">
                      <div class="col">
                        <label class="radio-inline"><input type="radio" name="contracttype">Безсрочен трудов договор</label>
                      </div>
                      <div class="col">
                        <label class="radio-inline"><input type="radio" name="contracttype">Срочен трудов договор</label>
                      </div>
                      <div class="col">
                        <label class="radio-inline"><input type="radio" name="contracttype">Граждански</label>
                      </div>
                      <div class="col">

                      </div>
                    </div>

                    <div class="row">
                      <div class="col">
                        <label for="decimalofjobs">Срок на изпитване (месеци):*</label>
                        <input type="number" class="form-control" id="testperiodinmonths" name="testperiodinmonths" placeholder="">
                      </div>
                      <div class="col">
                        <label for="decimalofjobs">Брой месеци:*</label>
                        <input type="number" class="form-control" id="jobdurationinmonths" name="jobdurationinmonths" placeholder="">
                      </div>
                      <div class="col">

                      </div>
                      <div class="col">

                      </div>
                    </div>

                    <div class="row">
                      <div class="col">
                        <label for="">Работно време *</label>
                        <select id="workregime_id" name="workregime_id" class="form-control">
                          <option value="0">Моля, изберете</option>
                          @foreach ($regimes as $regime)
                            <option value="{{$regime->id}}">{{$regime->name}}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="col">
                        <label for="">Продължителност на работното време (часове)</label>
                        <input type="number" class="form-control" id="workhours" name="workhours">
                      </div>

                      <div class="col">
                        <label for="">Трудово възнаграждение (лв.)</label>
                        <input type="number" class="form-control" id="basemonthlysalaryinbgn" name="basemonthlysalaryinbgn" step=".01">
                      </div>

                    </div>

                    <div class="row">
                      <div class="col">
                        <label for="amountfrom">Допълнителни възнаграждения и социални придобивки</label>
                        <textarea class="form-control" rows="2" id="add_remun_soc_benefits" name="add_remun_soc_benefits" maxlength="255"></textarea>
                      </div>
                      <div class="col">
                        <label for="amountfrom">Други:</label>
                        <textarea class="form-control" rows="2" id="otherconditions" name="otherconditions" maxlength="255"></textarea>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col">
                        <div class="card">
                          <div class="card-header">
                            Работодателят е склонен да наема работници от ЕС и предлага
                          </div>
                          <div class="card-body">
                            <h5 class="card-title">Трудово възнаграждение</h5>

                            <div class="card-block">
                              <div class="row">
                                <div class="col-md-2">
                                  <input type="number" class="form-control" id="amountfrom" name="amountfrom" step=".01">
                                </div>
                                <div class="col-md-0">
                                  до
                                </div>
                                <div class="col-md-2">
                                  <input type="number" class="form-control" id="amountto" name="amountto" step=".01">
                                </div>
                                <div class="col-md-2">
                                  <select name="currency_id" id="currency_id" class="form-control">
                                    <option value="0">Моля, изберете</option>
                                    @foreach ($currencies as $currency)
                                      <option value="{{$currency->id}}">{{$currency->code . ' - ' . $currency->name}}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-3">
                                  <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="trn_coststo_bg_incl" name="trn_coststo_bg_incl">
                                    <label class="form-check-label" for="trn_coststo_bg_incl">Транспортни разходи до България</label>
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-3">
                                  <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="arefoodvouchersincluded" name="arefoodvouchersincluded">
                                    <label class="form-check-label" for="arefoodvouchersincluded">Ваучери за храна</label>
                                  </div>
                                </div>
                              </div>
                            </div>


                          </div>
                        </div>
                      </div>
                    </div>

                  </section>

                  <h2 class="text-left h3">Описание на изискванията за заемане на работното място</h2>

                  <section>
                    <h3><span class="primary-bgr">Основни изисквания</span></h3>

                    <div class="row">
                      <div class="col">
                        <label for="">Степен на образование</label>
                        <select id="education_level" name="education_level" class="form-control">
                          <option value="0">Моля, изберете</option>
                          @foreach ($edu_lvl as $lvl)
                            <option value="{{$lvl->id}}">{{$lvl->name}}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="col">
                        <label for="">Професия / специалност</label>
                        <select id="education_level" name="education_level" class="form-control">
                          <option value="0">Моля, изберете</option>
                          @foreach ($specs as $spec)
                            <option value="{{$spec->id}}">{{$spec->name}}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="col">
                        <label for="">Трудов стаж по специалността</label>
                        <select id="work_experience" name="work_experience" class="form-control">
                          <option value="0">Моля, изберете</option>
                          @foreach ($experiances as $exper)
                            <option value="{{$exper->id}}">{{$exper->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>




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

                  <p class="text-center"><button type="submit" class="btn btn-primary btn-lg">Подай</button> <span class="sep-line "> | </span>  <a href="/" class="btn btn-outline-danger btn-lg">Отказ</a></p>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
  <script type="text/javascript">
    //Date
    $('select[name="jobavailablefrom"]').flatpickr(
      {
        minDate: "today",
        dateFormat: "d-m-Y",
        locale: "bg",
      }
    );

    //Profession
    //Populate the n_professions object based on the selected profession_group
    $('select[name="profession_group"]').on('change', function(){ //listens to changes in "mAddrRegion"
        var prof_id = $(this).val();
        var flag = 1; //initializing the first row flag
        ббconsole.log(prof_id);
        if(prof_id){
            $.ajax({
                url: '/ra/jobs/create/getProf/'+(prof_id), //use the getMuni method from the Controller
                type: 'GET',
                dataType: 'json',
                success: function(data){
                    //empty the prof dropdown
                    console.log(data);
                    $('select[name="prof"]').empty();

                    $.each(data, function(key, value){
                        //Populate
                        if (flag === 1){
                          flag = 2;
                          $('select[name="prof"]').append('<option value="">'+ 'Моля, изберете' + '</option>');
                          $('select[name="prof"]').append('<option value="'+key+'">'+ key + '  '+ value + '</option>');
                        }else{
                          $('select[name="prof"]').append('<option value="'+key+'">'+ key + '  '+ value + '</option>');
                        }
                    });
                }
            });
        } else {
            //If nothing was selected - empty the dropdown
            $('select[name="prof"]').empty();
        }
    });


</script>

@endsection
