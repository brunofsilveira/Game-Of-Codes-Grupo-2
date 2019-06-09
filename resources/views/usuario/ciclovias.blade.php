@extends('usuario/modelo')

@section('conteudo')

<div class="row">
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


        <img src="{{ ("storage/img/ciclovias.png") }}">


</div>

@endsection
