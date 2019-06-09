@extends('usuario/modelo')

@section('conteudo')

<style>
.card .card-image img{
  height: 300px;
}

.card .card-content {
    padding: 30px 10px;
}
div .card{
  height: 490px;
}
</style>

<div class="row">
    <h4 style="color:#1e88e5; margin-bottom: 2rem; text-align: center">Locais cadastrados</h4>
    <div class="col s12 m4">
      <div class="card">
        <div class="card-image" >
          <img src="{{ ("storage/img/garagem-1.jpg") }}">
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
          <div class="row">
            <div class="col s6">
              <p>Convêniado: João Marcos</p>
            </div>
            <div class="col s6">
              <p style="text-align: right">Valor: R$0.25/h</p>
            </div>

            <div class="col s12">
              <p>Endereço: Rua Gonçalves Chaves, 680, 95080-200</p>
            </div>

            <div class="col s6">
              <p>Obs: Lugar coberto!</p>
            </div>

            <div class="col s6">
              <p style="text-align: right"><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i></p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col s12 m4">
        <div class="card">
          <div class="card-image">
            <img src="{{ ("storage/img/garagem-2.jpg") }}">
            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
          </div>
          <div class="card-content">
              <div class="row">
                  <div class="col s6">
                    <p>Convêniado: Local Público</p>
                  </div>
                  <div class="col s6">
                    <p style="text-align: right">Valor: R$0</p>
                  </div>
      
                  <div class="col s12">
                    <p>Endereço: Rua Félix da Cunha, 20, 95090-205</p>
                  </div>
      
                  <div class="col s6">
                    <p>Obs: </p>
                  </div>
      
                  <div class="col s6">
                    <p style="text-align: right"><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i></p>
                  </div>
                </div>
          </div>
        </div>
      </div>


    <div class="col s12 m4">
        <div class="card">
          <div class="card-image">
            <img src="{{ ("storage/img/garagem-3.jpg") }}">
            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
          </div>
          <div class="card-content">
              <div class="row">
                  <div class="col s8">
                    <p>Convêniado: Estacionamento Esquina</p>
                  </div>
                  <div class="col s4">
                    <p style="text-align: right">Valor: 0.50R$/h</p>
                  </div>
      
                  <div class="col s12">
                    <p>Endereço: Rua General Osório, 150, 95060-200</p>
                  </div>
      
                  <div class="col s8">
                    <p>Obs: Mensalistas tem preço diferenciado!</p>
                  </div>
      
                  <div class="col s4">
                    <p style="text-align: right"><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i></p>
                  </div>
          </div>
        </div>
      </div>
  </div>
@endsection
