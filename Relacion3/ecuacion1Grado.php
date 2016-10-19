
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $valorX=$_GET['x'];
            $valorNumero=$_GET['numero'];
            $valorNumero=$valorNumero*-1;
            echo"La solucion de la ecuacion es ",$valorNumero/$valorX;
        ?>
    </body>
</html>
