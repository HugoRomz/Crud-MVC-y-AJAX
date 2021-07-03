<?php

require 'conexion.php';
require 'paciente.php';

class DaoPaciente extends Conexion
{
    function __construct()
    {
        parent::__construct();
    }

      function mostrarPaciente(){
          $res=$this->con->query("select * from paciente");
          return $res;
      }

      function buscarPaciente($pac){

        $b=$pac;
        $res=$this->con->query("select * from paciente where id=$b");
        return $res;
    }
      
    
      function insertarPaciente($pac){
        $para=$this->con->prepare("insert into paciente(id,nombre,fec_nac,correo,tel) values (?,?,?,?,?)");
        $para->bind_param('issss',$a,$b,$c,$d,$e);

        $a='';
        $b=$pac->getNombre();
        $c=$pac->getFec_nac();
        $d=$pac->getCorreo();
        $e=$pac->getTel();

        $para->execute();
    }

    function modificarPaciente($pac){
        $para=$this->con->prepare("update paciente set nombre=?,fec_nac=?,correo=?,tel=? where id=?");
        $para->bind_param('ssssi',$a,$b,$c,$d,$e);

        $a=$pac->getNombre();
        $b=$pac->getFec_nac();
        $c=$pac->getCorreo();
        $d=$pac->getTel();
        $e=$pac->getId_pa();
        $para->execute(); 
        
    }
    function eliminarPaciente($pac){
        $para=$this->con->prepare("delete from paciente where id=?");
        $para->bind_param('i',$e);
        $e=$pac->getId_pa();
        $para->execute(); 
    }

}

?>