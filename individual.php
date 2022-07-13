<?php
include_once './base/header.php';

if(isset($_GET['id'])){
    include_once './Model/inmueble.php';

    $inmueble = new Inmueble();
    $inm =$inmueble->getById($_GET['id']);
}


?>


<div class="container mt-5">

    <h2 class="display-4 text-warning"> Espectacular vivienda</h2>

    <div class="row mt-4" >

        <!-- CARRUSEL -->

        <div class="col col-9 mx-2" >

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                
                <?php
                    $array = explode(',',$inm->FOTOS);

                    for ($i=0; $i < count($array)-1; $i++) { 

                        if($i == 0){

                            echo "<div class='carousel-item active'>
                            <img src='./subidas/" . $array[$i]  ."'  class='d-block w-100' >;
                            </div>";
                        }else{
                            echo "<div class='carousel-item'>
                            <img src='./subidas/" . $array[$i]  ."'  class='d-block w-100' >;
                            </div>";
                        }
                    }


                ?>       
                
             
                </div>
                   
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


        </div>

        <div class="col  text-center">

            <div class="row">

                <div class="col ">

                    <h3 class="display-4 text-warning">
                       <strong>$ <?php echo  $inm->PRECIO ?>.000 </strong>  
                    </h3>

                </div>

                <hr>

                <div class="col">

                    <h4>N Habitaciones</h4>

                    <p><?php echo  $inm->N_HABIT ?></p>

                </div>

                <hr>

                <div class="col">
                    <h4>N Baños</h4>

                    <p><?php echo  $inm->N_BAÑOS ?></p>

                </div>

                <div class="col">
                    <h4>Garaje</h4>

                    <p><?php echo  $inm->GARAJE ?></p>

                </div>

                <hr>
                <div class="col">
                    <h4>Estrato</h4>

                    <p><?php echo  $inm->ESTRATO ?></p>

                </div>

                <hr>

                <div class="col">
                    <h4>Medidas</h4>

                    <p><?php echo  $inm->MEDIDAS ?> cm2</p>

                </div>
                
                <div class="col">
                    <h4>Cielo Razo</h4>

                    <p><?php echo  $inm->CIELO_RAZO ?></p>

                </div>
                
                <hr>
                <div class="col">

                <a class="btn btn-warning text-white" href="mailto:tucasa@inmobiliria.com">Contactenos</a>

                </div>

            </div>

        </div>

    </div>

    <div class="row my-4">
        <div class="col">
            <p class="text-warning"><strong> <?php echo  $inm->DESCRIPCION ?></strong></p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae numquam repudiandae nihil, quisquam id ducimus pariatur deserunt quaerat rem veniam voluptatibus dolorem in odio beatae, obcaecati atque! Assumenda, nam corrupti!</p>

            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae numquam repudiandae nihil, quisquam id ducimus pariatur deserunt quaerat rem veniam voluptatibus dolorem in odio beatae, obcaecati atque! Assumenda, nam corrupti!</p>
        
        </div>
    </div>

</div>


<?php
include_once './base/footer.php';
?>