<?php
session_start();
require_once('conexion.php');
require_once('saneo.php');
$p=$_POST;
$clase=new sv();
$r=$clase->svi($p);

 /**
  *
  */
 class sv
 {
  private $con;
  private $s;
   function __construct()
   {
     $this->con=new Database();

   }
   public function svi($p)

   {

    $sa=new saneo($p);
     $res=$sa->s();
     $query = $this->con->prepare('INSERT INTO svi (email,nombre,lugar_s,lugar_l,fecha) values (:email,:nombre,:lugar_s,:lugar_ll,:fecha)');

        $query->bindParam(':email',$_SESSION['email']);
        $query->bindParam(':nombre',$_SESSION['nombre']);

        $query->bindParam(':lugar_s',$res[0]);
        $query->bindParam(':lugar_ll',$res[1]);
        $query->bindParam(':fecha',$res[2]);
        $query->execute();
        if (!$query) {
          echo 0;
        }else{
          $e=$query->rowCount();
           if ($e==1) {
             echo $res[0];
           }else {
             echo 0;
           }
        }
   }

 }

 ?>
