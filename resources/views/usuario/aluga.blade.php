@extends('usuario/modelo')

@section('conteudo')
<style>
    h2,h3,h4 {
        color: #1E88E5;
    }

    .titulo_prop {
        
        font-family: Roboto;
        font-style: normal;
        font-weight: normal;
        font-size: 50px;
        line-height: 59px;

    }
</style>
    <div class="container">
        <h2 class="titulo_prop">Bicioteclário do João</h2>
        <div class="row" style="margin-top: 8vw">
            <div class="col s6">
                <div class="col s6">
                    <h3>João Silva</h3>
                    <h4>Pelotas, Rua 3, 204</h4>
                    <button>Guardar Vaga</button>
                </div>
                <div class="col s6">
                    <h3>teste</h3>
                </div>
            </div>
            <div class="col s6">
                <img src="storage/storage/garagem-1.jpg" alt="Aluguel" style="width: 130%;">
            </div>
        </div>
    </div>

@endsection