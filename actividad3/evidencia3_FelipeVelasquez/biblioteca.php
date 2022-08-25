<?php

/*
 * Desarrollador: Felipe velasquez Zapata
 * Programa de formacion: Desarrollo Web con PHP
 * Nombre de Evidencia: Taller “Uso de funciones”
 */

function operaciones($valor1, $valor2, $operador = 'S') {
    if ($operador == 'S') {
        return 'El resultado de la suma de ' . $valor1 . ' + ' . $valor2 . ' es = ' . $valor1 + $valor2;
    } elseif ($operador == 'R') {
        return 'El resultado de la resta de ' . $valor1 . ' - ' . $valor2 . ' es = ' . $valor1 - $valor2;
    } elseif ($operador == 'M') {
        return 'El resultado de la mutiplicación de ' . $valor1 . ' x ' . $valor2 . ' es = ' . $valor1 * $valor2;
    } elseif ($operador == 'D') {
        return 'El resultado de la suma de ' . $valor1 . ' / ' . $valor2 . ' es = ' . $valor1 / $valor2;
    }
}

//Asigno en cada if, la operación correspondiente al tercer parametro,
//que sería 'S' para suma, ''R para resta, 'M' para multiplicación y 'D' para división.
//Cuando no se indique parametro se tiene suma por defecto
