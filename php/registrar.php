<?php
require_once("saneo.php");
require_once("conexion.php");
$n=$_POST;
$clase=new registro();
$clase->regi($n);
class registro
{
private $con;
  function __construct()
  {
    $this->con=new Database();
  }
 //registro la cual agarra valores de la funcion sanetizar



public function validar()
{

}
 public function regi($p)
 {
   $saneo=new saneo($p);
   $r=$saneo->s();

   try{

   $es='e';//valor por defecto que se le agrega al typo de cliente que es e de standar
   $v=0; // estado del cliente el cual se agrega por defecto 0 inactivo el cual pssara a 1 cuando lo activen

   //consulta para verificar si ya existe el correo que van a rgistrar
   $consulta=$this->con->prepare('SELECT count(email) FROM usuarios WHERE email=:email');
   $consulta->bindParam(':email',$r[1]);
   $consulta->execute();

     if (!$consulta) {
       echo "no ejecuto";
     }else{
       $result = $consulta->fetchAll();
       $nf=$result;
       if ($nf[0][0]>0) {
         echo "ya existe";
       }else {
        $query = $this->con->prepare('INSERT INTO usuarios values (?,?,?,?,?,?)');
           $query->bindParam(1,$r[0]);
           $query->bindParam(2,$r[1]);
           $query->bindParam(3,$r[3]);
           $query->bindParam(4,$r[3]);
           $query->bindParam(5,$es);
           $query->bindParam(6,$v,PDO::PARAM_INT);
           $query->execute();

           if (!$query) {
            echo "mal";
            }else{
              header('location:../inicio.php');
            }
   }
 }



		} catch(PDOException $e) {

	        echo  $e->getMessage();

	    }
 }

}

 ?>
