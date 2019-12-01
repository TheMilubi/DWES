"""
Ejercicio 06

Escribir un programa que reciba un número n por parámetro e imprima los
primeros números triangulares, junto con su índice.
Los números triangulares se obtienen mediante la suma de los números naturales
desde 1 hasta n. Es decir, si se piden los primeros 5 números triangulares, el
programa debe imprimir:

1 - 1
2 - 3
3 - 6
4 - 10
5 - 15

Nota: hacerlo usando y sin usar la ecuación n * (n + 1) / 2. ¿Cuál realiza más
operaciones? (Respuesta: triangularIterativo con diferencia)
"""


def triangular_iterativo(n):
    triangular = 0
    for i in range(1, n+1):
        triangular += i
    return triangular


def triangular_calculado(n):
    return int(n * (n+1)/2)


salir = False
while not salir:
    try:
        n = int(input("Introduzca número de triangulares a calcular: "))
        salir = True
    except ValueError:
        print("Introduzca solo valores numéricos enteros\n")

print("Triangular iterativo:")
for i in range(1, n + 1):
    print(str(i).rjust(3, ' '), " - ",
          str(triangular_iterativo(i)).ljust(3, ' '), sep="")

print("Triangular calculado:")
for i in range(1, n + 1):
    print(str(i).rjust(3, ' '), " - ",
          str(triangular_calculado(i)).ljust(3, ' '), sep="")
