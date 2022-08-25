<?php
/*
 * Desarrollador: Felipe velasquez Zapata
 * Programa de formacion: Desarrollo Web con PHP
 * Nombre de Evidencia: Taller “Uso de funciones”
 */
/* En esta página se reciben los datos ingresados por el usuario.
 */
?>
<!DOCTYPE html>
<html>
    <head> 
        <title>&Aacuterea Calculada;</title>
        <meta http-equiv="Content-Type" 
              content="text/html; charset=ISO-8859-1" />
    </head>
    <body>
        <?php
        if (isset($_POST['figuraGeometrica'])) {
            // se revisa que el usuario 
            // si seleccione la opcion de geometria. 
            require('calculosArea.php');
            // se invoca la función almacenada en calculoAreas.php
            $geometria = $_POST['figuraGeometrica'];
            //por cada dato obtenido del usuario se asigna el mismo a una variable.
             if (isset($_POST['radio'])) {
                $radio = $_POST['radio'];
            } else {
                $radio = 0;
            }
            if (isset($_POST['base']) && ($_POST['altura'])) {
                $base = $_POST['base'];
                $altura = $_POST['altura'];
            } else {
                $base = 0;
                $altura = 0;
            }
           
            //si no se ha seleccionado algun valor por parte del usuario,
            //se asigna el valor 0 a la variable.

            areaCalculada($geometria, $base, $altura, $radio);
            //con la función areaCalculada, obtenemos el valor del 
            //area correspondiente a la selección.
            echo "<p><a href = 'evidencia4_FelipeVelasquez.php'>Volver
                    al calculo de areas</a></p>";
            //dejaos un link para volver a la pagina anterior
        } else {
            echo "<p>No se ingreso una figura geometrica"
            . "<a href = 'evidencia4_FelipeVelasquez.php'>"
            . "<br />Volver al calculo de áreas</a></p>";
            //dejaos un link para volver a la pagina anterior en caso de que no
            //se selecione una figura geometrica.
        }
        ?> 
    </body>
</html>
