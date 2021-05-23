<?php
    $conexion = mysqli_connect('localhost', 'root', '', 'kavak') or die(mysql_error($mysqli));

    insertar($conexion);

    function insertar($conexion){
        $producto = $_POST['producto'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $precio = $_POST['precio'];
        $color = $_POST['color'];
        $foto = addslashes( file_get_contents($_FILES['foto']['tmp_name']));

        $consulta = "INSERT INTO datos (producto, marca, modelo, precio, color, foto) VALUES ('$producto', '$marca', '$modelo', '$precio', '$color', '$foto')";
        
        if ($consulta){
            echo"Los datos se subieron con exito";
        }
        else{
            echo"Error al subir los datos";
        }
        
        mysqli_query($conexion, $consulta);
        mysqli_close($conexion);
    }
?>

<a class="btn btn-primary" href="registro.html" role="button">Regresar</a>