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
        </style>

    <script>
      $(document).ready(function() {
    $('select').material_select();
  });
    </script>
    
</head>
    <body>
       

        <header>
                <nav role="navigation" class="blue darken-1">
                  <div class="nav-wrapper container"><a id="logo-container" href="/" class="brand-logo">Bikeeper<i class="material-icons left hide-on-med-and-down">apps</i></a>
                    <ul id="dropdown" class="dropdown-content">
                      <li><a href="">Register</a></li>
                      <li class="divider"></li>
                      <li><a href="">Sign In</a></li>
                    </ul>
                    <ul class="right hide-on-med-and-down">
                      <li id="timer-tab"><a href="/login">Login</a></li>
                      <li id="stats-tab"><a href="/register">Cadastro</a></li>
                      <li id="stats-tab" class="active"><a href="/register">Cadastrar Local</a></li>
                    </ul>
                  </div>
                </nav>
              </header>
            
              <main>
                <div class="container">
                  <h3 class="center" style="color: #1e88e5">Quero ser um hospedeiro de bicicletas e contribuir com o ecosistema </h3>
                    <div class="row" style="border: 2px solid blue; margin-top: 5rem;">
                      <form class="col s12">
                          <div class="row">
                            <div class="input-field col s6">
                              <input placeholder="Nome completo" id="nome_dono" type="text" class="validate">
                              <label for="nome_dono">Nome</label>
                            </div>
                            <div class="input-field col s6">
                              <input placeholder="Nome completo" id="obs" type="text" class="validate">
                              <label for="obs">Observação</label>
                            </div>
                            <div class="input-field col s12">
                              <input placeholder="Av. Domingos de Almeida, N 2000, 960740-200" id="endereco" type="text" class="validate">
                              <label for="endereco">Endereço</label>
                            </div>
                            <div class="col s12">
                              <label for="foto">Foto</label>
                              <input type="file" id="foto" name="foto">
                            </div>
                            
                          </div>
                          <div class="row">
                              <div class="input-field col s6">
                                  <select>
                                    <option value="" disabled selected>Tipo de local</option>
                                    <option value="0">Pago</option>
                                    <option value="1">Gratuito</option>
                                  </select>
                                  <label>Tipo de local</label>
                                </div>
                                <div class="input-field col s6">
                                  <input placeholder="Valor por hora" id="preco_hora" type="text" class="validate">
                                  <label for="preco_hora">Preço/hora</label>
                                </div>
                            </div>
                        </form>
                        <div class="col s12 center" style="margin-bottom: 2rem">
                        <button class="btn waves-effect waves-light blue darken-1" type="submit" name="action">Enviar
                            <i class="material-icons right">send</i>
                          </button>
                        </div>
                      </div>
                </div>

                <div class="container">
                        <div class="row">
                            <div class="col s12 m4">
                              <div class="card blue-grey darken-1">
                                <div class="card-content white-text">
                                  <span class="card-title">Porque me cadastrar? Vale a pena?</span>
                                  <p>I am a very simple card. I am good at containing small bits of information.
                                  I am convenient because I require little markup to use effectively.</p>
                                </div>
                                <div class="card-action">
                                  <a href="#">This is a link</a>
                                  <a href="#">This is a link</a>
                                </div>
                              </div>
                            </div>

                            <div class="col s12 m4">
                                <div class="card blue-grey darken-1">
                                  <div class="card-content white-text">
                                    <span class="card-title">Vou contribuir com a população?</span>
                                    <p>I am a very simple card. I am good at containing small bits of information.
                                    I am convenient because I require little markup to use effectively.</p>
                                  </div>
                                  <div class="card-action">
                                    <a href="#">This is a link</a>
                                    <a href="#">This is a link</a>
                                  </div>
                                </div>
                              </div>

                              <div class="col s12 m4">
                                  <div class="card blue-grey darken-1">
                                    <div class="card-content white-text">
                                      <span class="card-title">É seguro me dispôr a ajudar o ecosistema?</span>
                                      <p>I am a very simple card. I am good at containing small bits of information.
                                      I am convenient because I require little markup to use effectively.</p>
                                    </div>
                                    <div class="card-action">
                                      <a href="#">This is a link</a>
                                      <a href="#">This is a link</a>
                                    </div>
                                  </div>
                                </div>
                          </div>

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
