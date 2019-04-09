<?php
    $cod=$_REQUEST["cod"];
    $cn=@mysql_connect("localhost","root","");
    mysql_select_db("bdviajes",$cn);
    $sql="delete from pasajeros where bolnro='$cod'  ";
    mysql_query($sql,$cn) or die(mysql_error());
    header("pasajero.php");
?>
