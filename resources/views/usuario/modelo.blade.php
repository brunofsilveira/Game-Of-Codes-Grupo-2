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
            }
            main {
                flex: 1 0 auto;
                grid-template-areas: 'menu article'
            }
            .wrapper {
                padding-left: 165px;
            }
            article{
                padding-left: 170px;
            }
            .side-nav li>a{
                color: white;
            }
            li{
                padding-top: 20px;
            }
            li a{
                padding: 15px;
            }
            .classes-a{
                height: 60px; text-align: center;
            }
            .title-rote{
                padding: 0; margin-top: -2rem; font-size: 18px; text-align: center;
            }
        </style>

    
</head>
    <body>
       

      <main>
          
          <header>
              <div class="wrapper">

              
              </div>
              
              <ul id="slide-out" style="width: 10%;" class="side-nav fixed  blue darken-1">
                <li style="text-align: center;">
                    <a href="/usuario" class="classes-a" style="height: 90px">
                        <img style="width: 75px;" src="{{ ("storage/img/logo-bicicleta.png") }}">
                    </a>
                </li>
                <li>
                    <a href="/locais" class="classes-a">
                    <img style="width: 30px;" src="{{ ("storage/img/maps.png") }}">
                        <p class="title-rote" style="" ">Locais</p>
                    </a>
                </li>
                <li>
                    <a href="/bicicletas" class="classes-a">
                    <img style="width: 30px;" src="{{ ("storage/img/logo-bicicleta.png") }}">
                        <p class="title-rote">Bicicletas</p>
                    </a>
                </li>
                <li>
                    <a href="/ciclovias" class="classes-a">
                    <img style="width: 30px;" src="{{ ("storage/img/maps.png") }}">
                        <p class="title-rote">Ciclovias</p>

                    </a>
                </li>
                <li>
                    <a href="/convenios" class="classes-a">
                    <img style="width: 30px;" src="{{ ("storage/img/formulario.png") }}">
                        <p class="title-rote">Convênios</p>
                    </a>
                </li>

              </ul>
            </header>
          
          <article class="col offset-l4 s8">
              @yield('conteudo')
          </article>


      </main>

            
            
            

    </body>
</html>
