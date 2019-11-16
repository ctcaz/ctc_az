<?php
/*File:	resources\views\powr_regreq.blade.blade.php
		 Ver:	1.00.004
 Purpose:	POWR Regisrate Request for content blade
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
*/?>

@extends('layouts.prr')

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
	    	<h2 class="text-center h3">Информационно-комуникационна платформа <br><small class="h5 text-secondary">частни трудови посредници и предприятия осигуряващи временна работа</small></h2>
        <hr>
        <h2 class="h3 main-heading">Регистрация на ПОВР (Предприятие осигуряващо временна работа)</h2>

      <form class="" action="{{route('powr_regreq.store')}}" method="post">

          @csrf

	<div class="form-items">
		
                <section>
                	<h3><span class="primary-bgr">Данни за заявител</span></h3>
                      <div class="row">
                        <div class="col">
                          <label for="">Име: *</label>
												
	<input type="text" class="form-control" id="applicantFirstName" name="applicantFirstName"   value="{{ old('name') }}">

                        </div>
                        <div class="col">
                          <label for="">Презиме:</label>
                          <input type="text" class="form-control" id="applicantSecondName" name="applicantSecondName">
                        </div>
                        <div class="col">
                          <label for="">Фамилия: *</label>
                          <input type="text" class="form-control" id="applicantLastName" name="applicantLastName">
                        </div>
                      </div>
                      <div class="row">
                      	<div class="col">
                        	<div class="col-25">
                            	<div class="form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="applicantLnchFlag" name="applicantLnchFlag" value="1">
                                  <label class="form-check-label" for="inlineCheckbox1">ЛНЧ</label>
                                </div>
                            </div>
                            <div class="col-75">
                            	<label for="">ЕГН/ЛНЧ: *</label>
                            	<input type="text" class="form-control" id="applicantEgnLnch" name="applicantEgnLnch">
                            </div>
                        </div>
                        <div class="col">
                        	<label for="">Email: *</label>
                            <input type="text" class="form-control" id="applicantEmail" name="applicantEmail">
                        </div>
                        <div class="col">
                        	<label for="">Длъжност: *</label>
                            <input type="text" class="form-control" id="applicantPosition" name="applicantPosition">
                        </div>
                      </div>
                </section>
                <section>
                	<h3><span class="primary-bgr">Данни за юридическо лице</span></h3>
                    <h6><strong>Вид Юридическо лице:</strong></h6>
                    <div class="row">
                    	<div class="form-check form-check-inline">
                 <input class="form-check-input" type="radio" name="inlineRadioOptions" id="legalEntityRegisteredBG"  name="legalEntityRegisteredBG"    value="legalEntityRegisteredBG_SET">
                          <label class="form-check-label" for="inlineRadio1">с регистрация в България</label>
                        </div>
                        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="legalEntityRegisteredAbroad" name= "legalEntityRegisteredAbroad"   value="legalEntityRegisteredAbroad_SET">
                          <label class="form-check-label" for="inlineRadio2">с регистрация в друга държава</label>
                        </div>
                    </div>

                      <div class="row">
                        <div class="col">
                          <label for="">ЕИК/БУЛСТАТ:*</label>
                          <input type="text" class="form-control" id="legalEntityUicBulstat" name="legalEntityUicBulstat"  >
                        </div>
                        <div class="col">
                          <label for="inputCity">Наименование:*</label>
                          <input type="text" class="form-control" id="legalEntityName"  name="legalEntityName" >
                        </div>
                        <div class="col">
                          <label for="">Вид на фирмата:</label>
                          <select id="legalEntityType"    name="legalEntityType"  class="form-control">
                            <option selected="">Моля, изберете</option>
			
                                                    <option value="-999">
                              Търговец публично предприятие
                            </option>
                                                    <option value="-2">
                              Физическо лице
                            </option>
                                                    <option value="-1">
                              ЕАДСИЦ
                            </option>
                                                    <option value="455">
                              СД
                            </option>
                                                    <option value="456">
                              ООД
                            </option>
                                                    <option value="457">
                              ЕООД
                            </option>
                                                    <option value="458">
                              АД
                            </option>
                                                    <option value="459">
                              ЕАД
                            </option>
                                                    <option value="460">
                              КД
                            </option>
                                                    <option value="461">
                              КДА
                            </option>
                                                    <option value="462">
                              ЕТ
                            </option>
                                                    <option value="463">
                              ДФ
                            </option>
                                                    <option value="464">
                              ОФ
                            </option>
                                                    <option value="465">
                              ДщФ
                            </option>
                                                    <option value="466">
                              Кооперация
                            </option>
                                                    <option value="467">
                              Кооперативен съюз
                            </option>
                                                    <option value="468">
                              Кооперативна федерация
                            </option>
                                                    <option value="469">
                              Кооперативно предприятие
                            </option>
                                                    <option value="470">
                              Междукооперативно предприятие
                            </option>
                                                    <option value="471">
                              ЖСК
                            </option>
                                                    <option value="472">
                              ДЗЗД
                            </option>
                                                    <option value="473">
                              Предприятие (по ПМС 50/68)
                            </option>
                                                    <option value="474">
                              Публ. предпр., създ. с спец закон
                            </option>
                                                    <option value="475">
                              Клон на чуждестранно лице
                            </option>
                                                    <option value="476">
                              ТП
                            </option>
                                                    <option value="477">
                              Представителство на межд. организ.
                            </option>
                                                    <option value="478">
                              Дипломатическо представителство
                            </option>
                                                    <option value="479">
                              Консулско представителство
                            </option>
                                                    <option value="480">
                              Представит. на чужд. радио/телев.
                            </option>
                                                    <option value="481">
                              Представителство на чуждестр. АП
                            </option>
                                                    <option value="482">
                              Представит. на чужд. авиокомпания
                            </option>
                                                    <option value="483">
                              Представит. на друго чуждестр.лице
                            </option>
                                                    <option value="484">
                              Културен център на друга държава
                            </option>
                                                    <option value="485">
                              Фондация
                            </option>
                                                    <option value="486">
                              Сдружение
                            </option>
                                                    <option value="487">
                              Синдикална организация
                            </option>
                                                    <option value="488">
                              Народно читалище
                            </option>
                                                    <option value="489">
                              Политическа организация
                            </option>
                                                    <option value="490">
                              Религиозна организация
                            </option>
                                                    <option value="491">
                              Адвокатска колегия
                            </option>
                                                    <option value="492">
                              Нотариална камара
                            </option>
                                                    <option value="493">
                              Неправит.орг.,създ.с нарочно основ.
                            </option>
                                                    <option value="494">
                              Администрация на президента на РБ
                            </option>
                                                    <option value="495">
                              Народно събрание
                            </option>
                                                    <option value="496">
                              Институция, създ. със спец. закон
                            </option>
                                                    <option value="497">
                              Министерски съвет
                            </option>
                                                    <option value="498">
                              Министерство
                            </option>
                                                    <option value="499">
                              Комитет
                            </option>
                                                    <option value="500">
                              Агенция
                            </option>
                                                    <option value="502">
                              Съд
                            </option>
                                                    <option value="503">
                              Прокуратура
                            </option>
                                                    <option value="504">
                              Следствена служба
                            </option>
                                                    <option value="505">
                              община
                            </option>
                                                    <option value="506">
                              Кметство
                            </option>
                                                    <option value="507">
                              Театър
                            </option>
                                                    <option value="508">
                              Опера
                            </option>
                                                    <option value="509">
                              Музей, галерия
                            </option>
                                                    <option value="510">
                              Филхармония
                            </option>
                                                    <option value="511">
                              Ансамбъл
                            </option>
                                                    <option value="512">
                              Цирк
                            </option>
                                                    <option value="514">
                              Библиотека
                            </option>
                                                    <option value="515">
                              Научна организация
                            </option>
                                                    <option value="516">
                              Научен институт
                            </option>
                                                    <option value="517">
                              Висше училище
                            </option>
                                                    <option value="518">
                              Организация в състава на ВУ
                            </option>
                                                    <option value="519">
                              Колеж извън състава на ВУ
                            </option>
                                                    <option value="520">
                              Колеж в състава на ВУ
                            </option>
                                                    <option value="521">
                              Училище
                            </option>
                                                    <option value="522">
                              Детска градина
                            </option>
                                                    <option value="523">
                              Амбулаторно-поликл. заведение
                            </option>
                                                    <option value="524">
                              Болнично заведение
                            </option>
                                                    <option value="525">
                              Диспансер
                            </option>
                                                    <option value="526">
                              Завед.за опазв.здр. на майка и дете
                            </option>
                                                    <option value="527">
                              Нац. център.за опазв. на общ. здраве
                            </option>
                                                    <option value="528">
                              Сaнaт.-курортно и леч.-оздрав. завед.
                            </option>
                                                    <option value="529">
                              клон
                            </option>
                                                    <option value="530">
                              поделение
                            </option>
                                                    <option value="531">
                              ОП
                            </option>
                                                    <option value="532">
                              Физическо лице - субект на Булстат
                            </option>
                                                    <option value="533">
                              ЮЛ в сферата на държ. власт
                            </option>
                                                    <option value="534">
                              Друг вид субект
                            </option>
                                                    <option value="535">
                              чуждестранно нефизическо лице
                            </option>
                                                    <option value="536">
                              друго нефиз. лице без право на ЕИК
                            </option>
                                                    <option value="1003">
                              централна банка
                            </option>
                                                    <option value="1185">
                              ДСК
                            </option>
                                                    <option value="1186">
                              ДЗИ
                            </option>
                                                    <option value="1187">
                              Областна администрация
                            </option>
                                                    <option value="1188">
                              Полувисш институт
                            </option>
                                                    <option value="1189">
                              Място за лишаване от свобода
                            </option>
                                                    <option value="1190">
                              Взаимноспомагателна каса
                            </option>
                                                    <option value="1191">
                              Юр. лице към културна институция
                            </option>
                                                    <option value="1192">
                              Юрид. лице към научна орг.
                            </option>
                                                    <option value="1193">
                              Обсл.звено в с-мата на образов.
                            </option>
                                                    <option value="1200">
                              Районна колегия
                            </option>
                                                    <option value="1215">
                              Национална здравно-осигурителна каса
                            </option>
                                                    <option value="1216">
                              Държавна агенция
                            </option>
                                                    <option value="1217">
                              Държавна комисия
                            </option>
                                                    <option value="1218">
                              Изпълнителна агенция
                            </option>
                                                    <option value="1219">
                              Лечебно завед. за извънболн.помощ
                            </option>
                                                    <option value="1220">
                              Лечебно заведение за болнична помощ
                            </option>
                                                    <option value="1221">
                              Друго лечебно заведение
                            </option>
                                                    <option value="1222">
                              Хигиенно-епидемиологична инспекция
                            </option>
                                                    <option value="1223">
                              Културен институт
                            </option>
                                                    <option value="1234">
                              Чужд. НФЛ с място на стоп. дейност
                            </option>
                                                    <option value="1235">
                              Чужд. ФЛ с място на стоп. дейност
                            </option>
                                                    <option value="1249">
                              Чужд. нефизическо лице - наемодател
                            </option>
                                                    <option value="1300">
                              Пенсионен фонд
                            </option>
                                                    <option value="1307">
                              Клон на ЧЮЛ с нестопанска цел
                            </option>
                                                    <option value="1317">
                              Сдружение за напояване
                            </option>
                                                    <option value="1322">
                              Фирма на обществена организация
                            </option>
                                                    <option value="1324">
                              държавно предприятие (чл.62,ал.3 от ТЗ)
                            </option>
                                                    <option value="1329">
                              ЧЮЛ, притежаващо имущество в страната
                            </option>
                                                    <option value="1342">
                              религиозна институция
                            </option>
                                                    <option value="1348">
                              Местно поделение (ЮЛ)
                            </option>
                                                    <option value="1509">
                              Занаятчийско предприятие
                            </option>
                                                    <option value="1515">
                              Религиозна институция (БПЦ)
                            </option>
                                                    <option value="1516">
                              Местно поделение на БПЦ (ЮЛ)
                            </option>
                                                    <option value="1533">
                              Адвокатско дружество
                            </option>
                                                    <option value="1534">
                              Адвокатско съдружие
                            </option>
                                                    <option value="1537">
                              Компенсационен фонд
                            </option>
                                                    <option value="1540">
                              АДСИЦ
                            </option>
                                                    <option value="1559">
                              Договорен фонд
                            </option>
                                                    <option value="1566">
                              ЧЮЛ с ефективно управление
                            </option>
                                                    <option value="1575">
                              Нефизическо лице - осигурител
                            </option>
                                                    <option value="1579">
                              Чуждестр. лице регистрирано по ЗДДС
                            </option>

			  </select>
                        </div>
                      </div>
                      <div class="row">
                      	<div class="col-md-4">
                        	<label for="">Идентификационен номер на удостоверението за вписване в регистъра по чл. 10, ал. 1, т. 2 ЗЗЛД:</label>
                          	<input type="text" class="form-control" id="legalEntityZzldcode" name="legalEntityZzldcode">
                        </div>
                      </div>
                </section>
                <section>
                	<h3><span class="primary-bgr">Адреси за контакти</span></h3>
                    <h6><strong>Адрес на управление</strong></h6>

                      <div class="row">
                        <div class="col">

													<label for="mAddrCountry">Държава:*</label>
													<select name="mAddrCountry" id="mAddrCountry" class="form-control">
														<!--<option selected="">Моля, изберете</option>-->
														@foreach ($countries as $country)
															<option value="{{ $country->id }}" {{ ( $country->id == 1) ? 'selected' : '' }}>
																	{{ $country->name }}
															</option>
														@endforeach
													</select>


                        </div>
                        <div class="col">
                          <label for="mAddrRegion">Област:*</label>
                          <select name="mAddrRegion" id="mAddrRegion" class="form-control">
                            <option selected="">Моля, изберете</option>
                            @foreach ($regions as $key => $value)
                                <option value="{{ $key }}">
                                    {{$value}}
                                </option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col">
                      <label for="">Община:*</label>
                      <select name="mAddrMuni" id="mAddrMuni" class="form-control">
                          <option selected="">Моля, изберете</option>

                      </select>
                        </div>
                        <div class="col">
													<label for="">Населено място:*</label>
													<select name="mAddrCity" id="mAddrCity" class="form-control">
														<option selected="">Моля, изберете</option>

                      </select>
                        </div>
                        <div class="col">
                          <label for="mAddrCityDistr">Район:*</label>
													<select name="mAddrCityDistr" id="mAddrCityDistr" class="form-control">
														<option selected="">Моля, изберете</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="mAddr">Адрес:*</label>
                        <input type="text" class="form-control" name="mAddr" id="mAddr" placeholder="">
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
                          <label for="cAddrCountry">Държава:*</label>
                          <select id="cAddrCountry" name="cAddrCountry" class="form-control">
														<!--<option selected="">Моля, изберете</option>-->
														@foreach ($countries as $country)
															<option value="{{ $country->id }}" {{ ( $country->id == 1) ? 'selected' : '' }}>
																	{{ $country->name }}
															</option>
														@endforeach
                          </select>
                        </div>
                        <div class="col">
                          <label for="">Област:*</label>
                          <select id="cAddrRegion" name="cAddrRegion" class="form-control">
                            <option selected="" value="0">Моля, изберете</option>
                            @foreach ($regions as $key => $value)
                                <option value="{{ $key }}">
                                    {{$value}}
                                </option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col">
                          <label for="">Община:*</label>
													<select name="cAddrMuni" id="cAddrMuni" class="form-control">
														<option selected="">Моля, изберете</option>

                          </select>
                        </div>
                        <div class="col">
													<label for="">Населено място:*</label>
													<select name="cAddrCity" id="cAddrCity" class="form-control">
														<option selected="">Моля, изберете</option>

                          </select>
                        </div>
                        <div class="col">
                          <label for="">Район:*</label>
													<select name="cAddrCityDistr" id="cAddrCityDistr" class="form-control">
														<option selected="">Моля, изберете</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="cAddr">Адрес:*</label>
                        <input type="text" class="form-control" name="cAddr" id="cAddr" placeholder="">
                      </div>

                      <h6 class="mt-4"><strong>Адрес на офиса/офисите за извършване на дейност по осигуряване на временна работа</strong></h6>
		    
		

		     <table id="offices" name="offices" class="table">
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
                          <td>София, ул.Братя Миладинови 16, ет.1, офис 2</td>
                          <td>0884777372</td>
                          <td>office@ctc.bg</td>
                          <td>Боряна Андонова</td>
                        </tr>
                      </tbody>
                    </table>
                    <!--<p><a data-fancybox="" data-src="#add-office" href="javascript:;" class="btn btn-primary" id="add-new-office">Добави</a></p>-->
                    <p><a data-fancybox="" data-src="#add-office" href="javascript:void(0);" class="btn btn-primary" id="add-new-office">Добави</a></p>
                    <!--<p><a data-fancybox="" class="btn btn-primary" id="add-new-office">Добави</a></p>-->
                    <br>


                    <div id="add-office" title="Добавяне на нов офис" style="display: none">
                      <p class="validateTips">Всички полета са задължителни.</p>

                      <form>
                        <fieldset>
			<!--  <label for="address">Адрес</label>-->



			  <label for="tel_fax">Държава</label>

<select  type="text" name="oaCountry" id="oaCountry" value="" class="text ui-widget-content ui-corner-all">
			 

				 <option value="1"  selected>България</option>
</select>


			  <label for="tel_fax">Регион</label>
 <select name="oaRegion" id="oaRegion" value="" class="text ui-widget-content ui-corner-all">
			  

				 <option value="" disabled selected> Моля, изберете</option>
</select>


			  <label for="tel_fax">Община</label>
			<select name="oaMunicipality" id="oaMunicipality" value="" class="text ui-widget-content ui-corner-all" >


				 <option value="" disabled selected> Моля, изберете</option>   
				</select>

			  <label for="tel_fax">Населено място</label>
				<select name="oaCity" id="oaCity" value="" class="text ui-widget-content ui-corner-all" >

				 <option value="" disabled selected> Моля, изберете</option>   
				</select>
			 
			

			  <label for="tel_fax">Квартал</label>
				 <select name="oaDistrict" id="oaDistrict" value="" class="text ui-widget-content ui-corner-all" >
                                 <option value="-9999" disabled selected> Моля, изберете</option>
                                </select>


<br>
			  
			  
			  <label for="tel_fax">Адрес</label>
                          <input type="text" name="oaStreet" id="oaStreet" value="" class="text ui-widget-content ui-corner-all">


			  <label for="tel_fax">Телефон,Факс</label>
                          <input type="text" name="tel_fax" id="tel_fax" value="" class="text ui-widget-content ui-corner-all">
                          <label for="email">Email</label>
                          <input type="text" name="email" id="email" value="" class="text ui-widget-content ui-corner-all">
                          <label for="name">Лице за контакт</label>
                          <input type="text" name="name" id="name" value="" class="text ui-widget-content ui-corner-all">

                          <!-- Allow form submission with keyboard without duplicating the dialog button -->
                          <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
                        </fieldset>
                      </form>
                    </div>



                </section>

		<section >
			<div id="formpage_2"  style="visibility: hidden; display: none;">

                        <input type="text" class="form-control" name="cAddr12" id="cAddr12" placeholder="aaa">

				<textarea  name="addedOffices" id="addedOffices">
				</textarea>

			</div>
		</section>

              <p class="text-center"><button type="submit" class="btn btn-primary btn-lg">Запази/Подай</button> <span class="sep-line "> | </span>  <a href="/" class="btn btn-outline-danger btn-lg">Отказ</a></p>

            </div>




      </form>
  </div>
  <div>
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

		//TODO add here add-new-office event click handler
	    $('a[id="add-new-office"]').on('click', function(){
		    //console.log('');
<?php
$tmpr = \App\Models\Nom\N_region::getRegions();
$tmpr = implode($tmpr);
?>
			
var regions = {!! json_encode($tmpr) !!};
$("#oaRegion").empty();

$("#oaRegion").append('<option value="" disabled selected> Моля, изберете</option>');
$("#oaRegion").append(regions);


$("#oaMunicipality").empty();

$("#oaMunicipality").append('<option value="" disabled selected> Моля, изберете</option>');
$("#oaCity").empty();

$("#oaCity").append('<option value="" disabled selected> Моля, изберете</option>');

$("#oaDistrict").empty();

$("#oaDistrict").append('<option value="-9999" disabled selected> Моля, изберете</option>');


//TPDP add jere ozneret
 });



//////////////////////////////////////////////////////////////////
 $('#oaRegion').on('click', function(){
	 $("#oaMunicipality").empty();
		 
$("#oaMunicipality").append('<option value="" disabled selected> Моля, изберете</option>');
         $("#oaCity").empty();

$("#oaCity").append('<option value="" disabled selected> Моля, изберете</option>');

$("#oaDistrict").empty();

$("#oaDistrict").append('<option value="-9999" disabled selected> Моля, изберете</option>');




<?php
$tmpm = \App\Models\Nom\N_municipality::getMunicipalities();
//$tmpr = implode($tmpr);
?>

var muns = {!! json_encode($tmpm) !!};
//console.log(typeof(muns));

var selectedreg = $("#oaRegion").find(":selected").val();
//console.log(selectedreg);
muns.forEach(element => {
var pos = element.indexOf('<');
var reg = element.substring(0, element.indexOf('<'));
var rest = element.substring(pos);


//console.log(reg);
//console.log("-------");
if(selectedreg === reg){

	
$("#oaMunicipality").append(rest);

	}

});
     });

///////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////
 $('#oaMunicipality').on('click', function(){

         $("#oaCity").empty();
$("#oaCity").append('<option value="" disabled selected> Моля, изберете</option>');




	 
	 $("#oaDistrict").empty();

$("#oaDistrict").append('<option value="-9999" disabled selected> Моля, изберете</option>');


<?php
$tmpm = \App\Models\Nom\N_city::getCity();
//$tmpr = implode($tmpr);
?>

var city = {!! json_encode($tmpm) !!};
//console.log(typeof(city));

var selectedreg = $("#oaMunicipality").find(":selected").val();
//console.log(selectedreg);
city.forEach(element => {
var pos = element.indexOf('<');
var reg = element.substring(0, element.indexOf('<'));
var rest = element.substring(pos);


//console.log(reg);
//console.log("-------");
if(selectedreg === reg){


$("#oaCity").append(rest);

        }

});
     });

///////////////////////////////

//////////////////////////////////////////////////////////////////
 $('#oaCity').on('click', function(){

         $("#oaDistrict").empty();
$("#oaDistrict").append('<option value="-9999" disabled selected> Моля, изберете</option>');







<?php
$tmpm = \App\Models\Nom\N_city::getCityWithParent();
//$tmpr = implode($tmpr);
?>

var citywp = {!! json_encode($tmpm) !!};
//console.log(typeof(city));

var selectedcity = $("#oaCity").find(":selected").val();
//console.log(selectedreg);
citywp.forEach(element => {
var pos = element.indexOf('<');
var par = element.substring(0, element.indexOf('<'));
var rest = element.substring(pos);


//console.log(reg);
//console.log("-------");
if(selectedcity === par){


$("#oaDistrict").append(rest);

        }

});
     });

///////////////////////////////





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
								//alert("Yes");
								//$('#mAddrRegion option').clone().appendTo('#cAddrRegion');
								//$("#cAddrRegion").html($("#mAddrRegion").html());
                $("#cAddrRegion").empty();
								$("#cAddrRegion").append($("#mAddrRegion").html());
                $("#cAddrMuni").empty();
								$("#cAddrMuni").append($("#mAddrMuni").html());
                $("#cAddrCity").empty();
								$("#cAddrCity").append($("#mAddrCity").html());
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
		$("#cAddr").val( $("#mAddr").val());

							//	document.getElementById('cAddr').value = document.getElementById('mAddr').value;


								//alert($val+" := "+$txt);
								//$('#cAddrRegion').val('33');
								//$('#cAddrRegion').val($val);
							} else {
								//alert("No");
							}
							//alert(document.querySelector('#c_as_m').checked);
							//alert(document.querySelector('#cAddrRegion').value);
							/*
							if(document.querySelector('#c_as_m').checked) == true) {
								//$('#select1 option').clone().appendTo('#select2');
								//$('#mAddrRegion option').clone().appendTo('#cAddrRegion');
							}
							*/

						});

            <!--========================================-->
            $(document).ready(function() {
            	$( function() {
            		var dialog, form,

            			// From http://www.whatwg.org/specs/web-apps/current-work/multipage/states-of-the-type-attribute.html#e-mail-state-%28type=email%29
            			emailRegex = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/,
		   
				//TODO: add here all the address fieds
				country=$("#oaCountry"),
				region=$("#oaRegion"),
				municipality=$("#oaMunicipality"),
				city = $("#oaCity"),
				district = $("#oaDistrict"),
	
				address = $("#oaStreet"),//$( "#oaCountry" ).$("#oaRegion")   ,
            			email = $( "#email" ),
            			tel_fax = $( "#tel_fax" ),
                  		name = $( "#name" ),
				allFields = $([])
			//	.add( address )
				.add( email ).add( tel_fax ).add( name ),
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

                  valid = valid && checkLength( address, "Адрес", 3, 255 );
            			valid = valid && checkLength( email, "Email", 6, 80 );
            			valid = valid && checkLength( tel_fax, "Телефон,Факс", 5, 16 );
                  valid = valid && checkLength( name, "Лице за контакт", 3, 35 );

            			//valid = valid && checkRegexp( address, /^[a-z]([0-9a-z_\s])+$/i, "Адресът може да съдържа символите a-z, 0-9, underscores, spaces and must begin with a letter." );
            			valid = valid && checkRegexp( email, emailRegex, "eg. ui@jquery.com" );
            			valid = valid && checkRegexp( tel_fax, /^([0-9])+$/, "Телефонният номер може да съдържа само цифри : 0-9" );
                  //valid = valid && checkRegexp( name, /^[a-z]([0-9a-z_\s])+$/i, "Username may consist of a-z, 0-9, underscores, spaces and must begin with a letter." );

            			if ( valid ) {
            				$( "#offices tbody" ).append( "<tr>" +
                      "<td>" + address.val() + "</td>" +
            					"<td>" + tel_fax.val() + "</td>" +
                      "<td>" + email.val() + "</td>" +
                      "<td>" + name.val() + "</td>" +

		      "</tr>" );


$("#addedOffices").val($("#addedOffices").val()+ 
country.val() + "|"+region.val() + "|" + municipality.val()+"|"+city.val()+"|"+ district.val()+

"|"+address.val() + "|" + email.val()  + "|" + tel_fax.val()+"|"+name.val() +"*" );	

dialog.dialog( "close" );
            			}
            			return valid;
            		}

            		dialog = $( "#add-office" ).dialog({
            			autoOpen: false,
                  show: {effect: "blind", duration: 1000},
                  hide: {effect: "clip", duration: 1000},
            			height: 200,
            			//width: 350,
                  //width: $(window).width(),
                  width: $(window).width() * 0.72,
            			modal: true,
            			buttons: {
            				"Добавяне на офис": addOffice,
            				Cancel: function() {
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
            			dialog.dialog( "open" );
            		});
            	} );

            });
            <!--========================================-->


    </script>
@endsection
