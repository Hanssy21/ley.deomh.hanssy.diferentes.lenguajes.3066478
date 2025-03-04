// Función para calcular la Ley de Ohm
function calcularLeyDeOhm() {
    // Solicitar los valores al usuario a través de la consola
    let V = prompt("Ingrese el valor del voltaje (V) o deje en blanco si no lo sabe:");
    let R = prompt("Ingrese el valor de la resistencia (R) o deje en blanco si no lo sabe:");
    let I = prompt("Ingrese el valor de la corriente (I) o deje en blanco si no lo sabe:");

    // Convertir los valores a números
    V = V ? parseFloat(V) : null;
    R = R ? parseFloat(R) : null;
    I = I ? parseFloat(I) : null;

    let resultado = '';

    // Verificar cuál valor falta y calcularlo
    if (V === null) {  // Si falta el voltaje
        if (I !== null && R !== null) {
            V = I * R;
            resultado = `El valor del voltaje (V) es: ${V} V`;
        } else {
            resultado = "Necesitas ingresar al menos corriente (I) y resistencia (R) para calcular el voltaje.";
        }
    } else if (I === null) {  // Si falta la corriente
        if (V !== null && R !== null) {
            I = V / R;
            resultado = `El valor de la corriente (I) es: ${I} A`;
        } else {
            resultado = "Necesitas ingresar al menos voltaje (V) y resistencia (R) para calcular la corriente.";
        }
    } else if (R === null) {  // Si falta la resistencia
        if (V !== null && I !== null) {
            R = V / I;
            resultado = `El valor de la resistencia (R) es: ${R} Ω`;
        } else {
            resultado = "Necesitas ingresar al menos corriente (I) y voltaje (V) para calcular la resistencia.";
        }
    }

    // Mostrar el resultado en la consola
    console.log(resultado);
}

// Llamar a la función para calcular Ley de Ohm
calcularLeyDeOhm();
  