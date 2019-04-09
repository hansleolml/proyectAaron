<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/control.css">
        <link rel="stylesheet" type="text/css" href="css/pasajero.css">
        <link href ="css/slides.css" rel ="stylesheet" type ="text/css">
        <title>Control</title>
    </head>
    <?php
        $host_db = "localhost";
        $user_db = "root";
        $pass_db = "";
        $db_name = "bdviajes";
        $tbl_name = "respuestas";


        $cn=mysqli_connect($host_db, $user_db, $pass_db, $db_name);

        $coda=$_GET["cod"];
        $nom=$_GET["x"];
    ?>
    <body>
        <center>
            <table class="tablauno">
                <tr><th>RUTA LIMA - <?=$nom?>
                <tr><td>Viajes Programados
            </table>

            <table>
            <div class="operacion">
                <form action ="nuevopasajero.html" method= "POST">
                 <p>
                 <fieldset>
                 <legend>OPERACIONES - COSTO</legend>
                 <p>Registro de Pasajero<input type="submit" value="Adicionar Pasajero"></p>
                 <p>
                 </fieldset>
                </form>
            </div>
            </table>

            <table>
                <div class="main">
                    <div class="slides">
                        <img src="fondos/arequipa1.jpg" alt="">
                        <img src="fondos/arequipa2.jpg" alt="">
                        <img src="fondos/arequipa3.jpg" alt="">
                        <img src="fondos/arequipa4.jpg" alt="">
                    </div>
                </div>
            </table>

            <table class="tabla">
                <tr><th>VIAJE<th>FECHA<th>HORA DE SALIDA<th>COST0<th>VER
                    <?php
                        $sql="select VIANRO,VIAFCH,VIAHRS,COSVIA from viaje";
                        // . " where rutcod='$coda' ";falta añadir esto
                        $res=  mysqli_query($cn,$sql)  or die('Error:'.mysqli_error());
                        while($f= mysqli_fetch_array($res)){
                    ?>
                <tr><td><?=$f[0]?><td><?=$f[1]?><td><?=$f[2]?><td><?=$f[3]?>
                <td><a href="pasajero.php?cod=<?=$f[0]?>&x=<?=$f[3]?>"><input type="submit" value="--Pasajeros--"></a>
                    <?php
                        }
                    ?>
              </table>
        </center>
    </body>
    <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="js/jquery.slides.js" type="text/javascript"></script>
    <script>
      $(function(){
      $(".slides").slidesjs({
      play: {
      active: true,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
      effect: "fade",
        // [string] Can be either "slide" or "fade".
      interval: 2000,
        // [number] Time spent on each slide in milliseconds.
      auto: true,
        // [boolean] Start playing the slideshow on load.
      swap: true,
        // [boolean] show/hide stop and play buttons
      pauseOnHover: false,
        // [boolean] pause a playing slideshow on hover
      restartDelay: 2500
        // [number] restart delay on inactive slideshow
      }
      });
      });
    </script>
</html>
