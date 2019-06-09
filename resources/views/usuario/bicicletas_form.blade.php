@extends('usuario/modelo')

@section('conteudo')

    @if ($acao==1)
       <h2>Inclusão de Bicicleta
    @elseif ($acao ==2)
       <h2>Alteração de Bicicleta
    @endif          

    <a href="{{ route('bicicletas.index') }}" class="btn btn-primary pull-right"
       role="button">Voltar</a>
    </h2>


   <div class="container-fluid">

    @if ($acao==1)
      <form method="POST" action="{{ route('bicicletas.store') }}" enctype="multipart/form-data">
    @elseif ($acao==2)
      <form method="POST" action="{{route('bicicletas.update', $reg->id)}}" enctype="multipart/form-data">
      {!! method_field('put') !!}
    @endif          
    {{ csrf_field() }}

    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label for="numero">Numero do chassi da bicicleta</label>
          <input type="text" id="numero" name="numero" required 
                 value="{{$reg->numero or old('numero')}}"
                 class="form-control">
        </div>
      </div>

        <div class="col-sm-4">
          <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" id="foto" name="foto"
                   class="form-control">
          </div>
        </div>
        
        <input type="text" id="user_id" name="user_id" 
                 value={{1}}
                 class="hide">
    </div>

    <input type="submit" value="Enviar" class="btn btn-success">
    <input type="reset" value="Limpar" class="btn btn-warning">

    </form>
  </div>

@endsection

@section('js')
  <script src="https://code.jquery.com/jquery-latest.min.js"></script>
  <script src="/js/jquery.mask.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#preco').mask('#.###.##0,00', {reverse: true});
    });
  </script>  

@endsection
