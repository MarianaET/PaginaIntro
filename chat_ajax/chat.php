<?php   
    include "db.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Chat</title>
        <link rel="stylesheet" type="text/css" href="estiloschat.css">
        <link href="https://fonts.googleapis.com/css?family=Mukta+Vaani&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="contenedor"">
            <div id="caja-chat">
                <div id="chat">
                    <?php
                        $consulta = "SELECT * FROM chat ORDER BY id DESC";
                        $ejecutar = $conexion->query($consulta);
                        while($fila = $ejecutar->fetch_array()):
                    ?>
                    <div id="datos-chat">
                        <span style="color: #1c62c4"><?php echo $fila['nombre']; ?>:</span>
                        <span style="color: #848484"><?php echo $fila['mensaje']; ?></span>
                        <span style="float: right"><?php echo $fila['fecha']; ?></span>
                    </div>
                        <?php endwhile; ?>
                </div>
            </div>
            <form method="POST" action="chat.php">
                <input type="text" name="nombre" placeholder="Ingresa tu nombre">
                <textarea name="mensaje" placeholder="Ingresa tu mensaje"></textarea>
                <input type="submit" name="enviar" value="Enviar">
            </form>
        </div>
    </body>
</html>
