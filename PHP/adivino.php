<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adivino</title>
</head>

<body>
    <h1>Adivino</h1>
    <?php
    session_start();
    if (!isset($_SESSION['num'])) $_SESSION['num'] = rand(1, 100);
    if (isset($_POST['num']) && $_POST['num'] == $_SESSION['num']) {
        echo "¡Has acertado!";
        unset($_SESSION['num']);
    } else {
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <input type="number" name="num" id="num" autofocus>
            <input type="submit" value="Comprobar número">
        </form>
        <p>

        <?php
            if (isset($_POST['num'])) {
                $numero = $_POST['num'];
                if (empty($numero)) {
                    echo "No ha escrito ningún número";
                } else if (is_integer($numero) || $numero < 0) {
                    echo "No ha escrito un número entero positivo";
                } else {
                    if ($numero > $_SESSION['num']) {
                        echo "Demasiado grande";
                    } else {
                        echo "Demasiado pequeño";
                    }
                }
            }
        }

        ?>
        </p>
        <p><a href="<?php echo $_SERVER['PHP_SELF'] ?>">&lt;&lt; Volver</a></p>
</body>

</html>