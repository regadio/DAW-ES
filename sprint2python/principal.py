from factorial import func_factorial

from factorial2 import func_factorial2

print("Calculo de Factoriales")

print("a) Usando Recursividad.")

print("b) Sin Usar Recursividad.")

op=input("Elija una opción (a/b): ")

if op.lower() == "a":
    num = int(input("Introduzca un número positivo: "))
    if num < 0:
        print("Número negativo, no válido.")
    else:
        print("El factorial de ",num," es: ",func_factorial(num))
elif op.lower() == "b":
    num = int(input("Introduzca un número positivo: "))
    if num < 0:
        print("Número negativo, no válido.")
    else:
        print("El factorial de ",num," es: ",func_factorial2(num))
else:
    print("Esta opción no existe")