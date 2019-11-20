@extends('ra.form')

@section('navigation')
  @include('ra.nav')
@endsection

@section('contents')
  <main role="main">
    <div class="container-fluid clearfix">
        <div class="content col-70">
            <p>Добре дошли в Информационно-комуникационна платформа &quot;Частни трудови посредници&quot;, разработена по проект „Разработване на специализиран софтуер за подобряване на взаимодействието между частните трудови посредници, Агенция по заетостта, ИА Главна инспекция по труда и работодателите“, финансиран със средства по Оперативна програма „Развитие на човешките ресурси”, проект BG 0501PO001-6.1.05 – “Повишаване качеството на предоставяните от Агенция по заетостта услуги за гражданите и бизнеса с фокус върху уязвимите групи на пазара на труда” – “Да успеем заедно”.</p>
            <p>Целта на платформата е улесняване на дейността на частните трудови посредници при предоставяне на изискваната информация и ускоряването на обработката на данните.</p>
            <p><strong>Платформата предоставя възможност за:</strong></p>
            <ul>
              <li>Подаване на Заявление за изменение и допълнение на обстоятелствата, вписани в регистъра на издадените удостверения за регистрация за извършване на посредническа дейност по наемане на работа;</li>
              <li>Подаване/публикуване на заявки за свободни работни места, обявени от посредниците;</li>
              <li>Обновяване на информацията, свързана с публикуваните свободни работни места;</li>
              <li>Попълване на данни в регистъра на търсещите и устроени на работа лица в съответствие с изискванията на чл. 24 от Наредбата за условията и реда за извършване на посредническа дейност по наемане на работа.</li>
            </ul>
        </div>
        <aside class="side-bar col-25 float-right">
          <p><a href="inside-05.htm" class="btn btn-outline btn-outline-primary btn-block"><i class="icon-add-doc"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><g fill="none" stroke="#1e8bc3" stroke-width="2" stroke-miterlimit="10"><path stroke-linecap="round" d="M21 22H3V2h12.1L21 9z"/><path d="M14 2v7h7"/></g></svg></i>Подай ТРЛ</a></p>
            <p><a href="inside-06.htm" class="btn btn-outline btn-outline-primary btn-block"><i class="icon-add-doc"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><g fill="none" stroke="#1e8bc3" stroke-width="2" stroke-miterlimit="10"><path stroke-linecap="round" d="M21 22H3V2h12.1L21 9z"/><path d="M14 2v7h7"/></g></svg></i>Подай УРЛ</a></p>
            <p class="m-0"><a href="{{route('CPM.index')}}" class="btn btn-outline btn-outline-primary btn-block"><i class="icon-add-doc"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><g fill="none" stroke="#1e8bc3" stroke-width="2" stroke-miterlimit="10"><path stroke-linecap="round" d="M21 22H3V2h12.1L21 9z"/><path d="M14 2v7h7"/></g></svg></i>Подай СРМ</a></p>
        </aside>
    </div>
  </main>
@endsection
