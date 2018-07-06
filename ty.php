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
                <li>
                    <a href="#" class="tooltipped waves-effect waves-light btn-Notification" data-position="bottom" data-delay="50" data-tooltip="Notifications">
                        <i class="zmdi zmdi-notifications"></i>
                        <span class="ContentPage-Nav-indicator bg-danger">2</span>
                    </a>
                </li>
            </ul>   
        </div>

        <!-- Notifications area -->
        <section class="z-depth-3 NotificationArea">
            <div class="full-width center-align NotificationArea-title">Notifications <i class="zmdi zmdi-close btn-Notification"></i></div>
            <a href="#" class="waves-effect Notification">
                <div class="Notification-icon"><i class="zmdi zmdi-accounts-alt bg-info"></i></div>
                <div class="Notification-text">
                    <p>
                        <i class="zmdi zmdi-circle tooltipped" data-position="left" data-delay="50" data-tooltip="Notification as UnRead"></i>
                        <strong>New User Registration</strong> 
                        <br>
                        <small>Just Now</small>
                    </p>
                </div>
            </a>  
            <a href="#" class="waves-effect Notification">
                <div class="Notification-icon"><i class="zmdi zmdi-cloud-download bg-primary"></i></div>
                <div class="Notification-text">
                    <p>
                        <i class="zmdi zmdi-circle-o tooltipped" data-position="left" data-delay="50" data-tooltip="Notification as Read"></i>
                        <strong>New Updates</strong> 
                        <br>
                        <small>30 Mins Ago</small>
                    </p>
                </div>
            </a>
            <a href="#" class="waves-effect Notification">
                <div class="Notification-icon"><i class="zmdi zmdi-upload bg-success"></i></div>
                <div class="Notification-text">
                    <p>
                        <i class="zmdi zmdi-circle tooltipped" data-position="left" data-delay="50" data-tooltip="Notification as UnRead"></i>
                        <strong>Archive uploaded</strong> 
                        <br>
                        <small>31 Mins Ago</small>
                    </p>
                </div>
            </a> 
            <a href="#" class="waves-effect Notification">
                <div class="Notification-icon"><i class="zmdi zmdi-mail-send bg-danger"></i></div>
                <div class="Notification-text">
                    <p>
                        <i class="zmdi zmdi-circle-o tooltipped" data-position="left" data-delay="50" data-tooltip="Notification as Read"></i>
                        <strong>New Mail</strong> 
                        <br>
                        <small>37 Mins Ago</small>
                    </p>
                </div>
            </a>
            <a href="#" class="waves-effect Notification">
                <div class="Notification-icon"><i class="zmdi zmdi-folder bg-primary"></i></div>
                <div class="Notification-text">
                    <p>
                        <i class="zmdi zmdi-circle-o tooltipped" data-position="left" data-delay="50" data-tooltip="Notification as Read"></i>
                        <strong>Folder delete</strong> 
                        <br>
                        <small>1 hours Ago</small>
                    </p>
                </div>
            </a>  
        </section>
        
        <!--shadows-->
        <div class="container" style="margin-bottom: 128px;">
            <div class="row">
                <h2 class="center-align">Shadow</h2>
                <hr>
                <div class="col s12">
                    <p class="z-depth-1 bg-danger" style="width: 90px; height: 90px; display: inline-block; margin: 10px;">z-depth-1</p>
                    <p class="z-depth-2 bg-danger" style="width: 90px; height: 90px; display: inline-block; margin: 10px;">z-depth-2</p>
                    <p class="z-depth-3 bg-danger" style="width: 90px; height: 90px; display: inline-block; margin: 10px;">z-depth-3</p>
                    <p class="z-depth-4 bg-danger" style="width: 90px; height: 90px; display: inline-block; margin: 10px;">z-depth-4</p>
                    <p class="z-depth-5 bg-danger" style="width: 90px; height: 90px; display: inline-block; margin: 10px;">z-depth-5</p>
                </div>
            </div>  
        </div>

        <!--headers-->
        <div class="container" style="margin-bottom: 128px;">
            <div class="row">
                <h2 class="center-align">Headers</h2>
                <hr>
                <div class="col s12">
                    <h1>Heading h1</h1>
                    <h2>Heading h2</h2>
                    <h3>Heading h3</h3>
                    <h4>Heading h4</h4>
                    <h5>Heading h5</h5>
                    <h6>Heading h6</h6>
                </div>
            </div>
        </div>
        
        <!--blockquote-->
        <div class="container">
            <div class="row">
                <h2 class="center-align">Blockquote</h2>
                <hr>
                <div class="col s12">
                    <blockquote>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </blockquote>
                </div>
            </div>
        </div>

        <!--flow text-->
        <div class="container">
            <div class="row">
                <h2 class="center-align">Flow text</h2>
                <hr>
                <div class="col s12">
                    <p class="flow-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
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