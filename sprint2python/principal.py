from factorial2 import func_factorial2

num = int(input("Introduzca número positivo: "))
if num < 0:
    print("Número negativo, no válido.")
else:
    print("El factorial de ",num," es: ",func_factorial2(num))