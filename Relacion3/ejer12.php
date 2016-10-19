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
        <!--Realiza un minicuestionario con 10 preguntas tipo test sobre las asignaturas que se imparten en el curso. 
        Cada pregunta acertada sumará un punto. El programa mostrará al final la calificación obtenida. 
        Pásale el minicuestionario a tus compañeros y pídeles que lo hagan para ver qué tal andan de conocimientos 
        en las diferentes asignaturas del curso.-->
        <form action="solucion.php" method="get">
            Como se llama la unica profesora<input type="text"name="pregunta1">
            Cuantas asignaturas tenemos<input type="number"name="pregunta2">
            <input type="submit"value="Enviar">
        </form>
    </body>
</html>
