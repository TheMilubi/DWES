<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio UT02 T2 07</title>
</head>

<body>
    <form action="07.php" method="post">
        <label for="nota1">Notas: </label>
        <input type="number" step="0.01" min="0" max="10" name="nota1" id="nota1">
        <input type="number" step="0.01" min="0" max="10" name="nota2" id="nota2">
        <input type="number" step="0.01" min="0" max="10" name="nota3" id="nota3"><br><br>
        <input type="submit" value="Calcular media">
    </form>
    <br>
    <?php
    if (isset($_POST['nota1']) && isset($_POST['nota2']) && isset($_POST['nota3'])) {
        $n1 = $_POST['nota1'];
        $n2 = $_POST['nota2'];
        $n3 = $_POST['nota3'];
        if ($n1 >= 0 && $n2 >= 0 && $n3 >= 0 && $n1 <= 10 && $n2 <= 10 && $n3 <= 10) {
            echo "Media: " . sprintf("%.2f", ($n1 + $n2 + $n3) / 3);
        }
    }
    ?>
</body>

</html>