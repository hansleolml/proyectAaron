<?php
    $bol= rand(000026,000100);
    $ru= 100001;
    
    $host_db = "localhost";
    $user_db = "root";
    $pass_db = "";
    $db_name = "bdviajes";
    $tbl_name = "respuestas";
     

    $cn=mysqli_connect($host_db, $user_db, $pass_db, $db_name); 

    if(isset($_POST["nombre"])!=null){    
    $nom=$_POST["nombre"];
    $lugar=$_POST["asiento"];
    $tipo=$_POST["op"];
    $pago=$_POST["pago"];
    $sql="insert into pasajeros values($bol,$ru,'$nom',$lugar,'$tipo','$pago')";
    $res=  mysqli_query($cn,$sql)  or die('Error:'.mysqli_error());
    header("location:nuevopasajero.html");
    }
        
?>
