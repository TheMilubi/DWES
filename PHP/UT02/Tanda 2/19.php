<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio UT02 T2 19</title>
</head>

<body>
    <!-- Realiza un programa que diga si un número entero positivo introducido por teclado es capicúa. Se permiten números de hasta 5 cifras.     -->
    <form action="19.php" method="post">
        <label for="numero">Número: </label>
        <input type="number" name="numero" id="numero">
        <input type="submit" value="Calcular">
    </form>
    <br><br>
    <?php
    if (isset($_POST['numero'])) {
        $num = $_POST['numero'];
        $r = ($num >= 0) ? $num : ($num * -1);
        $r = strval($r);
        //echo "$r";
        $arr = str_split($r);
        //echo $arr;
        $arr = array_reverse($arr);
        $rinv = join($arr);
        //echo $rinv;
        $capicua = ($r == $rinv)? "SÍ":"NO";
        if ($num > 99999 || $num < -99999) {
            echo 'Sólo se permiten números de 5 cifras';
        } elseif($num < 0){
            echo "No se permiten números negativos";
        } else {
            echo "El número $capicua es capicúa";
        }
    }
    ?>
</body>

</html>