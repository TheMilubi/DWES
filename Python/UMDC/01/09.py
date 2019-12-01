"""
Ejercicio 09
Modificar el programa anterior para que pueda generar fichas de un juego que
puede tener números de 0 a n.
"""

salir = False
while not salir:
    try:
        n = int(input("Introduzca número máximo del dominó: "))
        salir = True
    except ValueError:
        print("Introduzca solo valores numéricos enteros\n")

for i in range(n+1):
    for j in range(i, n+1):
        print("-----")
        print("|{}|{}|".format(i, j))
        print("-----")
