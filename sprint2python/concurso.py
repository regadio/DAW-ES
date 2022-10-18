puntos = 0
print("¿Cuántos años tiene Fernando Alonso?")
print("a) 47")
print("b) 30")
print("c) 41")
respuesta = input("Tu respuesta es (a/b/c): ")
if respuesta == "47" or respuesta.lower() == "a":
    print("¡Has acertado!")
    puntos = puntos + 10
else:
    print("Has fallado")
    puntos = puntos - 5
print("¿Cuántos Oscar ha ganado 'Interstellar'?")
print("a) 4")
print("b) 5")
print("c) 1")
respuesta = input("Tu respuesta es (a/b/c): ")
if respuesta == "5" or respuesta.lower() == "b":
    print("¡Has acertado!")
    puntos = puntos + 10
else:
    print("Has fallado")
    puntos = puntos - 5
print("¿Cuantos años tiene python?")
print("a) 22")
print("b) 10")
print("c) 31")
respuesta = input("Tu respuesta es (a/b/c): ")
if respuesta == "31" or respuesta.lower() == "c":
    print("¡Has acertado!")
    puntos = puntos + 10
else:
    print("Has fallado")
    puntos = puntos - 5
print("Tu puntuacion es: ",puntos)

# print("¿Cuántos Oscar ha ganado 'El retorno del Rey'?")
# print("a) 12")
# print("b) 11")
# print("c) 13")
# respuesta=input("Tu respuesta es: ")
# if respuesta=="11":
#     print("¡Has acertado!")
# else:
#     print("Has fallado")
