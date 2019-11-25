<!-- Realiza un conversor de Kb a Mb. -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio UT02 T1 11</title>
</head>

<body>
    <form action="11.php" method="post">
        <label for="kb">Kb: </label>
        <input type="number" step="0.001" name="kb" id="kb">
        <input type="submit" value="A Mb">
    </form>
    <br>
    <?php
    if (isset($_POST['kb'])) {
        echo "${_POST['kb']}Kb son " . sprintf("%.3f Mb", ($_POST['kb'] / 1024));
    }
    ?>
</body>

</html>