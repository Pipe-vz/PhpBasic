<?php
/*
 * Desarrollador: Felipe velasquez Zapata
 * Programa de formacion: Desarrollo Web con PHP
 * Nombre de Evidencia: Taller “Uso de funciones”
 */
/*
 * para el calculo de areas se crea una funcion tipo switch, en la cual 
 * se realiza la operación correspondiente al calculo de área para cada
 * tipo de geometría seleccionada
 */

function areaCalculada($geometria, $base, $altura, $radio) {
    switch ($geometria) {
        case 'cuadrado' || 'rectangulo':
            $area = $base * $altura;
            break;
        case 'triangulo':
            $area = $base * $altura / 2;
            break;
        case 'circulo':
            $area = M_PI * $radio * $radio;
            break;
        default:
            break;
    }
    echo 'El área de el ' . $geometria . ' es: ' . $area . ' mm<sup>2</sup>';
}
