@extends('usuario/modelo')

@section('conteudo')

<style>
  .card-image {
    height: auto;
    weight: 100%;
  }
</style>

<div class="container">
  <a href="{{ route('bicicletas.create') }}" class="btn btn-primary pull-right"
  role="button">Novo</a>
  <div class="row">
    @forelse ($bicicletas as $bicicleta)
        
    <div class="col s6">
      <h2 class="header"></h2>
      <div class="card horizontal">
        <div class="card-image">
          <img src="storage/{{ $bicicleta->foto }}" style="display: block; height: 200px; width: 600px">

        </div>
        <div class="card-stacked">
          <div class="card-content">
            <p>Chassi: {{$bicicleta->numero}} </p>
          </div>
          <div class="card-action">
            <a href="#">This is a link</a>
          </div>
        </div>
      </div>
    </div>

    @empty
      <p> Não há bicicletas cadastrados</p>
    @endforelse
  </div>
</div>

{{ $bicicletas->links() }}

@section('js')
  <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
@endsection

@endsection