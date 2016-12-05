<?php
/**
 *
 */
class  saneo
{
  private $s;
  function __construct($a)
  {
$this->s=$a;
  }
  public function s()
  {
  $a=array();
     foreach ($this->s as $valor) {
       switch ($valor) {
         case is_numeric($valor):
               $valor=filter_var($valor,FILTER_SANITIZE_NUMBER_INT);
               array_push($a,$valor);
         break;
         case is_string($valor):
                $valor=filter_var($valor,FILTER_SANITIZE_STRING);
                array_push($a,$valor);
         break;
         default:

           break;
       }

     }
  return $a;
  }
}

 ?>
