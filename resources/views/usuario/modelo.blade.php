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
              padding-left: 300px;
            }
            article{
              padding-left: 310px;
            }
        </style>

    
</head>
    <body>
       

      <main>
          
          <header>
              <div class="wrapper">

                  <div class="">
                      <!-- Dropdown Structure -->
                      <ul id="dropdown1" class="dropdown-content">
                          <li><a href="#!">User Profile</a></li>
                          <li><a href="#!">Settings</a></li>
                          <li class="divider"></li>
                          <li><a href="#!">Logout</a></li>
                      </ul>
              
                      <nav class="light-blue lighten-1" role="navigation">
                          <div class="nav-wrapper container">
                              <a href="#!" class="brand-logo">Bikeeper</a>
                              <ul class="right hide-on-med-and-down">
                                  <!-- Dropdown Trigger -->
                                  <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Profile<i class="material-icons right">arrow_drop_down</i></a></li>
                              </ul>
                          </div>
                      </nav>
                  </div>
              
              </div>
              
              <ul id="slide-out" class="side-nav fixed">
                  <li><div class="user-view">
                      <div class="background">
                        <img src="{{ ("storage/img/Bike.jpg") }}">
                      </div>
                      <a href="#!user"><img class="circle" src="{{ ("storage/img/person.jpeg") }}"></a>
                      <a href="#!name"><span class="white-text name">John Doe</span></a>
                      <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
                    </div>
                  </li>
                  <li><a href="/locais">Locais</a></li>
                  <li><a href="/bicicletas">Bicicletas</a></li>
                  <li><a href="/ciclovias">Ciclovias</a></li>
                  <li><a href="/convenios">Convênios</a></li>

              </ul>
            </header>
          
          <article class="col offset-l4 s8">
              @yield('conteudo')
          </article>


      </main>

            
            
            

    </body>
</html>
