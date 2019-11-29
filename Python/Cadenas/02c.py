"""
Ejercicio 02b

Escribir funciones que dada una cadena y un carácter:

c) Reemplace todos los dígitos en la cadena por el carácter "X".
Ej: su clave es: 1540 y X debería devolver su clave es: XXXX
"""


def cambiar_x(cad):
    salida = ""
    digitos = "0123456789"
    for letra in cad:
        if letra in digitos:
            salida += "X"
        else:
            salida += letra
    return salida


def cambiar_x2(cad, rmax):
    if rmax == 0:
        return cad
    salida = ""
    rep = 0
    digitos = "0123456789"
    for i in range(len(cad)):
        if cad[i] in digitos:
            salida += "X"
            rep += 1
            if rep == rmax:
                salida += cad[i+1:]
                break
        else:
            salida += cad[i]
    return salida


print(cambiar_x("su clave es: 1540"))
print(cambiar_x2("su clave es: 1540", 0))
print(cambiar_x2("su clave es: 1540", 2))
print(cambiar_x2("su clave es: 1540", 10))
