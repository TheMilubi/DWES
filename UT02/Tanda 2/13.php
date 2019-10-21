<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio UT02 T2 13</title>
</head>

<body>
    <!-- Escribe un programa que ordene tres números enteros introducidos por teclado -->
    <form action="13.php" method="post">
        <label for="d1">Introduce 3 números: </label>
        <input type="number" name="d1" id="d1">
        <input type="number" name="d2" id="d2">
        <input type="number" name="d3" id="d3">
        <input type="submit" value="Ordenar">
    </form>
    <br>
    <br>
    <?php
    if (isset($_POST['d1']) && isset($_POST['d2']) && isset($_POST['d3'])) {
        $arr = array($_POST['d1'], $_POST['d2'], $_POST['d3']);
        sort($arr);
        echo "Números ordenados: ". $arr[0] . ", " . $arr[1] . ", " . $arr[2] . ".";
    }
    ?>
</body>

</html>