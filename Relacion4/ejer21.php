<!--
Realiza un programa que vaya pidiendo números hasta que se introduzca un numero
negativo y nos diga cuantos números se han introducido, la media de los impares
y el mayor de los pares . El número negativo sólo se utiliza para indicar el 
final de la introducción de datos pero no se incluye en el cómputo
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            if(!isset($_GET["contador"])){      
               $contador=0;
           }else{
            $numero=$_GET["numero"];
            $sumaImpares=$_GET["suma"];
            $mayorPares=$_GET["mayor"];
            $contador=$_GET["contador"];
                if($numero>0){
                    if($numero%2!=0){
                        $sumaImpares=$sumaImpares+$numero;
                        $contador++;
                    }else{
                        if($numero>$mayorPares){
                            $mayorPares=$numero;
                            $contador++;
                        }
                    }
                }else{
                    echo"la media de los numero impares es ",$sumaImpares/$contador;
                    echo"<br> El numero mayor de los pares es ",$mayorPares;
                    echo"<br> La cantidad de numeros introducidos ha sido", $contador;
                }
           }
        ?>
        <form action="ejer21.php"method="get">
            Introduce un numero<input type="number"name="numero">
            <input type="hidden"name="contador"value=<?php echo "\"" + $contador + "\"" ?>>
            <input type="hidden"name="suma"value=<?php echo "\"" + $sumaImpares + "\"" ?>>
            <input type="hidden"name="mayor"value=<?php echo "\"" + $mayorPares + "\"" ?>>
             <?php 
                if($numero>=0) {
                    echo "<input type=\"submit\" value=\"Enviar\">";
                } else {
                    echo "<input type=\"submit\" value=\"Enviar\" disabled>";
                }
               ?>
        </form>
    </body>
</html>
