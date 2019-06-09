<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

            <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
         


        <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Bikeeper</title>

        
        <!-- Styles -->
        <style>
            html {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                margin: 0;
            }
            body {
                display: flex;
                min-height: 100vh;
                flex-direction: column;
            }
            main {
                flex: 1 0 auto;
            }
            .carousel .carousel-item>img{
              width: 450px;
            }
            .card {
              height: 250px;
              background-color: #1e88e5;
            }
            .card .card-image img{
              width: 35%;
            }
        </style>

    <script>
        $(document).ready(function(){
          $('.parallax').parallax();
        });

        $(document).ready(function(){
          $('.carousel').carousel();
        });
    </script>
    
</head>
    <body>
       

        <header>
                <nav role="navigation" class="blue darken-1">
                  <div class="nav-wrapper container"><a id="logo-container" href="/" class="brand-logo">Bikeeper<img style="width: 50px; float: left; margin-right: 10px; margin-top: 5px" src="{{ ("storage/img/logo-bicicleta.png") }}"></a>
                    <ul id="dropdown" class="dropdown-content">
                      <li><a href="">Register</a></li>
                      <li class="divider"></li>
                      <li><a href="">Sign In</a></li>
                    </ul>
                    <ul class="right hide-on-med-and-down">
                      <li id="timer-tab"><a href="/login">Login</a></li>
                      <li id="stats-tab"><a href="/register">Cadastro</a></li>
                      <li id="stats-tab"><a href="/formulario">Cadastrar Local</a></li>
                    </ul>
                  </div>
                </nav>
              </header>
            
              <main>
                <div class="container">
                    <div class="parallax-container">
                      <div class="parallax">
                          <img src="{{ ("storage/img/Bike.jpg") }}">

                        </div>
                    </div>
                    <div class="section white">
                      <div class="row container">
                        <h2 class="header">Bikeeper</h2>
                        <p class="grey-text text-darken-3 lighten-3">O Bikeeper é uma proposta para o desafogo do trânsito na cidade Pelotas e aderindo um
                          meio de transporte alternativo, focado em bicicletas.
                        </p>
                        <h2 class="header">No que o Bikeeper vai me ajudar?</h2>
                        <p class="grey-text text-darken-3 lighten-3">O Bikeeper disponibilizará diversos convêniados que vão divulgar locais para o abrigo de bicicletas,
                          dando um enfase maior em locais com maior aglomerado de pessoas, como o centro da nossa cidade.
                        </p>
                        <h2 class="header">Quanto custa para usar?</h2>
                        <p class="grey-text text-darken-3 lighten-3">Somos uma plataforma que não visamos o lucro, o valor do uso será exclusivamente do dono do local disponibilizado.</p>
                        <h2 class="header">Qual o motivo de criar uma plataforma que não visa lucro?</h2>
                        <p class="grey-text text-darken-3 lighten-3">Não visa lucro, porém o que motiva nosso time a acreditar no projeto, é qualidade de vida, + bicicletas - carros, - carros - stress - poluição sonora - poluição ambiental.</p>
                      
                      </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col s12 m4">
                              <div class="card"  style="text-align: center; padding: 35px 0">
                                <div class="card-image">
                                  <img src="{{ ("storage/img/bike.png") }}" style="display: unset">
                                </div>
                                <div class="card-content">
                                  <p class="white-text">Encontrar locais para deixar sua bike com segurança</p>
                                </div>
                              </div>
                            </div>

                            <div class="col s12 m4">
                                <div class="card"  style="text-align: center; padding: 35px 0">
                                  <div class="card-image">
                                    <img src="{{ ("storage/img/formulario.png") }}" style="display: unset">
                                  </div>
                                  <div class="card-content">
                                    <p class="white-text">Cadastre seu local para abrigar bikes, ajudar o ecosistema e ainda ganhar uma grana</p>
                                  </div>
                                </div>
                              </div>

                              <div class="col s12 m4">
                                  <div class="card"  style="text-align: center; padding: 35px 0">
                                    <div class="card-image">
                                      <img src="{{ ("storage/img/maps.png") }}" style="display: unset">
                                    </div>
                                    <div class="card-content">
                                      <p class="white-text">Encontre fácilmente ciclovias e bicicletários</p>
                                    </div>
                                  </div>
                                </div>
                          </div>
                    </div>

                    <div class="carousel">
                        <a class="carousel-item" href="#one!">
                          <img src="{{ ("storage/img/garagem-1.jpg") }}">
                        </a>
                        <a class="carousel-item" href="#one!">
                          <img src="{{ ("storage/img/garagem-2.jpg") }}">
                        </a>
                        <a class="carousel-item" href="#one!">
                          <img src="{{ ("storage/img/garagem-3.jpg") }}">
                        </a>
                      </div>
                </div>
              </main>
            
              <footer class="page-footer blue darken-1" style="padding-top: 0">
                <div class="footer-copyright">
                  <div class="container">Made by <a href="">Me </a></div>
                </div>
              </footer>
            

    </body>
</html>
