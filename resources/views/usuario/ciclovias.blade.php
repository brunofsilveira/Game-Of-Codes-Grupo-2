@extends('usuario/modelo')

@section('conteudo')

<div class="row">
  <h4 style="color:#1e88e5; margin-bottom: 2rem; text-align: center">Ciclovias e Ciclofaixas</h4>
    <nav class="col offset-s1 s4" style="background-color: white; border: 2px solid blue;">
        <div class="nav-wrapper">
          <form>
            <div class="input-field">
              <input placeholder="Onde você ta?" id="search" type="search" required>
            </div>
          </form>
        </div>
      </nav>

      <nav class="col offset-s1 s4" style="background-color: white; border: 2px solid blue;">
        <div class="nav-wrapper">
            <form>
              <div class="input-field">
                <input placeholder="Para onde você vai?" id="search" type="search" required>
              </div>
            </form>
          </div>
        </nav>

        <div class="container">
          <div class="row">
            <div class="col s12 center" style="margin-top: 5rem">
              <img src="{{ ("storage/img/ciclovias.png") }}" style="width: 60%">
            </div>
          </div>
        </div>
</div>

@endsection
