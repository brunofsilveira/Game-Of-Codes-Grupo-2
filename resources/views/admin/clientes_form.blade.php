@extends('adminlte::page')

@section('title', 'Cadastro de Clientes')

@section('content_header')
 
<h2>Inclusão de Clientes

    <a href="{{ route('carros.index') }}" class="btn btn-primary pull-right"
       role="button">Voltar</a>
    </h2>

@endsection

@section('content')

   <div class="container-fluid">

    <form method="POST" action="{{ route('carros.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label for="nome">Nome do Cliente</label>
          <input type="text" id="nome" name="nome" required 
                 value="{{$reg->nome or old('nome')}}"
                 class="form-control">
        </div>
      </div>

      <div class="col-sm-6">
        <div class="form-group">
          <label for="email">E-mail</label>
          <input type="email" id="email" name="email" required 
                 value="{{$reg->email or old('email')}}"
                 class="form-control">
        </div>
      </div>
    </div>              

    <div class="row">
        <div class="col-sm-2">
          <div class="form-group">
            <label for="cep">Cep</label>
            <input type="text" id="cep" name="cep" required 
                   value="{{$reg->cep or old('cep')}}"
                   class="form-control">
          </div>
        </div>

        <div class="col-sm-3">
          <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" id="endereco" name="endereco" required 
                   value="{{$reg->endereco or old('endereco')}}"
                   class="form-control">
          </div>
        </div>
        
        <div class="col-sm-3">
          <div class="form-group">
            <label for="bairro">Bairro</label>
            <input type="text" id="bairro" name="bairro" required 
                   value="{{$reg->bairro or old('bairro')}}"
                   class="form-control">
          </div>
        </div>

        <div class="col-sm-3">
          <div class="form-group">
            <label for="cidade">Cidade</label>
            <input type="text" id="cidade" name="cidade" required 
                   value="{{$reg->cidade or old('cidade')}}"
                   class="form-control">
          </div>
        </div>

        <div class="col-sm-1">
          <div class="form-group">
            <label for="uf">UF</label>
            <input type="text" id="uf" name="uf" required 
                   value="{{$reg->uf or old('uf')}}"
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