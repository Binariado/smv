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
     $stmt = $this->con->prepare("SELECT * FROM svi" );
      $stmt->execute();

      while ($row=$stmt->fetch()) {
        echo '<div class="co">
          <a  href="#" id="'.$row[0].'"><table>
            <tr>
              <td>'.$row[3].'</td>
              <td><img src="img/ir2.png" alt="" /></td>
              <td>'.$row[4].'</td>
            </tr>
          </table></a>
        </div>';
      }
  }
}

 ?>
