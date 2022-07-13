<?php

//clase crea un nuevo rol en la tabla usuario

include_once('./db/database.php');

class Inmueble extends DATABASE{

    //Nombre de la tabla
    private $table = 'inmueble';


    //Obtiene todos registros de la tabla
    public function getAll(){
        try
        {
            $stm = $this->getConnection()->prepare("SELECT * FROM $this->table");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch (PDOException $e)
        {
            die($e->getMessage());
        }
    }

    //Obtiene un registro por Id
    public function getById($id){
        try
        {
            $stm = $this->getConnection()->prepare("SELECT * FROM $this->table WHERE ID= ?");
            $stm->execute([$id]);
            return $stm->fetch(PDO::FETCH_OBJ);
        }
        catch (PDOException $e)
        {
            die($e->getMessage());
        }
    }

    //Elimina un registro por Id
    public function delete($id){
        try
        {
            $stm = $this->getConnection()->prepare("DELETE FROM $this->table WHERE ID=?");
            $stm->execute([$id]);
        }
        catch (PDOException $e)
        {
            die($e->getMessage());
        }
    }

    // Inserta un nuevo registro en la tabla
    public function create(){
        try{
            $stm=$this->getConnection()->prepare("INSERT INTO $this->table (DIRECCION,DESCRIPCION,PRECIO,LOTE,BARRIO,ESTRATO,N_HABIT,GARAJE,N_BAÑOS,MEDIDAS,CIELO_RAZO,FOTOS) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
            
            $array = $_FILES['file']['name'];
            $res = "";

            for ($i=0; $i < count($array); $i++) { 
                $res .= $array[$i] . ",";
                            // Cargando el fichero en la carpeta "subidas"
move_uploaded_file($_FILES['file']["tmp_name"][$i], "subidas/".$array[$i]);

            }

            echo $res;
            #print_r(implode($_FILES['file']['name'])) ;

#verifica los checkbox

$garaje = $_POST['garaje'] == 'si' ? 'si' : 'no';
$cielo_razo = $_POST['cielo'] == 'si' ? 'si' : 'no';

            $stm->execute([
                $_POST['direccion'],
                $_POST['descripcion'],
                $_POST['precio'],
                $_POST['lote'],
                $_POST['barrio'],
                $_POST['estrato'],
                $_POST['habitaciones'],
                $garaje,
                $_POST['baño'],
                $_POST['medidas'],
                $cielo_razo,
                $res
            ]);

        }catch(PDOException $e){
        echo $e->getMessage();
        }
      }

      // Actualiza un resgistro por Id
      public function update(){
        try{
            $stm=$this->getConnection()->prepare("UPDATE inmueble SET DIRECCION = ?,DESCRIPCION = ? , PRECIO = ? , LOTE = ? , BARRIO = ? , ESTRATO =? , N_HABIT = ? ,GARAJE =? ,N_BAÑOS = ? , MEDIDAS = ? , CIELO_RAZO = ? , FOTOS = ? WHERE ID = ?");

            $array = $_FILES['file']['name'];

            print_r($array) ;
            $res = "";

            #verifica los checkbox
$garaje = $_POST['garaje'] == 'si' ? 'si' : 'no';
$cielo_razo = $_POST['cielo'] == 'si' ? 'si' : 'no';
                        
            if($array[0] != "") {

                for ($i=0; $i < count($array); $i++) { 
                    $res .= $array[$i] . ",";
                                // Cargando el fichero en la carpeta "subidas"
                move_uploaded_file($_FILES['file']["tmp_name"][$i], "subidas/".$array[$i]);
                }
                
            }else {
                $res = $_POST['fotos'];    
            }

            $stm->execute([
                $_POST['direccion'],
                $_POST['descripcion'],
                $_POST['precio'],
                $_POST['lote'],
                $_POST['barrio'],
                $_POST['estrato'],
                $_POST['habitaciones'],
                $garaje,
                $_POST['baño'],
                $_POST['medidas'],
                $cielo_razo,
                $res,
                $_POST['id']
        ]);

        }catch(PDOException $e){
            echo $e->getMessage();
        }
      }




}