<!Doctype html>
<!--
****************************************************
Desarrollado por: Ing. José Alejandro Méndez Sánchez
****************************************************
-->
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="conversor de unidades de tiempo">
        <meta name="description" content="Convertir unidades de tiempo.">
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link href="css/style.min.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
        <title>Wuzzy | Unidades de Tiempo</title>
    </head>
    
    <body>
        <header>
            <!-- Navbar -->
            <nav>
                <div class="nav-wrapper">
                    <a href="/" class="brand-logo center"><img class="responsive-img" src="images/logo.svg" width="100" alt="logo wuzzy"> Wuzzy</a>
                </div>
            </nav>
            <!-- /Navbar -->
        </header>        
       
        <section class="row">
            <div class="container center">
                <h1>Unidades de Tiempo</h1>
            </div>
        </section>
                
        <section class="row">
            <div class="container">
                <div class="col s12 m10 offset-m1 l8 offset-l2">
                    <!-- Form -->
                    <form id="tiempo">
                        <div class="input-field col s12 m6 offset-m3">
                            <input name="valor" type="text" autocomplete="off" onkeypress="return only_number(event)" onpaste="return false" required>
                            <label for="valor">Valor</label>
                        </div>
                        
                        <div class="row">
                            <div class="input-field col s12 m6">      
                                <select name="from" class="browser-default grey lighten-4">
                                    <option value="ns">Nanosegundo (ns)</option>
                                    <option value="ms">Milisegundo (ms)</option>
                                    <option value="s">Segundo (s)</option>
                                    <option value="m">Minuto (m)</option>
                                    <option value="h">Hora (h)</option>
                                </select>
                            </div>
                            
                            <div class="input-field col s12 m6">      
                                <select name="to" class="browser-default grey lighten-4">
                                    <option value="ns">Nanosegundo (ns)</option>
                                    <option value="ms">Milisegundo (ms)</option>
                                    <option value="s">Segundo (s)</option>
                                    <option value="m">Minuto (m)</option>
                                    <option value="h">Hora (h)</option>
                                </select>
                            </div>
                        </div>                        
                        <div class="row">
                            <div class="col s12">
                                <button class="col s8 offset-s2 btn btn-large waves-effect waves-light blue-grey darken-4" type="submit">Calcular</button>
                            </div>
                        </div>
                    </form>
                    <!-- /Form -->
                    <div class="row">
                        <!-- Respuesta -->
                        <div id="respuesta" class="col s12" style="display: none"></div>
                        <!-- /Respuesta -->
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Menu -->
        <ul id="slide-out" class="side-nav">
            <div class="center">
               <img class="responsive-img" src="images/logo.svg" width="100" alt="logo wuzzy">
            </div>
            <li class="divider"></li>
            <li>
                <a class="waves-effect waves-dark" href="/longitud">
                <i class="material-icons red-text">swap_horiz</i>Longitud</a>
            </li>
            <li>
                <a class="waves-effect waves-dark" href="/masa">
                <i class="material-icons blue-text">cloud</i>Masa</a>
            </li>
            <li>
                <a class="waves-effect waves-dark" href="/volumen">
                <i class="material-icons purple-text">invert_colors</i>Volumen</a>
            </li>
            <li>
                <a class="waves-effect waves-dark" href="/temperatura">
                <i class="material-icons amber-text">settings_brightness</i>Temperatura</a>
            </li>
            <li>
                <a class="waves-effect waves-dark" href="/tiempo">
                <i class="material-icons red-text text-accent-3">schedule</i>Tiempo</a>
            </li>
            <li>
                <a class="waves-effect waves-dark" href="/almacenamiento">
                <i class="material-icons teal-text">dns</i>Almacenamiento</a>
            </li>
        </ul>
        <!-- /Menu -->
        
       <!-- Trigger menu -->
        <div class="right fixed-action-btn">
            <div class="row">
                <a href="#" data-activates="slide-out" class="btn-floating btn-large waves-effect waves-light purple darken-3 button-collapse show-on-large"><i class="material-icons">menu</i></a>
            </div>
        </div>
        <!-- /Trigger menu -->
        
        <!-- Footer -->
        <footer class="page-footer">
            <div class="container center">
                <p>Derechos Reservados © <?php echo date("Y") ?>. Desarrollado por <a href="http://www.alodor.com.ve" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Diseño Web & Desarrollo de Software">Alodor</a></p>
            </div>
        </footer>
        <!-- /Footer -->
        
        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
        <script src="js/functions.min.js"></script>
        <script src="js/ajax.min.js"></script>
        <script>
        // Validacion del formulario
        function only_number(e) { 
            tecla = (document.all) ? e.keyCode : e.which; 
            if ((tecla < 48 || tecla > 57) && tecla != 46 && tecla != 13) {
                return false 
            }                    
        }
        </script>
        <!-- /Scripts -->
    </body>
</html>