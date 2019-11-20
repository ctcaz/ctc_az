@extends('ra.form')

@section('navigation')
  @include('ra.nav')
@endsection

@section('contents')
  <main role="main">
    <div class="container-fluid clearfix">
        <div class="content">
            <h2 class="h3 main-heading">Свободни работни места</h2>

            @if ($message = Session::get('success'))
               <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>{{ $message }}</strong>
               </div>
               <br>
            @endif

            <p><a href="{{route('CPM.index')}}" class="btn btn-outline btn-outline-primary" style="padding-left: 4em;"><i class="icon-add-doc"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><g fill="none" stroke="#1e8bc3" stroke-width="2" stroke-miterlimit="10"><path stroke-linecap="round" d="M21 22H3V2h12.1L21 9z"/><path d="M14 2v7h7"/></g></svg></i> Подай СРМ</a></p>
            <hr>

        </div>
    </div>
  </main>
@endsection
