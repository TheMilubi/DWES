"""
Ejercicio 01d

d) Escribir un programa que use un ciclo definido con rango numérico, que
averigüe a cuántos amigos quieren saludar, les pregunte los nombres de esos
amigos/as, y los salude.
"""

salir = False
while (not salir):
    num_amigos = input("Introduce cuántos amigos tienes: ")
    try:
        num_amigos = int(num_amigos)
        salir = True
    except ValueError:
        print(num_amigos, "no es un número, prueba de nuevo")

for n in range(num_amigos):
    nombre = input("Introduce tu amigo: ")
    print("Hola", nombre)
