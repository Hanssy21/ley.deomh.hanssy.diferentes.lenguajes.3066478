# Pedir los valores al usuario
V = input('Ingrese el valor del voltaje (V): ')
R = input('Ingrese el valor de la resistencia (R): ')
I = input('Ingrese el valor de la corriente (I): ')

# Convertir a flotante solo si el valor fue ingresado
if V:
    V = float(V)
if R:
    R = float(R)
if I:
    I = float(I)

# Verificar cuál es el valor que falta y calcularlo
if not V:  # Si falta el voltaje
    if I and R:
        V = I * R
        print(f"El valor del voltaje (V) es: {V} V")
    else:
        print("Necesitas ingresar al menos corriente (I) y resistencia (R) para calcular el voltaje.")

if not I:  # Si falta la corriente
    if V and R:
        I = V / R
        print(f"El valor de la corriente (I) es: {I} A")
    else:
        print("Necesitas ingresar al menos voltaje (V) y resistencia (R) para calcular la corriente.")

if not R:  # Si falta la resistencia
    if I and V:
        R = V / I
        print(f"El valor de la resistencia (R) es: {R} Ω")
    else:
        print("Necesitas ingresar al menos corriente (I) y voltaje (V) para calcular la resistencia.")
        
