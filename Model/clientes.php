<?php
include_once('/xampp/htdocs/dasboard/db/database.php');

class Clientes extends DATABASE{

    //Nombre de la tabla
    private $table = 'clientes';

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
            $stm = $this->getConnection()->prepare("SELECT * FROM $this->table WHERE id= ?");
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
            $stm = $this->getConnection()->prepare("DELETE FROM $this->table WHERE id=?");
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
            $stm=$this->getConnection()->prepare("INSERT INTO $this->table (NOMBRE,TIPO_IDENTIDAD,NUM_IDENTIDAD,CEL,EMAIL,DIRECCION) VALUES (?,?,?,?,?,?)");
            
            $stm->execute([
                $_POST['name'],
                $_POST['t_ident'],
                $_POST['n_ident'],
                $_POST['cel'],
                $_POST['email'],
                $_POST['address'],
            ]);
        }catch(PDOException $e){
        echo $e->getMessage();
        }
      }

      // Actualiza un resgistro por Id
      public function update($id){
        try{
            $stm=$this->getConnection()->prepare("UPDATE $this->table SET NOMBRE= ? , TIPO_IDENTIDAD = ?, NUM_IDENTIDAD = ? ,CEL= ?,EMAIL= ?,DIRECCION= ? WHERE ID = ?");

            $stm->execute([
                $_POST['name'],
                $_POST['t_ident'],
                $_POST['n_ident'],
                $_POST['cel'],
                $_POST['email'],
                $_POST['address'],
                $id,
                
        ]);

        }catch(PDOException $e){
            echo $e->getMessage();
        }
      }




}