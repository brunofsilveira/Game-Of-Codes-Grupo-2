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
        $(document).ready(function(){
            $('.parallax').parallax();
        });
    </script>
    
</head>
    <body>
       

        <header>
                <nav role="navigation">
                  <div class="nav-wrapper container"><a id="logo-container" href="/" class="brand-logo">Some Title <i class="material-icons left hide-on-med-and-down">apps</i></a>
                    <ul id="dropdown" class="dropdown-content">
                      <li><a href="">Register</a></li>
                      <li class="divider"></li>
                      <li><a href="">Sign In</a></li>
                    </ul>
                    <ul class="right hide-on-med-and-down">
                      <li id="timer-tab"><a href="">Tab 1</a></li>
                      <li id="stats-tab"><a href="">Tab 2</a></li>
                      <li id="graphs-tab"><a href="">Tab 3</a></li>
                      <li><a href="" data-activates="dropdown" class="dropdown-button">Tab 4<i class="material-icons right">arrow_drop_down</i></a></li>
                    </ul>
                  </div>
                </nav>
              </header>
            
              <main>
                <div class="container">
                    <div class="parallax-container">
                      <div class="parallax">
                          {{-- <img src="{{ asset('/img/bike.jpeg') }}"> --}}
                          <img src="{{url('storage/img/bike.png')}}" >

                        </div>
                    </div>
                    <div class="section white">
                      <div class="row container">
                        <h2 class="header">Parallax</h2>
                        <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
                      </div>
                    </div>
                    <div class="parallax-container">
                        <div class="parallax">
                        </div>
                    </div>
                </div>
              </main>
            
              <footer class="page-footer">
                <div class="container">
                  <div class="row">
                    <div class="col l6 s12">
                      <h5 class="white-text">Some Title</h5>
                      <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="col l2 offset-l2 s6">
                      <h6>About</h6>
                      <ul>
                        <li><a href="" class="grey-text text-lighten-3">Help</a></li>
                        <li><a href="" class="grey-text text-lighten-3">Contact</a></li>
                        <li><a href="" class="grey-text text-lighten-3">Suggestions</a></li>
                      </ul>
                    </div>
                    <div class="col l2 s6">
                      <h6>Developer</h6>
                      <ul>
                        <li><a href="" class="grey-text text-lighten-3">Source</a></li>
                        <li><a href="" class="grey-text text-lighten-3">Contribute</a></li>
                        <li><a href="" class="grey-text text-lighten-3">API Docs</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="footer-copyright">
                  <div class="container">Made by <a href="">Me </a></div>
                </div>
              </footer>
            

    </body>
</html>
