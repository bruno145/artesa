<?php
    include "head.php";
    $id_al = $_GET['id_ar'];
    session_start();
?>


<HTML>
    <HEAD>
        <TITLE>Chat Artesania de mi pueblo</TITLE>
      <link rel="stylesheet" type="text/css" href="estilo.css">

        
        <script type="text/javascript">
            function ajax(){
                var req = new XMLHttpRequest();
                
                req.onreadystatechange = function(){
                    if(req.readyState == 4 && req.status == 200){
                        document.getElementById('chat').innerHTML = req.responseText;
                    }
                }
                req.open('GET','chat.php?id_as=<?php echo $id_al; ?>',true);
                req.send();
            }
          
         
            setInterval(function(){ajax();}, 1000);
        </script>
        
        
    </HEAD>

    <BODY onload="ajax();">
       <p><?php 
                    if (isset($_SESSION['username']))
                        echo $_SESSION['username']; 
                    else
                        header("location: ../index.html");
                ?></p> 
       <a href="formsArtesa/catalogo.php">Volver a catalogo</a>
       
        <div id="contenedor"> 
            <div id="caja-chat">
                <div id="chat"></div>
            </div>
            <form method="post" action="mensajeria.php?id_ar=<?php echo $id_al; ?>">
                <textarea name="mensaje" placeholder="ingresa un mensaje"></textarea>
                <input type="submit" name="enviar" value="ENVIAR">
            </form>
            <?php
            if (isset($_POST['enviar'])){
                $nombre=$_SESSION['username'];
                $mensaje = $_POST['mensaje'];
                $id_user = $_SESSION['id_user'];
                $visto = '1';
            if ($mensaje=="") {
                
            }else{   

                $consulta = "INSERT INTO chat (nombre, mensaje, id_user, id_ar, visto) VALUES ('$nombre','$mensaje','$id_user','$id_al','$visto')";
                $ejecutar = $con->query($consulta);
               } 
                
            }
            
            ?>
            
            
        </div>
        
    </BODY>
</HTML>