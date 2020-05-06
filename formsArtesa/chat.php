<?php
session_start();           
include "../head.php";

$id_user = $_GET['id_user'];
$user = $_SESSION['id_user'];
$sql = "UPDATE chat SET visto = 0 WHERE id_ar = '$user' AND id_user = '$id_user'";
						$ejecutar2 = $con->query($sql);
$consulta = "SELECT nombre, mensaje, fecha FROM chat WHERE id_user='$id_user' AND id_ar = '$user' ORDER BY id DESC";
                        $ejecutar = $con->query($consulta);
                        while($fila = $ejecutar->fetch_array()){
                    
     ?>
                    <div id="datos-chat">
                        <span style="color:darkcyan;"><?php echo $fila['nombre'];?>:</span>
                        <span style="color:gray;"><?php echo $fila['mensaje'];?> </span>
                         <span style="float:right;"><?php echo formatearFecha( $fila['fecha']);?></span>
                    </div>
                    <?php } ?>