@extends('usuario/modelo')

@section('conteudo')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">

            </div>
            <div class="col-sm-6">
                <img src="storage/{{ $result->foto }}" alt="Aluguel">
            </div>
        </div>
    </div>

@endsection