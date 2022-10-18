from factorial import func_factorial

num = int(input("Introduzca número positivo: "))
if num < 0:
    print("Número negativo, no válido.")
else:
    print("El factorial de ",num," es: ",func_factorial(num))