<html>
    <head>
        <meta charset="UTF-8">
        <title>Virtual</title>
        <link rel="stylesheet" type="text/css" href="css/virtual.css">
    </head>
    <?php
        $host_db = "localhost";
        $user_db = "root";
        $pass_db = "";
        $db_name = "bdviajes";
        $tbl_name = "respuestas";

        $cn=mysqli_connect($host_db, $user_db, $pass_db, $db_name);

    ?>
    <body>
        <center>
            <table>
            <div class="operacion">
                <form>
                    <p>
                    <fieldset>
                        <legend>TURISMO INTER-PERÚ</legend>
                        <p><img src="imagen/logo.png" width="150" height="130"><p>
                        <p>REGISTRO DE VIAJES</p>
                        <p>
                    </fieldset>
                </form>
            </div>
            </table>

            <table class="cuerpo">
                <tr><th>RUTA<th>FOTO<th>VER
                    <?php
                    $sql="select rutcod, rutnom from ruta";
                    $res=  mysqli_query($cn,$sql)  or die('Error:'.mysqli_error());
                    while($f=  mysqli_fetch_array($res)){  //lee fila pór fila
                    $im="turismo/$f[1].jpg";
                    ?>
                    <tr><td><?=$f[1]?>
                        <td align="center"><img src="<?=$im?>" height="200" width="350">
                        <td class="unos"><a href="controlar.php?cod=<?=$f[0]?>&x=<?=$f[1]?>">
                            <input type="submit" value="--VER--"></a>
                    <?php
                        }
                    ?>
            </table>
        </center>
    </body>
</html>
