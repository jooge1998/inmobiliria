

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
        
    
        <form action="./ruteador.php?controller=Inmueble&action=create" method="POST" enctype="multipart/form-data">

            <h4 class="mb-3 text-center">Agregar Inmueble</h4>

            <input class="form-control " type="text" name="direccion"
                placeholder="Direccion" required>
            <div class="d-flex justify-content-center my-3">

                <input class="form-control " type="text" name="barrio" placeholder="Barrio" >

                <input class="form-control mx-3" type="text" name="lote" placeholder="Lote">

                <input class="form-control " type="text" name="precio"  placeholder="Precio" required>

            </div>

           
            <textarea class="form-control mb-3" name="descripcion" id="" cols="100" rows="4" placeholder='descripcion'></textarea>
    

            <input class="form-control mb-3" type="text" name="estrato" placeholder="Estrato" >

            <input class="form-control mb-3" type="number" name="habitaciones" placeholder="# de Habitaciones" >

            <input class="form-control mb-3" type="number" name="baño" placeholder="# de baños" >

            <input class="form-control mb-3" type="number" name="medidas" placeholder="Medidas" >
            
            <label class="mb-3" for="">
                Garaje
                <input type="checkbox" name="garaje" value="si">
            </label>

            <br>    
            <label  class="mb-3" for="">
                Cielo razo
                <input type="checkbox" name="cielo" value="si">
            </label>

            <div class="mb-3">
                <input required class="form-control" type="file" name="file[]" id="exampleInputFile" multiple>
            </div>
            
            <input type="submit" name="agregar" value="Agregar" class="btn btn-primary my-2">       
        </form>

            </div>
<!-- FOOTER -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
