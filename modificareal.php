

<!-- HEADER -->

<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Formulario Acta</title>
    
</head>

<body>
    <!-- CONTENT -->

<?php

include_once ('./base/header.php')
?>

    <div class="container  mt-5" style="width:50% ;">
        
    
        <form action="./ruteador.php?controller=Inmueble&action=update" method="POST" enctype="multipart/form-data">

            <h4 class="mb-3 text-center">Modificar Inmueble</h4>

<?php
include_once './Model/inmueble.php';
$inm = new Inmueble();
$inmueble = $inm->getById($_GET['id']);
#print_r($inmueble);     
?>

            
                <p class=""><strong>Direccion</strong> </p>     

                <input class="form-control " type="text" name="direccion" value="<?php echo $inmueble->DIRECCION ?>" required>
                     
                <p class=""><strong>Barrio</strong> </p> 

                <input class="form-control " type="text" name="barrio" value="<?php echo $inmueble->BARRIO ?>" >


                <p class=""><strong>Lote</strong> </p> 
                
                <input class="form-control" type="text" name="lote" value="<?php echo $inmueble->LOTE ?>">
                
                <p class=""><strong>Precio</strong> </p> 

                <input class="form-control " type="text" name="precio"  value="<?php echo $inmueble->PRECIO ?>" required>


            <p class=""><strong>Descripcion</strong> </p> 
            <textarea class="form-control mb-3" name="descripcion" id="" cols="100" rows="4" ><?php echo $inmueble->DESCRIPCION ?>              
            </textarea>
    
            <p class=""><strong>Estrato</strong> </p> 
            <input class="form-control mb-3" type="text" name="estrato" value="<?php echo $inmueble->ESTRATO ?>">

            <p class=""><strong># Habitaciones</strong> </p> 
            <input class="form-control mb-3" type="number" name="habitaciones" value="<?php echo $inmueble->N_HABIT ?>">

            <p class=""><strong># Baños</strong> </p> 
            <input class="form-control mb-3" type="number" name="baño" value="<?php echo $inmueble->N_BAÑOS ?>">

            <p class=""><strong>Medidas</strong> </p> 
            <input class="form-control mb-3" type="number" name="medidas" value="<?php echo $inmueble->MEDIDAS ?>">
            
            <label class="mb-3" for="">
                Garaje
                <input type="checkbox" name="garaje" value='si' <?php echo $inmueble->GARAJE == 'si' ? 'checked': 'unchecked'; ?>>
            </label>

            <br>    
            <label  class="mb-3" for="">
                Cielo razo
                <input type="checkbox" name="cielo" value='si' <?php echo $inmueble->CIELO_RAZO == 'si' ? 'checked': 'unchecked'; ?> >
            </label>

            <div class="mb-3">
                <input class="form-control" type="file" name="file[]" id="exampleInputFile" multiple >
            </div>

            <input type="hidden" name="id" value="<?php echo $inmueble->ID?>">

            <input type="hidden" name="fotos" value="<?php echo $inmueble->FOTOS?>">


            <?php
            $array = explode(',',$inmueble->FOTOS);
            for ($i=0; $i < count($array)-1; $i++) { 
                echo "<img class='my-2 mx-1 rounded' src='./subidas/". $array[$i]."' style='height: 100px;' >";
            }
            ?>

            <br>
            <input type="submit" name="editar" value="Modificar" class="btn btn-success my-3">       
        </form>

            </div>
<!-- FOOTER -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
