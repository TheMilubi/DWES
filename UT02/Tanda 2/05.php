<!-- Resuelve ecuación de primer grado (ax + b = 0). -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio UT02 T2 05</title>
</head>

<body>
    <form action="05.php" method="post">
        <input type="number" name="a" id="a">
        <pre style="display:inline">x + </pre>
        <input type="number" name="b" id="b">
        <pre style="display:inline"> = </pre>
        <?php
        if (isset($_POST['a']) && isset($_POST['b'])){
            $a = $_POST['a'];
            $b = $_POST['b'];
            echo -$b/$a;
        }
            ?>
        <br><br>
        <input type="submit" value="Calcular">
    </form>

</body>

</html>