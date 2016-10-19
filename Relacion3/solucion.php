
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $pregunta1=$_GET['pregunta1'];
            $pregunta2=$_GET['pregunta2'];
            $aciertos=0;
            if($pregunta1==="isabel"){
                $aciertos++;
            }
            if($pregunta2==5){
                $aciertos++;
            }
            echo"El numero de aciertos es ",$aciertos;
        ?>
    </body>
</html>
