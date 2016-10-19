
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <!--Realiza el control de acceso a una caja fuerte. La combinación será 
        un número de 4 cifras. El programa nos pedirá la combinación para abrirla.
        Si no acertamos, se nos mostrará el mensaje “Lo siento, esa no es la combinación”
        y si acertamos se nos dirá “La caja fuerte se ha abierto satisfactoriamente”. 
        Tendremos cuatro oportunidades para abrir la caja fuerte.-->
        <h3>Introduce la combinacion para abrir la caja fuerte tienes 4 intentos</h3>
        <form action="ejer7.php"method="get">
            Introduce la Combinacion<input type="text"name="numeroIntroducido">
            <input type="hidden"name="numeroIntento">
            <input type="submit"value="Abrir">
        </form>
         
         <?php
         
          
            $numeroIntroducido=$_GET['numeroIntroducido'];
            $intento=$_GET['numeroIntento'];
        
           if(isset($numeroIntroducido)){
           
         
             $combinacion=1234;
            if($numeroIntroducido==$combinacion){
                echo" la caja fuerte se ha abierto <br>";
            }else{
                if($intento<4){
                    echo"Lo siento, esa no es la combinacion";
                    $intento++;
                }
            }
         }
        ?>
    </body>
</html>
