<?php
include_once './base/header.php';
?>

<div class="container mt-5">

    <div class="d-flex justify-content-end">

        <a class="btn btn-primary " href="agregar.php"> Agregar</a>
    </div>

<?php 

include_once './Model/inmueble.php';

$inm = new Inmueble();

foreach ($inm->getAll() as $key => $value) {

    echo "
    
    <div class='row border p-2 rounded my-3'>


    <div class='col col-4'>
        <img src='./subidas/".explode(',',$value->FOTOS)[0] ."' '  style='height: 200px; '  >
    </div>

    <div class='col col-3 mt-2'>
        <h3 class='text-warning'>". $value->DIRECCION ." " . $value->BARRIO ."</h3>
        <p>". $value->DESCRIPCION  . "</p>
    </div>

    <div class='col col-2 mt-2'>
        <h4 class='text-warning'> <strong>Precio</strong> </h4>
        <p>$". $value->PRECIO  . " .000</p>

        <hr>
        
        <h4 class='text-warning mt-2'> <strong># Habitaciones</strong> </h4>
        <p>". $value->N_HABIT  . "</p>


    </div>

    <div class='col col-2 py-2 mx-auto'>
        <a class='btn btn-success  ' href='./modificareal.php?id=$value->ID'> Modificar</a>

        <a class='btn btn-danger my-3' href='./ruteador.php?controller=Inmueble&action=delete&id=$value->ID''> Eliminar</a>

        
    <a class='btn btn-primary' href='./individual.php?id=".$value->ID."' style='text-decoration:none;'>Ver mas..
    </a>

    </div>

</div>";
}
 
?>



</div>