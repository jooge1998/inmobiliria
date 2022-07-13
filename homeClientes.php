<?php
include_once './base/header.php'
?>

<div class="container mt-5 ">

    <h1 class="display-4 text-warning">Buscando vivienda?</h1>

    <hr>

    <div class="row mt-5 text-center">

    <?php

include_once './Controllers/controllersInmueble.php';

$inmuebles = new ControllerInmuebles();
$inmuebles->Read();
    ?>


        </div>
    </div>
    

</div>