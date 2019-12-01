"""
Ejercicio 05

Escribir un programa que imprima todos los números pares entre dos números que
se le pidan al usuario.
"""


salir = False
while not salir:
    try:
        inicial = int(input("Introduzca valor inicial: "))
        final = int(input("Introduzca valor final  : "))
        salir = True
    except ValueError:
        print("Introduzca solo valores numéricos enteros\n")

# Asegura que se comienza con un número par
inicial += inicial % 2
for i in range(inicial, final+1, 2):
    print(i)
