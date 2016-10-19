
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            if(!isset($_GET["altura"])){      
               $altura=0;
           }else{
               $altura=$_GET["altura"];
               $piramide=1;
               $blancos=$altura-1;
               for($i=0;$i<$altura;$i++){
                   
                   for($j=0;$j<$blancos;$j++){
                           echo "<img src=\"cuadradoAzul.jpg\" width=\"36\">";
                   }
                   for($m=0;$m<$piramide;$m++){
                        echo "<img src=\"cuadradoRojo.png\" width=\"36\">";
                   }
                   echo"<br>";
                    
                  $blancos--;
                  $piramide=$piramide+2;
               }
           }
           
        ?>
        <form action="ejer19.php"method="get">
            Introduce una altura<input type="number"name="altura">
           <?php 
                if($altura ==0) {
                    echo "<input type=\"submit\" value=\"enviar\">";
                } else {
                    echo "<input type=\"submit\" value=\"enviar\" disabled>";
                }
               ?>
        </form>
    </body>
</html>
