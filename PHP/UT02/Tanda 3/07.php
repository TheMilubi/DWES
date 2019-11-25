<!-- Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras. 
El programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el mensaje 
“Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte se ha abierto 
satisfactoriamente”. Tendremos cuatro oportunidades para abrir la caja fuerte. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio UT02 T3 07</title>
</head>

<body>
    <h1>Abrir caja fuerte</h1>
    <form action="07.php" method="post">
        <input type="text" pattern="[0-9]{4}" name="passwd" id="passwd">
        <input type="submit" value="Abrir">
    </form>
    <p style="color:red">
        <?php
        session_start();
        if (empty($_SESSION['c'])) {
            $_SESSION['c'] = 0;
        }
        $pass = "1234";
        if (isset($_POST['passwd'])) {
            if ($_SESSION['c'] < 4) {
                $passwd = $_POST['passwd'];
                if ($passwd < 0 || $passwd > 9999) {
                    echo 'Sólo se permiten números positivos de 4 cifras';
                } else {
                    if ($pass === $passwd) {
                        echo 'La caja fuerte se ha abierto satisfactoriamente';
                        $_SESSION['c'] = 0;
                    } else {
                        echo "Lo siento, esa no es la combinación<br>";
                        $_SESSION['c'] = $_SESSION['c'] + 1;
                        echo "Te quedan " . (4 - $_SESSION['c']) . " intentos.";
                    }
                }
            } else {
                echo "4 oportunidades agotadas;";
                unset($_SESSION['c']);
            }
        }
        ?>
    </p>
</body>

</html>