 <!--------------Manda a llamar a la BD para las consultas---------------->
 <?php 
        $conexion=mysqli_connect('localhost','root','','kavak'); 
    ?>
    <!----------------------------------------------------------------------->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Comprar</title>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/info.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/registro-desplegabe.css">
    <link rel="stylesheet" href="css/bxslider.css">
    
    

    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
   
    <div class="logo logo_main" > <a href="index.html">Kavak 2.0 </a> </div>
    
    <div class="nav">
        <div class="wrap">
            <div class="logo logo_small">Kavak 2.0</div>
            <nav>
                <ul>
                    <li><a href="#">Comprar un auto</a></li>
                    <li><a href="explorar.php">Explorar</a></li>
                    <li><a href="registro.html">Registrar producto</a></li>
                   
                    <li><a href="acerca.html"> Acerca de KAVAK</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"  data-toggle="dropdown" aria-expanded="false">
                        Contáctanos
                        </a>
                        <ul class="dropdown-menu" class="nav nav-pills">
                          <li><a class="dropdown-item" href="contacto.html">Habla con nosotros</a></li>
                          <li><a class="dropdown-item" href="sedes.html">Sedes</a></li>
                       </ul>
                    </li>

                    <li><a id="btn-abrir-popup" class="btn-abrir-popup" href="#">Registrate</a>
                        <div class="overlay" id="overlay">
                            <div class="popup" id="popup">
                                <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                                <h3>SUSCRIBETE</h3>
                                <h4>y recibe un cupon de descuento.</h4>
                                <form action="">
                                    <div class="contenedor-inputs">
                                        <input type="text" placeholder="Nombre">
                                        <input type="email" placeholder="Correo">
                                    </div>
                                    <input type="submit" class="btn-submit" value="Suscribirse">
                                </form>
                            </div>
                        </div>     
                    </li>
                </ul>           
            </nav>
        </div>
    </div>

    
    <!---------------------------------------------------------------------
                      Apartado de las tablas de stock
    ---------------------------------------------------------------------->
    
    
    <center>
        <table border="2">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Precio</th>
                    <th>Color</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php
            
                    $query = "SELECT * FROM datos";
                    $resultado = $conexion->query($query);
                    while($row = $resultado->fetch_assoc()){
                ?>
                    <tr>
                        <td><?php echo $row ['Producto']; ?></td>
                        <td><?php echo $row ['Marca']; ?></td>
                        <td><?php echo $row ['Modelo']; ?></td>
                        <td><?php echo $row ['Precio']; ?></td>
                        <td><?php echo $row ['Color']; ?></td>
                        <td><img src="data:image/jpg;base64,<?php echo base64_encode($row['Foto']);?>"></td>
                    </tr>
                <?php
                    }
                ?>
                
            </tbody>
        </table>
    </center>
    
    
    
    
    
    
    
    
    
    <i class="fas fa-ellipsis-v btn-menu"></i>



    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/popup.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/jquery.bxslider.js"></script>
    <script src="js/bxslider.js"></script>
    

</body>
</html>