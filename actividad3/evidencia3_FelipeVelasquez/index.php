<!DOCTYPE html>
<html>
    <head>
        <title>Uso de funciones</title>
        <meta http-equiv="Content-Type" 
              content="text/html; charset=ISO-8859-1" />
    </head>
    <body>
        <h2>Actividad de aprendizaje 3</h2>

        <?php
        /*
         * Desarrollador: Felipe velasquez Zapata
         * Programa de formacion: Desarrollo Web con PHP
         * Nombre de Evidencia: Taller “Uso de funciones”
         */
        require('biblioteca.php');
        //llamo el archivo biblioteca.php, la cual contiene la finción que voy  utilizar
        echo '<p>A continuación se muestran diferentes operaciones para dos'
        . ' numeros seleccionados</p>';
        $primerNumero = 3;
        $segundoNumero = 5;
        //asigno los valores de los numeros que usaré para realizar las operaiones
        echo '<p>El primer numero es ' . $primerNumero . '<br>El segundo numero es ' . $segundoNumero . '</p>';

        $resultadoSuma = operaciones($primerNumero, $segundoNumero, 'S');
        //llamo la funcion alojada en biblioteca.php y tomo como parametros 
        //los valores que usaré, y le asigno una letra correspondiente a una operación
        echo $resultadoSuma . '<br>';

        $resultadoResta = operaciones($primerNumero, $segundoNumero, 'R');
        echo $resultadoResta . '<br>';

        $resultadoMultiplicacion = operaciones($primerNumero, $segundoNumero, 'M');
        echo $resultadoMultiplicacion . '<br>';

        $resultadoDivision = operaciones($primerNumero, $segundoNumero, 'D');
        echo $resultadoDivision . '<br>';

        $resultadoDefault = operaciones($primerNumero, $segundoNumero);
        echo $resultadoDefault . '<br>';
        //en este caso no se usó el parametro de la operación, 
        //pero por defecto se realizara la suma en este caso.
        ?>
    </body>
</html>

