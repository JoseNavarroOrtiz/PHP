
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
             $hora=$_GET['saludo'];
             if($hora<1||$hora>24){
                 echo "La hora no es correcta, debe estar entre 1 y 24";
             }else{
                 if($hora>5&&$hora<13){
                     echo "Buenos dias";
                 }
                 if($hora>12&&$hora<21){
                     echo "Buenas tardes";
                 }
                 if($hora>20&&$hora<25||$hora>0&&$hora<6){
                     echo "Buenas noches";
                 }
                 
             }
        ?>
    </body>
</html>
