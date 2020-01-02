@extends("layouts.theme.$theme.layout")

@section ('titulo')
  LIMBERTH-DEV
@endsection

@section('header')
  <div class="page-header header-filter clear-filter" data-parallax="true" style="background-image: url('{{asset("./assets/$theme/img/bg3.jpg")}}');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand">
            <h1>CURSO LARAVEL</h1>
            <h3>TRABAJOS PRACTICOS</h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"></div>
        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
          <img src="{{asset("./assets/$theme/img/faces/limberth-avatar.jpg")}}" alt="Limberth Avatar" class="rounded-circle img-fluid">
        </div>
        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"></div>
      </div>
      <div class="row">
        <div class="col-12">
            <h4 class="text-center">LIMBERTH LINAREZ ORTUÑO</h3>
        </div>
      </div>
    </div>
  </div>
@endsection