<?php

class ControllerInmuebles{

    #crea un nuevo cliente
    public function Create(){
        
        require_once  ("./Model/inmueble.php");

        $clientes = new Inmueble();

        #verifica si el boton agregar con el name salvar fue presionado
        if(isset($_POST['agregar'])){
            #llama al metodo create
            $clientes->create();

            header('location: ./homeClientes.php');
        }

    }

    public function Delete(){

        require_once  ("./Model/Inmueble.php");

        $inmuebles = new Inmueble();

        #verifica si hay una solicitud de tipo de get
        if(isset($_GET['id'])){
            #llama al metodo delete delete
            $inmuebles->delete($_GET['id']);

            header('location: ./homeClientes.php');
        }
    }

    public function Read(){
        require_once  ("./Model/Inmueble.php");

        $inmuebles = new Inmueble();

        #recorre todos los datos en la base de datos
        foreach ($inmuebles->getAll() as $key => $value) {

           echo "<div class='col'>
           <a href='./individual.php?id=".$value->ID."' style='text-decoration:none;'>
            <div class='card mb-3'>
            <img  src='./subidas/".explode(',',$value->FOTOS)[0] ."' class='card-img-top' >
            <div class='card-body'>
            <h5 class='card-title text-warning'>" . $value->DIRECCION ." " . $value->BARRIO . "</h5>
            <p class='card-text text-secondary'>" . $value->DESCRIPCION ."</p>
            <p class='card-text'><small class='text-muted'>Last updated 3 mins ago</small></p>
            </div>
            </a>
            </div>";
           
        }
    }

    
    public function Update(){

        require_once  ("./Model/Inmueble.php");

        $inmuebles = new Inmueble();

        #verifica si hay una solicitud de tipo de get
        if(isset($_POST['editar'])){
            echo "entro";
            #llama al metodo delete delete
            $inmuebles->update();

            header('location: ./Modificar.php');
        }
        
    }

     #imprime el numero de registros en tabla clientes
     public function getAll(){
        require_once("/xampp/htdocs/dasboard/Model/Clientes.php");

        $clientes = new Clientes();
        echo count($clientes->getAll());
        
    }

}
