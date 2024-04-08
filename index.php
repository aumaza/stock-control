<?php 	session_start();

      	error_reporting(E_ALL ^ E_NOTICE);
      	ini_set('display_errors', 1);

		include "connection/connection.php";
		include "core/lib/lib_system.php";
        include "password/lib_password.php";
        include "regestry/lib_regestry.php";



?>

<!DOCTYPE html>
<html lang="es">
<head>
  <title>Stock Control</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php skeleton(); ?>

 </head>
<body style="height:800px">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
  <form class="navbar-form navbar-left" action="#" method="POST">
    <div class="navbar-header">
    <?php
        if($conn){
            echo '<button class="btn btn-success navbar-btn" data-toggle="tooltip" title="Database Connection OK!">
                            <img src="core/img/ready-stock.png" class="myicon22" /> Stock-Control</button>';
        }else{
           echo '<button class="btn btn-danger navbar-btn blink" data-toggle="tooltip" title="Database Connection ERROR!">
                            <img src="core/img/ready-stock.png" class="myicon22" /> Stock-Control</button>';
        }
    ?>
    </div>
    </form>
    <form class="navbar-form navbar-right" action="#" method="POST">
    <ul class="nav navbar-nav">
      <li><button class="btn btn-primary navbar-btn" data-toggle="tooltip" title="Ingreso al Sistema" type="submit" name="login">
                <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Ingresar</button>
      </li>
      <li><button class="btn btn-default navbar-btn" data-toggle="tooltip" title="Recuperar Password" type="submit" name="password">
                <span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> Olvidé mi Password</button>
      </li>
      <li><button class="btn btn-default navbar-btn" data-toggle="tooltip" title="Registrarse en el Sistema" type="submit" name="signup">
                <span class="glyphicon glyphicon-flash" aria-hidden="true"></span> Registrarse</button>
       </li>
      <li><button class="btn btn-default navbar-btn" data-toggle="tooltip" title="Acerca de el Sistema" type="submit" name="about">
                <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Acerca de...</button>
      </li>
     </ul>
    </form>
  </div>
</nav>

<div class="container" style="margin-top:80px">

 <?php

    if($conn){

        if(isset($_POST['login'])){
            formLogIn();
        }

        // SE CREA EL OBJETO PASSWORD
        $onePassword = new Password();

        if(isset($_POST['password'])){
                $onePassword->formResetPassword();
        }

        // SE CREA EL OBJETO REGISTRO
        $oneRegistro = new Regestry();
        if(isset($_POST['signup'])){
            $oneRegistro->formRegestry();
        }

    }else{
        flyerConnFailure();
    }

 ?>

</body>
<script type="text/javascript" src="login.js"></script>
<script type="text/javascript" src="password/lib_password.js"></script>
<script type="text/javascript" src="regestry/lib_regestry.js"></script>
</html>
