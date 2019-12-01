"""
Ejercicio 02

Escribir un programa que le pregunte al usuario una cantidad de euros, una
tasa de interés y un número de años y muestre como resultado el monto final a
obtener. La fórmula a utilizar es (interés compuesto):

Cf = Ci * (1 + i/100) ^ n

Donde Ci es el capital inicial, i es la tasa de interés y n es el número de
años a calcular.
"""


def interes(ci, i, n):
    return ci * (1 + i / 100) ** n


salir = False
while not salir:
    try:
        ci = float(input("Introduce el capital inicial: "))
        anios = float(input("Introduce los años  : "))
        i = float(input("Introduce el interés (%): "))
        salir = True
    except ValueError:
        print("Error en la introducción de datos\n")

print("Total a pagar: {:.2f} euros".format(interes(ci, i, anios)))
