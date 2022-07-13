<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>INMOBILIARIA</title>

   <!-- CSS Bootstrap -->
   <link rel="stylesheet" href="https://empleo.academiasinu.edu.co/css/bootstrap.min.css">

   <!-- CSS Site -->
<link rel="stylesheet" href="./Resource/style.css">
 </head>

<body>
   <div class="bg-logn">

      <div class="row-two">
         <div class="wrap-right col-12 col-md-7 col-lg-7">
            <img class="bg-index" style="height: 100vh;" src="./Resource/IMG/img.jpg" alt="" srcset="">
         </div>
         <div class="wrap-left col-12 col-md-5 col-lg-5">
            <ul class="nav justify-content-center">
               <li class="nav-item ml-auto">
                  <a class="nav-link" href="./homeClientes.php">Pagina Inicio</a>
               </li>
            </ul>
            <div class="content-form">

            <?php
include_once './Model/login.php';

$login = new Login();

$login->recibe_Datos();
?>

               <hr>
               <h5 class="mt-4 mb-4"><strong>Login</strong></h5>

               <form method="POST" action="">
                
                  <div class="form-group">
                     <label for="exampleInputEmail1">Correo electrónico:</label>

                     <input type="email" class="form-control " name="email" required autocomplete="email" autofocus>

                  </div>

                  <div class="form-group">
                     <label for="exampleInputPassword1">Contraseña:</label>

                     <input  type="password" class="form-control " name="password" required autocomplete="current-password">

                  </div>


                  <div class="mt-3 mb-2">
                     <button type="submit" class="btn btn-secondary btn-success t-medium">Iniciar sesión</button>
                  </div>
                  <div class="mt-2 mb-5"><a href="https://empleo.academiasinu.edu.co/password/reset?action=postulante" class="link-new"><small>No recuerdo mi contraseña</small></a></div>

               </form>
               <div class="mt-3 mb-2">
                  <div class="mt-2">¿No tienes cuenta todavía? <a href="/register" class="link-new"><strong>Registrarme</strong></a></div>
               </div>

            </div>
         </div>

      </div>
   </div>

   <!-- JS Bootstrap -->
   <script src="https://empleo.academiasinu.edu.co/js/jquery-3.3.1.slim.min.js"></script>
   <script src="https://empleo.academiasinu.edu.co/js/popper.min.js"></script>
   <script src="https://empleo.academiasinu.edu.co/js/bootstrap.mim.js"></script>
   <!-- Icons Fontawesome-->
   <script src="https://empleo.academiasinu.edu.co/js/kit_fontaweson.js"></script>
   <script src="https://empleo.academiasinu.edu.co/js/sweetalert2.js"></script>


</body>