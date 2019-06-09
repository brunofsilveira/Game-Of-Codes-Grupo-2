@extends('adminlte::page')

@section('title', 'Cadastro de Carros')

@section('content_header')
    <h1>Cadastro de Carros
    <a href="{{ route('carros.create') }}" class="btn btn-primary pull-right"
       role="button">Novo</a>
    </h1>
@stop

@section('content')

@if (session('status'))
   <div class="alert alert-success">
      {{ session('status') }}
   </div> 
@endif

<table class="table table-striped">
  <thead>
    <tr>
      <th>Modelo</th>
      <th>Marca</th>
      <th>Cor</th>
      <th>Ano</th>
      <th>Preço R$</th>
      <th>Combustível</th>
      <th>Data</th>
      <th>Foto</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($carros as $c)
      <tr>
        <td> {{$c->modelo}} </td>
        <td> {{$c->marca->nome}} </td>
        <td> {{$c->cor}} </td>
        <td> {{$c->ano}} </td>
        <td> {{number_format($c->preco, 2, ',', '.')}} </td>
        <td> {{$c->combustivel}} </td>
        <td> {{date_format($c->created_at, 'd/m/Y')}} </td>
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
            <a href="{{route('carros.edit', $c->id)}}" 
                class="btn btn-warning btn-sm" title="Alterar"
                role="button"><i class="fa fa-edit"></i></a> &nbsp;&nbsp;
            <form style="display: inline-block"
                  method="post"
                  action="{{route('carros.destroy', $c->id)}}"
                  onsubmit="return confirm('Confirma Exclusão?')">
                   {{method_field('delete')}}
                   {{csrf_field()}}
                  <button type="submit" title="Excluir"
                          class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
            </form>
        </td>
        @if ($loop->iteration == $loop->count)
             <tr><td colspan=8>Total dos Veículos cadastrados R$: 
                               {{number_format($soma, 2, ',', '.')}}
                              - Nº Carros Cadastrados: {{$numCarros}}                              
                              </td></tr>
        @endif        
    @empty
      <tr><td colspan=8> Não há carros cadastrados ou 
                         para o filtro informado </td></tr>
    @endforelse

  </tbody>
</table>  

{{ $carros->links() }}
@stop

@section('js')
  <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
@endsection