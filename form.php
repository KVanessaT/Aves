<!-- 
* Copyright 2016 Carlos Eduardo Alfaro Orellana
-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Material Dark</title>
    
     <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    
     <!-- Materialize CSS -->
    <link rel="stylesheet" href="css/materialize.min.css">
    
     <!-- Material Design Iconic Font CSS -->
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    
    <!-- Malihu jQuery custom content scroller CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    
    <!-- Sweet Alert CSS -->
    <link rel="stylesheet" href="css/sweetalert.css">
    
    <!-- MaterialDark CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Nav Lateral -->
    <section class="NavLateral full-width">
        <div class="NavLateral-FontMenu full-width ShowHideMenu"></div>
        <div class="NavLateral-content full-width">
            <header class="NavLateral-title full-width center-align">
                AVES YAVIRACK <i class="zmdi zmdi-close NavLateral-title-btn ShowHideMenu"></i>
            </header>
            <figure class="full-width NavLateral-logo">
                <img src="assets/img/logo.png" alt="material-logo" class="responsive-img center-box">
                <figcaption class="center-align">AVES YAVIRACK</figcaption>
            </figure> 
            <div class="NavLateral-Nav">
                <ul class="full-width">
                    <li>
                        <a href="home.php" class="waves-effect waves-light"><i class="zmdi zmdi-home zmdi-hc-fw"></i> INICIO</a>
                    </li>

                    <li class="NavLateralDivider"></li>
                    
                    <li>
                        <a href="#" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-widgets zmdi-hc-fw"></i> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i> Quienes Somos?</a>
                        <ul class="full-width">
                            <li><a href="about.php" class="waves-effect waves-light">SOBRE NOSOTROS</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="form.php" class="waves-effect waves-light">VISION Y VALORES</a></li>
                        </ul>
                    </li>
                    <li class="NavLateralDivider"></li>
                    <li>
                        <a href="#" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-language-css3 zmdi-hc-fw"></i> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i> AVES</a>
                        <ul class="full-width">
                            <li> <a href="aves.php"  class="waves-effect waves-light">FAMILIA & Y   SIMILARES</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="tables.php" class="waves-effect waves-light">NOMBRE CIENTIFICO</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="tables.php" class="waves-effect waves-light">UBICACION</a></li>
                        </ul>
                    </li>
                    <li class="NavLateralDivider"></li>
                    <li>
                        <a href="#" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-widgets zmdi-hc-fw"></i> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i> FOTOS USUARIO</a>
                        <ul class="full-width">
                            <li><a href="template.php" class="waves-effect waves-light">ACTUALES</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="ty.php" class="waves-effect waves-light">ANTIGUOS</a></li>
                        </ul>
                    </li>
                    <li class="NavLateralDivider"></li> 
                    <li>
                        <a href="home.php" class="waves-effect waves-light"><i class="zmdi zmdi-home zmdi-hc-fw"></i> ADMINISTRACION</a>
                    </li>
                </ul>
            </div>  
        </div>  
    </section>


    <!-- Page content -->
    <section class="ContentPage full-width">
        <!-- Nav Info -->
        <div class="ContentPage-Nav full-width">
            <ul class="full-width">
                <li class="btn-MobileMenu ShowHideMenu"><a href="#" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Menu"><i class="zmdi zmdi-more-vert"></i></a></li>
                <li><figure><img src="assets/img/user.png" alt="UserImage"></figure></li>
                <li style="padding:0 5px;">User Name</li>
                <li><a href="#" class="tooltipped waves-effect waves-light btn-ExitSystem" data-position="bottom" data-delay="50" data-tooltip="Logout"><i class="zmdi zmdi-power"></i></a></li>
                <li><a href="#" class="tooltipped waves-effect waves-light btn-Search" data-position="bottom" data-delay="50" data-tooltip="Search"><i class="zmdi zmdi-search"></i></a></li>
                
            </ul>   
        </div>

        
        <!--Input fields-->
        <div class="container">
            <div class="row">
                <h2 class="center-align">Input fields</h2>
                <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                        <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Last Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                        <label for="disabled">Disabled</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                </form>
            </div>
        </div>
        
        <!--Icon Prefixes-->
        <div class="container">
            <div class="row">
                <h2 class="center-align">Icon Prefixes</h2>
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="zmdi zmdi-account-circle prefix"></i>
                            <input id="icon_prefix" type="text" class="validate">
                            <label for="icon_prefix">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="zmdi zmdi-phone prefix"></i>
                            <input id="icon_telephone" type="tel" class="validate">
                            <label for="icon_telephone">Telephone</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
            
        <!--Textarea-->
        <div class="container">
            <div class="row">
                <h2 class="center-align">Textarea</h2>
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea"></textarea>
                            <label for="textarea1">Textarea</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <!-- Footer -->
        <footer class="footer-MaterialDark">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Footer Content</h5>
                        <p class="grey-text text-lighten-4">
                            To better support on CSS components and icons, please visit the official websites of the technologies used.
                            <br>
                            Para mejor soporte sobre los componentes CSS e iconos, por favor visite los sitios web oficiales de las tecnologias usadas
                        </p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Technologies used</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="http://materializecss.com/">Materialize</a></li>
                            <li><a class="grey-text text-lighten-3" href="http://zavoloklom.github.io/material-design-iconic-font/icons.html">Material Design Iconic Font</a></li>
                            <li><a class="grey-text text-lighten-3" href="http://t4t5.github.io/sweetalert/">Sweet Alert</a></li>
                            <li><a class="grey-text text-lighten-3" href="http://manos.malihu.gr/jquery-custom-content-scroller/">jQuery custom content scroller</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="NavLateralDivider"></div>
            <div class="footer-copyright">
                <div class="container center-align">
                    © 2016 Carlos Eduardo Alfaro Orellana
                </div>
            </div>
        </footer>
    </section>
    
    <!-- Sweet Alert JS -->
    <script src="js/sweetalert.min.js"></script>
    
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-2.2.0.min.js"><\/script>')</script>
    
    <!-- Materialize JS -->
    <script src="js/materialize.min.js"></script>
    
    <!-- Malihu jQuery custom content scroller JS -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <!-- MaterialDark JS -->
    <script src="js/main.js"></script>
</body>
</html>