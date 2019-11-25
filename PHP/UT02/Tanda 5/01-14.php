<?php
/////////////////////////////////////////////////////////////////////////
// Devuelve true o false dependiendo si el número es capicúa.
/////////////////////////////////////////////////////////////////////////

function esCapicua($numero)
{
    $esCapicua = false;
    try {
        $cadena = strval($numero);
        $alReves = strrev($cadena);
        $esCapicua = ($cadena == $alReves);
        return $esCapicua;
    } catch (Exception $e) {
        echo "Error";
        return $esCapicua;
    }
}

/////////////////////////////////////////////////////////////////////////
// Devuelve true o false dependiendo si el número es primo.
/////////////////////////////////////////////////////////////////////////

function esPrimo($numero)
{
    $esPrimo = false;
    try {
        $esPrimo = true;
        $i = 2;
        while ($i <= ($numero / 2) && $esPrimo) {
            if ($numero % $i == 0) $esPrimo = false;
            $i++;
        }
        return $esPrimo;
    } catch (Exception $e) {
        echo "Error";
        return $esPrimo;
    }
}

///////////////////////////////////////////////////////////////////////////
// Devuelve el primer número primo que se encuentre a continuación del 
// número pasado por parámetro
///////////////////////////////////////////////////////////////////////////

function siguientePrimo($numero)
{
    if (!is_integer($numero)) throw "Error, el número no es un entero";
    $sigPrimo = $numero + 1;
    while (!esPrimo($sigPrimo)) {
        $sigPrimo++;
    }
    return $sigPrimo;
}

////////////////////////////////////////////////////////////////////////////
// Devuelve la potencia de una base y exponente (parametros).             
////////////////////////////////////////////////////////////////////////////

function potencia($base, $exponente)
{
    return $base ** $exponente;
}

////////////////////////////////////////////////////////////////////////////
// Número de dígitos.
////////////////////////////////////////////////////////////////////////////

function digitos($numero)
{
    if (!is_integer($numero)) throw "Error, el número no es un entero";
    $numero = abs($numero);
    $string = strval($numero);
    return count($string);
}

////////////////////////////////////////////////////////////////////////////
// Voltea el número.
////////////////////////////////////////////////////////////////////////////

function voltea($numero)
{
    if (!is_integer($numero)) throw "Error, el número no es un entero";
    $cadena = strval(abs($numero));
    $alReves = strrev($cadena);
    return ($numero > 0) ? intval($alReves) : -intval($alReves);
}

////////////////////////////////////////////////////////////////////////////
// Devuelve el digito en el posición n.
////////////////////////////////////////////////////////////////////////////

function digitoN($numero, $n)
{
    if (!is_integer($numero)) throw "Error, el número no es un entero";
    $cadena = strval($numero);
    return str_split($cadena, '')[$n];
}

////////////////////////////////////////////////////////////////////////////
// Index of digito.
////////////////////////////////////////////////////////////////////////////

function posicionDeDigito($numero, $digito)
{
    if (!is_integer($numero)) throw "Error, el número no es un entero";
    $numero = str_split(strval($numero), '');
    $n = array_search($digito, $numero);
    return ($n >= 0) ? $n : -1;
}

////////////////////////////////////////////////////////////////////////////
// Quita por detrás los digitos.
////////////////////////////////////////////////////////////////////////////

function quitaPorDetras($numero, $nDigitos)
{
    if (!is_integer($numero)) throw "Error, el número no es un entero";
    $string = strval(abs($numero));
    $n = mb_substr($string, 0, -$nDigitos);
    return ($numero > 0) ? intval($n) : -intval($n);
}

////////////////////////////////////////////////////////////////////////////
// Quita por delante los digitos.
////////////////////////////////////////////////////////////////////////////

function quitaPorDelante($numero, $nDigitos)
{
    if (!is_integer($numero)) throw "Error, el número no es un entero";
    $string = strval(abs($numero));
    $n = substr($string, $nDigitos);
    return ($numero > 0) ? intval($n) : -intval($n);
}

////////////////////////////////////////////////////////////////////////////
// Pega por detrás los digitos.
////////////////////////////////////////////////////////////////////////////

function pegaPorDetras($numero, $n)
{
    if (!is_integer($numero)) throw "Error, el número no es un entero";
    $string = strval(abs($numero));
    $num = $string . $n;
    return ($numero > 0) ? intval($num) : -intval($num);
}

////////////////////////////////////////////////////////////////////////////
// Pega por delante los digitos.
////////////////////////////////////////////////////////////////////////////

function pegaPorDelante($numero, $n)
{
    if (!is_integer($numero)) throw "Error, el número no es un entero";
    $string = strval(abs($numero));
    $num = $n . $string;
    return ($numero > 0) ? intval($num) : -intval($num);
}

////////////////////////////////////////////////////////////////////////////
// Substr de numeros.
////////////////////////////////////////////////////////////////////////////

function trozoDeNumero($numero, $inicial, $final)
{
    if (!is_integer($numero)) throw "Error, el número no es un entero";
    $string = strval(abs($numero));
    $num = substr($string, $inicial, $final - $inicial);
    return ($numero > 0) ? intval($num) : -intval($num);
}

////////////////////////////////////////////////////////////////////////////
// Concatenacion de numeros numeros, el primero decide si es posotivo o negativo
////////////////////////////////////////////////////////////////////////////

function juntaNumeros($numero1, $numero2)
{
    if (!is_integer($numero1)) throw "Error, el número 1 no es un entero";
    if (!is_integer($numero2)) throw "Error, el número 2 no es un entero";
    $string1 = strval(abs($numero1));
    $string2 = strval(abs($numero2));
    $num = $string1 . $string2;
    return ($numero1 > 0) ? intval($num) : -intval($num);
}