<?php
    if(!file_exists("usuario.txt")){
        file_put_contents("usuario.txt", "");
    }

    if(isset($_GET['usuario'])&& isset($_GET['psw'])){
        $usuario=$_GET['usuario'];
        $psw=$_GET['psw'];
        $TEXTO=$usuario."\r\n".$psw."\r\n";
        file_put_contents("usuario.txt",$TEXTO);
    }
?>
      
<html>
  <head>
    <meta http-equiv="refresh" content="0; URL=exito.html"/>
  </head>
</html>