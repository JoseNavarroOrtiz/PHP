<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <p>Escribe un programa que calcule la media de un conjunto de números
        positivos introducidos por teclado. A priori, el programa no sabe cuántos 
        números se introducirán. El usuario indicará que ha terminado de introducir
        los datos cuando meta un número negativo.</p>
       
        <?php
            if(!isset($_GET["contador"])){      
              $contador=0; 
              
           }else{
                $suma=$_GET["suma"];
                $contador=$_GET["contador"];
                $numero=$_GET['numero'];
                if($numero>0){
                    $suma=$suma+$numero;
                    $contador++;
                    
                }else{
                     echo"La media de los numeros que has introducido es ",$suma/$contador;
                }
           }
        ?>
         <form action="ejer10.php"method="get">
            Introduce un numero<input type="number"name="numero">
            <input type="hidden"name="suma"value=<?php echo "\"" + $suma + "\"" ?>>
            <input type="hidden"name="contador"value=<?php echo "\"" + $contador + "\"" ?>>
            <?php 
                if($numero >= 0) {
                    echo "<input type=\"submit\" value=\"Enviar\">";
                } else {
                    echo "<input type=\"submit\" value=\"Enviar\" disabled>";
                }
               ?>
        </form>
        
    </body>
</html>
