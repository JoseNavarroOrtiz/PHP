<!--
Escribe un programa que lea una lista de diez números y determine cuántos son positivos, y cuántos son negativos.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
         <?php
           
            
             if(!isset($_GET["cuentaNumeros"])){ 
              $numero=$_GET["numeroIntroducido"];
              $positivo=0;
              $negativo=0;
              $contador=0; 
             }else{
                 $positivo=$_GET["positivo"];
                 $negativo=$_GET["negativo"];
                 $contador=$_GET["cuentaNumeros"];
                 $numero=$_GET["numeroIntroducido"];
                if($numero>0){
                    $positivo++;
                    $contador++;
                    echo"entra positiv",$positivo;
                }
                if($numero<0){
                    $negativo++;
                    $contador++;
                    echo "entra negativo",$negativo;
                }
                if($contador==3){
                    echo"los numeros positivos son ",$positivo;
                    echo"los numeros negativos son ",$negativo;
                }
             }
        ?>
        <form action="ejer13.php" method="get">
            Introduce un numero <input type="number" name="numeroIntroducido">
            <input type="hidden"name="cuentaNumeros"value=<?php echo "\"" + $contador + "\"" ?>>
            <input type="hidden"name="positivo"value=<?php echo "\"" + $positivo + "\"" ?>>
            <input type="hidden"name="negativo"value=<?php echo "\"" + $negativo + "\"" ?>>
            <?php   
            if($contador < 3) {
                    echo "<input type=\"submit\" value=\"comprobar número\">";
                } else {
                    echo "<input type=\"submit\" value=\"comprobar número\" disabled>";
                }
                  ?>
         </form>
    </body>
</html>
