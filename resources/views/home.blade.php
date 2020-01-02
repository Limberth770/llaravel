@extends("layouts.theme.$theme.admin")

@section ('titulo')
    Dashboard
@endsection
@section ('contenido')
<div class="section section-download" id="downloadSection">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-8 ml-auto mr-auto">
        <h2>BIENVENIDO</h2>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>                    
        @endif
        <h4>Eres un usuario logeado! mediante las opciones del navbar podras realizar las gestiones que te corresponden</h4>
      </div>      
    </div>    
  </div>
</div>
@endsection






