<?php
    $host_db = "localhost";
    $user_db = "root";
    $pass_db = "";
    $db_name = "bdviajes";
    $tbl_name = "respuestas";
     

    $conexion=new mysqli($host_db, $user_db, $pass_db, $db_name); 

    $nombre=$_POST['nombre'];
    $destino=$_POST['destino'];
    $fecha= $_POST['fecha'];
    $pago=$_POST['pago'];
    
    $query = "INSERT INTO chofer (chonom,chofin,destino)
           VALUES ('$_POST[nombre]','$_POST[fecha]','$_POST[destino]')";

    if ($conexion->connect_error) {
        die("La conexion falló: " . $conexion->connect_error);
    }   
    else{
        if ($conexion->query($query) === TRUE) {
     
     
        echo "datos ingresados correctmente";
        }

        else {
        echo "Error al ingresar chofer"; 
       }
    }
    
?>    




