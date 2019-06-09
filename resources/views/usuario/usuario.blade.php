@extends('usuario/modelo')

@section('conteudo')
<style>
   .card {
    height: 250px;
    background-color: #1e88e5;
  }
  .card .card-image img{
    width: 35%;
  }
</style>

  <div class="row">
    <div class="col offset-l2 l8">
      <img style="width: 100%" src="{{ ("storage/img/bicicleta-home.jpg") }}">
    </div>
  </div>

  <div class="container">
      <div class="row">
          <div class="col s12 m4">
            <div class="card"  style="text-align: center; padding: 35px 0">
              <div class="card-image">
                <img src="{{ ("storage/img/bike.png") }}" style="display: unset">
              </div>
              <div class="card-content">
                <p class="white-text">Encontrar locais para deixar sua bike com segurança</p>
              </div>
            </div>
          </div>

          <div class="col s12 m4">
              <div class="card"  style="text-align: center; padding: 35px 0">
                <div class="card-image">
                  <img src="{{ ("storage/img/formulario.png") }}" style="display: unset">
                </div>
                <div class="card-content">
                  <p class="white-text">Cadastre seu local para abrigar bikes, ajudar o ecosistema e ainda ganhar uma grana</p>
                </div>
              </div>
            </div>

            <div class="col s12 m4">
                <div class="card"  style="text-align: center; padding: 35px 0">
                  <div class="card-image">
                    <img src="{{ ("storage/img/maps.png") }}" style="display: unset">
                  </div>
                  <div class="card-content">
                    <p class="white-text">Encontre fácilmente ciclovias e bicicletários</p>
                  </div>
                </div>
              </div>
        </div>
  </div>

@endsection
