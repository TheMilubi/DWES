<!-- Resuelve ecuación de primer grado (ax + b = 0). -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio UT02 T2 09</title>
</head>

<body>
    <form action="09.php" method="post">
        <input type="number" name="a" id="a">
        <pre style="display:inline">x² + </pre>
        <input type="number" name="b" id="b">
        <pre style="display:inline">x + </pre>
        <input type="number" name="c" id="c">
        <pre style="display:inline"> = </pre>
        <?php
        if (isset($_POST['a']) && isset($_POST['b'])){
            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];
            $r1 = (-$b + sqrt(($b**2 - 4 * $a * $c)/(2*$a)));
            $r2 = (-$b - sqrt(($b**2 - 4 * $a * $c)/(2*$a)));
            echo "r1: " . sprintf("%.2f; ",$r1) . "r2: " . sprintf("%.2f",$r2);
        }
            ?>
        <br><br>
        <input type="submit" value="Calcular">
    </form>

</body>

</html>