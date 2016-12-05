<?php
require 'conexion.php';
$clase=new mos();
$res=$clase->mmo();

/**
 *
 */
class mos
{
private $con;
  function __construct()
  {
 $this->con=new Database();
  }
  public function mmo()
  {
     $stmt = $this->con->prepare("SELECT * FROM pv" );
      $stmt->execute();

      while ($row=$stmt->fetch()) {
        echo '<div class="co">
          <a  href="#" id="'.$row[0].'"><table>
            <tr>
             <td id="s">'.$row[4].'  </td>
             <td><label>logo</label></td>
              <td id="l">  '.$row[5].'</td>
            </tr>
          </table></a>
        </div>';
      }
  }
}

 ?>
