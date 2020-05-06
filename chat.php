<?php
session_start();           
include "head.php";

$id_ar = $_GET['id_as'];
$user = $_SESSION['id_user'];
$consulta = "SELECT nombre, mensaje, fecha FROM chat WHERE id_user='$user' AND id_ar = '$id_ar' ORDER BY id DESC";
                        $ejecutar = $con->query($consulta);
                        while($fila = $ejecutar->fetch_array()):
                    
     ?>
                    <div id="datos-chat">
                        <span style="color:darkcyan;"><?php echo $fila['nombre'];?>:</span>
                        <span style="color:gray;"><?php echo $fila['mensaje'];?> </span>
                         <span style="float:right;"><?php echo formatearFecha( $fila['fecha']);?></span>
                    </div>
                    <?php endwhile; ?>