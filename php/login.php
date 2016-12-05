
<?php
require_once("saneo.php");
require_once("conexion.php");
$u=$_POST;
$clase=new login();
 $r2=$clase->entrar($u);


class login
{
private  $user;
private  $pas;
//conectamos a la bas de datos
 public  function __construct()
  {
    $this->con = new Database();
    $this->user;
    $this->pas;
  }
  //aqui sanetizamos los campos de logi

  //aqui hacemos la consulta al bd
  public function entrar($p)
  {
     $saneo=new saneo($p);
     $r=$saneo->s();
    try{



     $stmt = $this->con->prepare("SELECT * FROM usuarios WHERE email=:usernameEmail  AND pass=:hash_password");

       $stmt->bindParam("usernameEmail", $r[0],PDO::PARAM_STR);
       $stmt->bindParam("hash_password", $r[1],PDO::PARAM_STR) ;
       $stmt->execute();
       $consul=$stmt->fetchAll();
       $count=$stmt->rowCount();
    if ($count==1){
      @session_start();
       $_SESSION['nombre']=$consul[0]['nombre'];
       $_SESSION['telefono']=$consul[0]['telefono'];
       $_SESSION['email']=$consul[0]['email'];
      header('Location: ../inicio.php');

    }else{
      //header('Location: ../index.php');
      $_SESSION['error']="Error de ingreso";
        header('Location:../index.php');
    }
    }
     catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
       }
   }
}

 ?>
