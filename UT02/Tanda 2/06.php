<!-- Realiza un programa que calcule el tiempo que tardará en caer un objeto desde una altura h. Aplica
t = raiz²(2h/g)
siendo g = 9.81m/s2 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio UT02 T2 06</title>
</head>

<body>
    <form action="06.php" method="post">
        <label for="altura">Altura (metros): </label>
        <input type="number" min="0" step="0.01" name="altura" id="altura">
        <input type="submit" value="Calcular tiempo">
    </form>
    <br>
    <?php
    if (isset($_POST['altura']) && $_POST['altura'] >= 0) {
        $altura = $_POST['altura'];
        echo "Tiempo de caída: " . sprintf("%.3fs", sqrt($altura * 2 / 9.81));
    }
    ?>
</body>

</html>