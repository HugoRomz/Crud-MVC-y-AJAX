<?php

    require '../modelo/daoPaciente.php';

    $ob = new DaoPaciente();

    if (isset($_REQUEST["guardar"])) {
        $e = new Paciente($_REQUEST["id_pa"],$_REQUEST["nombre"],$_REQUEST["fec_nac"],$_REQUEST["correo"],$_REQUEST["tel"]);
        $ob->insertarPaciente($e);
        
    }

    if (isset($_REQUEST["modificar"])) {
        $e = new Paciente($_REQUEST["id_pa"],$_REQUEST["nombre"],$_REQUEST["fec_nac"],$_REQUEST["correo"],$_REQUEST["tel"]);
        $ob->modificarPaciente($e);
        
    }

    if (isset($_REQUEST["eliminar"])) {
        $e = new Paciente($_REQUEST["id_pa"],$_REQUEST["nombre"],$_REQUEST["fec_nac"],$_REQUEST["correo"],$_REQUEST["tel"]);
        $ob->eliminarPaciente($e);
       
    }


    if (isset($_REQUEST["m"])) {
        $r1=$ob->mostrarPaciente();
        $a1=array();
        while ($row=mysqli_fetch_array($r1)) {
            $a1[]=$row;
        }
        $jason1=json_encode($a1);
        echo $jason1;
    }


    if (isset($_REQUEST["buscar"])) {

        $id = $_POST['id'];
        
        $r1=$ob->buscarPaciente($id);

        $a1=array();

        while ($row=mysqli_fetch_array($r1)) {
            $a1[]=$row;
        }

        $jason2=json_encode($a1[0]);
        echo $jason2;        


    }


    


?>