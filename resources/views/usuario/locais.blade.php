@extends('usuario/modelo')

@section('conteudo')

<style>
.card .card-image img{
  height: 300px;
}
</style>

<div class="row">
    <h4 style="color:#1e88e5; margin-bottom: 2rem">Locais cadastrados</h4>
    <div class="col s12 m4">
      <div class="card">
        <div class="card-image" >
          <img src="{{ ("storage/img/garagem-1.jpg") }}">
          <span class="card-title">Card Title</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    </div>


    <div class="col s12 m4">
        <div class="card">
          <div class="card-image">
            <img src="{{ ("storage/img/garagem-2.jpg") }}">
            <span class="card-title">Card Title</span>
            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
          </div>
        </div>
      </div>


    <div class="col s12 m4">
        <div class="card">
          <div class="card-image">
            <img src="{{ ("storage/img/garagem-3.jpg") }}">
            <span class="card-title">Card Title</span>
            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
          </div>
        </div>
      </div>
  </div>
@endsection
