"""
Ejercicio 07

Escribir un programa que tome una cantidad "m" de valores ingresados por el
usuario, a cada uno le calcule el factorial e imprima el resultado junto con
el número de orden correspondiente.
"""

salir = False
while not salir:
    try:
        m = int(input("Introduzca número de factoriales a calcular: "))
        salir = True
    except ValueError:
        print("Introduzca solo valores numéricos enteros\n")

for i in range(1, m + 1):
    salir = False
    while not salir:
        try:
            n = int(input("Introduzca un número para calcular su factorial: "))
            salir = True
        except ValueError:
            print("Introduzca solo valores numéricos enteros\n")
    factorial = 1
    for j in range(2, n + 1):
        factorial *= j
    print("Contador: {}, Número: {}, Factorial: {}".format(i, n, factorial))
