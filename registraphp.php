<?php
    $cn=  mysql_connect("localhost","root","");
    mysql_select_db("bdviajes",$cn);

    //Recepcion de datos
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $user= $_POST['usuario'];
    $passw=$_POST['pass1'];
    $rpassw=$_POST['pass2'];

    $checkemail=mysql_query("SELECT * FROM login WHERE USUARIO='$user'");
    $check_mail=mysql_num_rows($checkemail);
        if($passw==$rpassw){
	    if($check_mail>0){
	    echo '<script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
	    }else{
	    //require("connect_db.php");
	    mysql_query("INSERT INTO login VALUES('','$nombre','$apellido','$user','$passw')");
            //echo 'Se ha registrado con exito';
	    echo '<script language="javascript">alert("Usuario registrado con éxito");</script> ';
	    echo "<script>location.href='clientes.html'</script>";
	        }
	    }else{
	     echo '<script language="javascript">alert("Contraseña Incorrecta");</script>';
	    }


?>
