@extends('adminlte::page')

@section('title', 'Cadastro de Locais')

@section('content_header')
 
<h2>Inclusão de Locais

    <a href="{{ route('carros.index') }}" class="btn btn-primary pull-right"
       role="button">Voltar</a>
    </h2>

@endsection

@section('content')

   <div class="container-fluid">

    <form method="POST" action="{{ route('locais.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label for="nome">Nome do dono local:</label>
          <input type="text" id="nome" name="nome" required 
                 value="{{$reg->nome or old('nome')}}"
                 class="form-control">
        </div>

        <div class="col-sm-3">
          <div class="form-group">
            <label for="price">Preço/Hora:</label>
            <input type="text" id="price" name="price" required 
                   value="{{$reg->price or old('price')}}"
                   class="form-control">
          </div>
        </div>

        <div class="col-sm-3">
          <div class="form-group">
            <label for="tipo">Tipo:</label>
            <input type="text" id="tipo" name="tipo" required 
                   value="{{$reg->tipo or old('tipo')}}"
                   class="form-control">
          </div>
        </div>

       
      </div>

      
    </div>              

    <div class="row">
     <div class="col-sm-12">
      <div class="form-group">
        <label for="vias">Vias:</label>
            <select name="" id="" value="{{$reg->vias or old('vias')}}"></select> <!-- Listar campos Vias-->
            <select name="" id="" value="{{$reg->vias or old('vias')}}"></select> <!-- Listar campos Vias-->
            <select name="" id="" value="{{$reg->vias or old('vias')}}"></select> <!-- Listar campos Vias-->
        </div>
      </div>
    </div>
    <div class="row">
        

        
        
        
        <div class="col-sm-12">
        <div class="form-group">
          <label for="obs">Observação: </label>
          <input type="text" id="obs" name="obs" 
                 value="{{$reg->obs or old('obs')}}"
                 class="form-control">
        </div>
      </div>
    </div>

    <input type="submit" value="Enviar" class="btn btn-success">
    <input type="reset" value="Limpar" class="btn btn-warning">

    </form>
  </div>

@endsection

@section('js')
  <script src="/js/buscacep.js"></script>
@endsection