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
        <meta name="keywords" content="convertidor de unidades, unidad de longitud, unidad de masa, unidad de volumen, unidad de temperatura, unidad de tiempo, unidad de almacenamiento, wuzzy">
        <meta name="description" content="Wuzzy. Con esta herramienta puedes calcular de forma rápida y sencilla la conversión de diferentes unidades.">
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link href="css/style.min.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
        <title>Wuzzy | Conversor de Unidades</title>
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

            <!-- Jumbotron -->
            <section class="row">
                <div class="container center">
                    <h1>Herramienta de Conversión</h1>
                    <p class="flow-text">Calcule de forma rápida y sencilla la conversión de diferentes unidades</p>
                </div>
            </section>
            <!-- /Jumbotron -->
        </header>
        
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
        
        <!-- Unidades -->
        <section class="row">
            <div class="container">               
                <!-- *********************************** -->
                <div class="col s8 offset-s2 m6 l4 hoverable unidad center">
                    <a href="/longitud"><i class="medium material-icons red-text">swap_horiz</i>
                    <p class="flow-text">Longitud</p></a>
                </div>
                <!-- *********************************** -->
                <div class="col s8 offset-s2 m6 l4 hoverable unidad center">
                    <a href="/masa"><i class="medium material-icons blue-text">cloud</i>
                    <p class="flow-text">Masa</p></a>
                </div>
                <!-- *********************************** -->
                <div class="col s8 offset-s2 m6 l4 hoverable unidad center">
                    <a href="/volumen"><i class="medium material-icons purple-text">invert_colors</i>
                    <p class="flow-text">Volumen</p></a>
                </div>
                <!-- *********************************** -->
                <div class="col s8 offset-s2 m6 l4 hoverable unidad center">
                    <a href="/temperatura"><i class="medium material-icons amber-text">settings_brightness</i>
                    <p class="flow-text">Temperatura</p></a>
                </div>
                <!-- *********************************** -->
                <div class="col s8 offset-s2 m6 l4 hoverable unidad center">
                    <a href="/tiempo"><i class="medium material-icons red-text text-accent-3">schedule</i>
                    <p class="flow-text">Tiempo</p></a>
                </div>
                <!-- *********************************** -->
                <div class="col s8 offset-s2 m6 l4 hoverable unidad center">
                    <a href="/almacenamiento"><i class="medium material-icons teal-text">dns</i>
                    <p class="flow-text">Almacenamiento</p></a>
                </div>
                <!-- *********************************** -->               
            </div>
        </section>
        <!-- /Unidades -->
        
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
        <!-- /Scripts -->
    </body>
</html>