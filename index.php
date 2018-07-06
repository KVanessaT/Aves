
<!DOCTYPE html>
<html lang="es">
<head>
	
	<title>Inicio Session</title>
    <?php
     include './inc/links.php'; 
    ?>
     <link rel="stylesheet" href="css/login.css"/>
    <script src="js/SendForm.js"></script>
</head>
<body class="full-cover-background"   style="background-image:url(assets/img/fondo.jpg);" >
    <div class="form-container">
    <p class="text-center" style="margin-top: 20px;">
           <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
       </p>
       <h4 class="text-center all-tittles" style="margin-bottom: 10px;">inicia sesión con tu cuenta</h4>
        <form action="process/login.php" method="post" class="form_SRCB" data-type-form="login" autocomplete="off">
        <div class="group-material-login">
                <input id="UserName" type="text" class="validate">
                <label for="UserName"><i class="zmdi zmdi-account"></i>&nbsp; Nombre :</label>
            </div>
            <div class="group-material-login">
                <input id="Password" type="password" class="validate">
                <label for="Password"><i class="zmdi zmdi-lock"></i>&nbsp; Contraseña :</label>
            </div>
            <button class="waves-effect waves-teal btn-flat">Ingresar  al Sistema &nbsp; <i class="zmdi zmdi-mail-send"></i></button>
        </form>
        <div class="divider" style="margin: 5px 0;"></div>
        <a href="home.php">Crear cuenta</a>
    </div>
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