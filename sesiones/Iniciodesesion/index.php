<?php
  $archivo = file_get_contents("usuario.txt");
  $var1 = strpos($archivo, "\r\n");
  $usuario = substr($archivo, 0, $var1);
  $var2 = strpos($archivo, "\r\n", $var1 + 1);
  $psw = substr($archivo, $var1 + 1, $var2 - $var1 - 1); // Corregido para extraer correctamente la contraseña
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-image: url('Estadio.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover; /* Ajuste para cubrir completamente el fondo */
            color: #ffffff; /* Blanco */
            text-align: center;
            padding: 50px;
        }

        .container {
            background-color: rgba(0, 0, 0, 0.6); /* Negro transparente */
            border-radius: 20px; /* Radio del recuadro */
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
            display: inline-block;
            padding: 20px;
            text-align: left;
            width: 300px;
            color: #ffffff; /* Blanco */
        }

       .titulo-sesion {
            background-color: #dc3545; /* Rojo Bayern München */
            color: #ffffff; /* Blanco */
            padding: 10px 0; /* Ajustamos el padding para separar el título del borde superior */
            text-align: center; /* Centramos el texto horizontalmente */
            border-radius: 20px;
            width: 100%; /* Aseguramos que el título ocupe todo el ancho del contenedor */
         }


        input[type=text], input[type=password] {
            border: 1px solid #007bff; /* Azul Bayern München */
            border-radius: 5px;
            margin: 10px 0;
            padding: 10px;
            width: calc(100% - 22px); /* 100% - padding & border */
        }

        input[type=button] {
            background-color: #007bff; /* Azul Bayern München */
            border: none;
            border-radius: 5px;
            color: #ffffff; /* Blanco */
            cursor: pointer;
            padding: 10px 20px;
        }

        input[type=button]:hover {
            background-color: #0056b3; /* Azul oscuro */
        }

        a {
            color: #28a745; /* Verde Bayern München */
            text-decoration: none;
        }

        .schnauzer-theme {
            background-image: url('schnauzer-icon.png'); /* Pedir ayuda con esto*/
            background-position: center bottom;
            background-repeat: no-repeat;
            background-size: 100px;
            padding-bottom: 100px;
        }
    </style>
</head>
<body>

<div class="container schnauzer-theme">
    <p class="titulo-sesion">Iniciar Sesión</p>
    <p>Usuario:</p>
    <input type="text" id="usuario">
    <p>Contraseña:</p>
    <input type="password" id="psw">
    <br>
    <input type="button" value="Iniciar sesión">
    <br>
    <p>Crear nuevo usuario-<a href="nuevo.html"> Click aquí</a></p>
    <p>Luis Felipe</p>
    <!-- <p><?php echo $usuario; ?></p>
    <p><?php echo $psw; ?></p> -->
</div>

</body>
</html>
