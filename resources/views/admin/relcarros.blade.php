<!DOCTYPE html>
<html>
<head>
  <title>Relatório de Bicicletas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
  <h4 style="text-align: center">Bikeeper</h4>
  <h5 style="text-align: center">Relatório de Locais</h5>
  
  <table class="table table-bordered table-sm">
    <thead class="thead-light">    
    <tr><th>Modelo</th>
        <th>Marca</th>
        <th>Ano</th>
        <th>Preço R$:</th>
        <th>Foto</th>
    </tr>    
    </thead>

    <tbody>
  @foreach($carros as $c)
    <tr><td>{{$c->modelo}}</td>
        <td>{{$c->marca->nome}}</td>
        <td style="text-align: center">{{$c->ano}}</td>
        <td style="text-align: right">{{number_format($c->preco, 2, ',', '.')}}</td>
        <td style="text-align: center">
          @if (Storage::exists($c->foto))
            <img src="{{public_path('storage/'.$c->foto)}}" 
                 style="width: 100px; height: 60px">
          @else
            <img src="{{public_path('storage/fotos/semfoto.png')}}" 
                 style="width: 100px; height: 60px">
         @endif
        </td>
    </tr>    
  @endforeach  
    </tbody>
  </table>
</div>

</body>
</html>
