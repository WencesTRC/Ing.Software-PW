<?php
    $conexion = mysqli_connect('localhost', 'root', '', 'kavak') or die(mysql_error($mysqli));

    insertar($conexion);

    function insertar($conexion){
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];

        $consulta = "INSERT INTO registro (nombre, correo) VALUES ('$nombre', '$correo')";
    
        mysqli_query($conexion, $consulta);
        mysqli_close($conexion);
    }

    header("location:index.html");
?>
