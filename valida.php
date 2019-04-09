<?php
session_start();
   $cn=  mysql_connect("localhost","root","");
   mysql_select_db("bdviajes",$cn);
   
   $user=$_POST["usuario"];
   $pass=$_POST["pass"];
   
   $sql=mysql_query("SELECT * FROM login WHERE USUARIO='$user'");
	if($f=mysql_fetch_array($sql)){
		if($pass==$f['Passwd']){
			$_SESSION['Id']=$f['Id'];
			$_SESSION['Usuario']=$f['Usuario'];
			header("Location: index.html");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='clientes.html'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='clientes.html'</script>";	

	}
   
?>