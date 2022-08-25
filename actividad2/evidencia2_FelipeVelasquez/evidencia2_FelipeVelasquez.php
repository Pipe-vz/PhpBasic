<!DOCTYPE html>
<html>
    <head>
        <title>Uso de arreglos</title>
        <meta http-equiv="Content-Type" 
              content="text/html; charset=ISO-8859-1" />
    </head>
    <body>
        <h3>Actividad de aprendizaje 2</h3>
        <p>    
            <?php
            /*
             * Desarrollador: Felipe velasquez Zapata
             * Programa de formacion: Desarrollo Web con PHP
             * Nombre de Evidencia: Taller “Uso de arreglos”
             */
            $directorioTelefonico = array(
                array('Nombre' => 'Carlos Garcia', 'Direccion' => 'cra 16 #17 - 28',
                    'Telefono' => '3695487', 'Fecha Nacimiento' => '18/03/1997',
                    'Color Favorito' => 'amarillo', 'Significado' => 'No se encuentra el significado'),
                array('Nombre' => 'Juan Guarin', 'Direccion' => 'calle 58 # 79 - 14',
                    'Telefono' => '3519786', 'Fecha Nacimiento' => '21/05/1988',
                    'Color Favorito' => 'rojo', 'Significado' => 'No se encuentra el significado'),
                array('Nombre' => 'Ferney Conte', 'Direccion' => 'cra 25 # 65 - 73',
                    'Telefono' => '3628468', 'Fecha Nacimiento' => '06/07/1899',
                    'Color Favorito' => 'verde', 'Significado' => 'No se encuentra el significado'),
            );

            $significadoColor = array(
                'rojo' => 'Amor, calor y fuerza',
                'azul' => 'Libertad, lealtad y armonía',
                'verde' => 'Estabilidad, armonía y tranquilidad.'
            );

            foreach ($directorioTelefonico as $posicion => $datos) {
                foreach ($significadoColor as $color => $significado) {
                    if ($directorioTelefonico[$posicion]['Color Favorito'] == $color) {
                        $directorioTelefonico[$posicion]['Significado'] = $significado;
                    }
                }
            }
            //para cada color de directorioTelefonico, verifico si existe en significadoColor
            //y si existe le asigno el significado de color en la posiscion 'Significado' de directorioTelefonico

            echo '<table border="1">';
            echo "<tr>";
            foreach ($directorioTelefonico[0] as $key => $value) {
                echo '<th>' . $key . '</th>';
                //recorro la primera posicion del arreglo $directorioTelefonico y
                //pongo en una fila los valores del valor llave para cada columna 
                //como encabezados
            }
            echo "</tr>";
            foreach ($directorioTelefonico as $key => $value) {
                echo "<tr>";
                foreach ($value as $key2 => $value2) {
                    echo '<td>' . $value2 . '</td>';
                }
                echo "</tr>";
                //recorro todo el arreglo $directorioTelefonico y voy poniendo 
                //cada valor en una columna, y una vez termino los datos de uno de los arreglos internos
                //hago un salto de  fila
            }
            ?>
        </p> 
    </body>
</html>
