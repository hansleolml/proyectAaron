<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/pasajero.css">
        <title>Pasajeros</title>
    </head>
    <?php
        $cn=@mysql_connect("localhost","root","");
        mysql_select_db("bdviajes",$cn);
        $coda=$_GET["cod"];
        $pag=$_GET["x"];
        ?>
    <body>
        <center>
            <table class="pasaje">
                <tr><th>RUTA DE VIAJES
                <tr><td>Listado de Pasajeros         
            </table>
            
            <table>
            <div class="operacion">
                <form action ="inicio.html" method= "POST">
                 <p>
                 <fieldset>       
                 <legend>OPERACIONES - PASAJEROS</legend>	
                 <p>Lista de Pasajeros en el Viaje Nro: <?=$coda?><input  type="submit" value="Retornar"></p>
                 </fieldset>
                </form>
                
                <form action ="nuevopasajero.html" method= "POST">
                 <p>
                 <fieldset>       
                 <legend>OPERACIONES - COSTO</legend>
                 <p>Costo del Viaje: <?=$pag?></p>
                 <p>
                 </fieldset>
                </form>
            </div>
            </table>
            
            <table class="ver">         
                <tr><th>Boleto<th>Nombre<th>Asiento<th>Pago<th>Anular<th>Modificar      
                    <?php
                    $sql="select BOLNRO,Nom_pas,Nro_asi,pago from pasajeros"
                    . " where vianro='$coda' ";
                    $res= mysql_query($sql) or die(mysql_error());
                    while($f=mysql_fetch_array($res)){            
                    ?>   
                    <tr><td><?=$f[0]?><td><?=$f[1]?><td><?=$f[2]?><td><?=$f[3]?>
                    <td><a href="anular.php?cod=<?=$f[0]?>"><input type="submit" value="--Borrar--"></a>
                    <td><a href="modificar.php?cod=<?=$f[0]?>"><input type="submit" value="--Editar--"></a>    
                    <?php
                        }
                    ?>
                                   
                                  
            </table>
        </center>    

    </body>
</html>
