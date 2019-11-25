<!-- Realiza un conversor de Mb a Kb. -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio UT02 T1 10</title>
</head>

<body>
    <form action="10.php" method="post">
        <label for="mb">Mb: </label>
        <input type="number" step="0.001" name="mb" id="mb">
        <input type="submit" value="A Kb">
    </form>
    <br>
    <?php
    if (isset($_POST['mb'])) {
        echo "${_POST['mb']}Mb son " . sprintf("%d Kb", ($_POST['mb'] * 1024));
    }
    ?>
</body>

</html>