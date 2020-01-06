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
            <h2>INTERMEDIO AVANZADO</h2>
            <h3>CRUD DE ALUMNOS Y DOCENTES</h3>
          </div>
        </div>
      </div>
      <!--
      <div class="row mt-2">
        <div class="col-xs-12 col-sm-1 col-md-2 col-lg-3"></div>
        <div class="col-6 col-sm-5 col-md-4 col-lg-3">
          <img src="{{asset("./assets/$theme/img/faces/limberth-avatar.jpg")}}" alt="Limberth Avatar" class="rounded-circle img-fluid">
          <h4 class="text-center">LIMBERTH LINAREZ ORTUÑO</h3>
        </div>
        <div class="col-6 col-sm-5 col-md-4 col-lg-3">
          <img src="{{asset("./assets/$theme/img/faces/avatar.jpg")}}" alt="Avatar" class="rounded-circle img-fluid">
          <h4 class="text-center">PATRICIA PINTO RODRIGUEZ</h3>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-2 col-lg-3"></div>        
      </div>      
    -->
    </div>
  </div>

  <div class="main main-raised">
    <div class="section section-basic">
      <div class="container">
        <div class="title">
          <h2 class="text-center">PARTICIPANTES</h2>
        </div>

        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-2">
              <img src="{{asset("./assets/$theme/img/faces/limberth-avatar.jpg")}}" alt="Limberth Avatar" class="rounded-circle img-fluid">
              <h4 class="text-center">LIMBERTH LINAREZ ORTUÑO</h3>              
            </div>
            <div class="col-sm-2 ml-auto">
              <img src="{{asset("./assets/$theme/img/faces/avatar.jpg")}}" alt="Avatar" class="rounded-circle img-fluid">
              <h4 class="text-center">PATRICIA PINTO RODRIGUEZ</h3>
            </div>
            <div class="col-sm-2"></div>
        </div>
        
      </div>
    </div>
  </div>
@endsection