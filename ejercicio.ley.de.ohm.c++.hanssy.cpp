#include <iostream>
using namespace std;

void calcularLeyDeOhm(float V = 0, float R = 0, float I = 0) {
    // Variables para el resultado
    string resultado = "";

    // Verificar cuál valor falta y calcularlo
    if (V == 0) {  // Si falta el voltaje
        if (I != 0 && R != 0) {
            V = I * R;
            resultado = "El valor del voltaje (V) es: " + to_string(V) + " V";
        } else {
            resultado = "Necesitas ingresar al menos corriente (I) y resistencia (R) para calcular el voltaje.";
        }
    } else if (I == 0) {  // Si falta la corriente
        if (V != 0 && R != 0) {
            I = V / R;
            resultado = "El valor de la corriente (I) es: " + to_string(I) + " A";
        } else {
            resultado = "Necesitas ingresar al menos voltaje (V) y resistencia (R) para calcular la corriente.";
        }
    } else if (R == 0) {  // Si falta la resistencia
        if (V != 0 && I != 0) {
            R = V / I;
            resultado = "El valor de la resistencia (R) es: " + to_string(R) + " Ω";
        } else {
            resultado = "Necesitas ingresar al menos corriente (I) y voltaje (V) para calcular la resistencia.";
        }
    }

    // Mostrar el resultado
    cout << resultado << endl;
}

int main() {
    float V, R, I;
    
    cout << "Ingrese el valor del voltaje (V) o ingrese 0 si no lo sabe: ";
    cin >> V;

    cout << "Ingrese el valor de la resistencia (R) o ingrese 0 si no lo sabe: ";
    cin >> R;

    cout << "Ingrese el valor de la corriente (I) o ingrese 0 si no lo sabe: ";
    cin >> I;

    // Llamar a la función para calcular la Ley de Ohm y mostrar el resultado
    calcularLeyDeOhm(V, R, I);

    return 0;
}