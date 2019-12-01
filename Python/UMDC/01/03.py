"""
Ejercicio 03
Escribir un programa que convierta un valor dado en grados Fahrenheit a grados
Celsius. Recordar que la fórmula para la conversión es: F = 9/5 * C + 32.
"""


def fahrenheit_celsius(fahrenheit):
    return (fahrenheit - 32) * 5 / 9


salir = False
while not salir:
    try:
        faren = float(input("Introduzca temperatura en grados Fahrenheit: "))
        salir = True
    except ValueError:
        print("Introduzca un valor numérico\n")


print("La temperatura equivalente en grados Celsius es: {:.1f}".format(
    fahrenheit_celsius(faren)))
