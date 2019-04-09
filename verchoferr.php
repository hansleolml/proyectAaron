<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/pasajero.css">
        <title>Trabajadores</title>
    </head>
    <?php
        $cn=@mysql_connect("localhost","root","");
        mysql_select_db("bdviajes",$cn);
        $coda=$_GET["cod"];
        $nom=$_GET["x"];
    ?>
    <body>
        <center>
            <table class="pasaje">
                <tr><th>TRABAJADORES DE INTER - PERÚ
                <tr><td>Hoja de ruta del chofer <?=$nom?>
            </table>

            <table class="ver">
                <tr><th>Viaje<th>Fecha<th>Ruta<th>Pago
                    <?php
                    $sql="select c.vianro, viafch, rutnom, pago_cho from viaje c"
                    . ", ruta n where c.rutcod=n.rutcod and idcod='$coda' ";
                    $res=  mysql_query($sql) or die(mysql_error());
                    $sum=0;
                    while($f=mysql_fetch_array($res)){
                    $sum=$sum+$f[3];
                    ?>
                    <tr><td><?=$f[0]?><td><?=$f[1]?><td><?=$f[2]?><td><?=$f[3]?>
                    <?php
                        }
                    ?>
                    <tr><td colspan="3">Total pago<td><?=$sum?>
            </table>
        </center>
    </body>
</html>
