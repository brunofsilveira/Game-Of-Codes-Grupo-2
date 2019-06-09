@extends('usuario/modelo')

@section('conteudo')

<div class="container">
  <a href="{{ route('bicicletas.create') }}" class="btn btn-primary pull-right"
  role="button">Novo</a>
  <div class="row">
    @forelse ($bicicletas as $bicicleta)
        
    <div class="col s12 m4">
      <h2 class="header"></h2>
      <div class="card horizontal">
        <div class="card-image">
          <img src="{{ ('storage/img/'. $bicicleta->foto) }}">

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
{{-- <table class="table table-striped">
  <thead>
    <tr>
      <th>Modelo</th>
      <th>Marca</th>
      <th>Foto</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($bicicletas as $c)
      <tr>
        <td> {{$c->modelo}} </td>
        <td> {{$c->marca->nome}} </td>
        <td>
          @if (Storage::exists($c->foto))
            <img src="{{url('storage/'.$c->foto)}}" 
                 style="width: 100px; height: 60px" alt="Foto">
          @else
            <img src="{{url('storage/fotos/semfoto.png')}}" 
                 style="width: 100px; height: 60px" alt="Foto">
         @endif
        </td>
        <td> 
            <a href="{{route('bicicletas.edit', $c->id)}}" 
                class="btn btn-warning btn-sm" title="Alterar"
                role="button"><i class="fa fa-edit"></i></a> &nbsp;&nbsp;
            <form style="display: inline-block"
                  method="post"
                  action="{{route('bicicletas.destroy', $c->id)}}"
                  onsubmit="return confirm('Confirma Exclusão?')">
                   {{method_field('delete')}}
                   {{csrf_field()}}
                  <button type="submit" title="Excluir"
                          class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
            </form>
        </td>       
    @empty
      <tr><td colspan=8> Não há carros cadastrados ou 
                         para o filtro informado </td></tr>
    @endforelse

  </tbody>
</table>   --}}

{{ $bicicletas->links() }}

@section('js')
  <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
@endsection

@endsection