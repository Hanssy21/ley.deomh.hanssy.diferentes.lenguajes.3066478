<?php
// Función para calcular la Ley de Ohm
function calcularLeyDeOhm($V = null, $R = null, $I = null) {
    $resultado = '';

    // Verificar cuál valor falta y calcularlo
    if ($V === null) {  // Si falta el voltaje
        if ($I !== null && $R !== null) {
            $V = $I * $R;
            $resultado = "El valor del voltaje (V) es: " . $V . " V";
        } else {
            $resultado = "Necesitas ingresar al menos corriente (I) y resistencia (R) para calcular el voltaje.";
        }
    } else if ($I === null) {  // Si falta la corriente
        if ($V !== null && $R !== null) {
            $I = $V / $R;
            $resultado = "El valor de la corriente (I) es: " . $I . " A";
        } else {
            $resultado = "Necesitas ingresar al menos voltaje (V) y resistencia (R) para calcular la corriente.";
        }
    } else if ($R === null) {  // Si falta la resistencia
        if ($V !== null && $I !== null) {
            $R = $V / $I;
            $resultado = "El valor de la resistencia (R) es: " . $R . " Ω";
        } else {
            $resultado = "Necesitas ingresar al menos corriente (I) y voltaje (V) para calcular la resistencia.";
        }
    }

    // Mostrar el resultado
    return $resultado;
}

// Verificar si los valores fueron proporcionados desde la consola
if ($argc > 1) {
    // Recibir los valores desde la consola (argumentos)
    $V = isset($argv[1]) ? $argv[1] : null; // Voltaje
    $R = isset($argv[2]) ? $argv[2] : null; // Resistencia
    $I = isset($argv[3]) ? $argv[3] : null; // Corriente

    // Llamar a la función para calcular la Ley de Ohm y mostrar el resultado
    echo calcularLeyDeOhm($V, $R, $I) . "\n";
} else {
    echo "Por favor, ingresa al menos 2 de los siguientes valores: voltaje (V), resistencia (R) o corriente (I).\n";
}
?>