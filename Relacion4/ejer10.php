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
        <form action="ejer10.php"method="get">
            Introduce un numero<input type="number"name="numero">
            <input type="submit"value="Enviar">
            
        </form>
        <?php
            $suma=0;
            $contador=0;
            $numero=$_GET['numero'];
            if($numero>0){
                $suma=$suma+$numero;
                $contador++;
            }else{
                 echo"La media de los numeros que has introducido es ",$numero/$contador;
            }
        
        ?>
    </body>
</html>
