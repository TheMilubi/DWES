<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 17</title>
</head>

<body>
    <h1>Suma de los 100 siguientes números</h1>
    <!-- Realiza un programa que sume los 100 números siguientes a un número entero y positivo 
    introducido por teclado. Se debe comprobar que el dato introducido es correcto (que es un 
    número positivo). -->
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <p>
            <label for="numero">Numero: </label>
            <input type="number" name="numero" id="numero">
        </p>

        <input type="submit" name="enviar" value="Enviar">
    </form>
    <p>
        <?php
        if (isset($_POST['numero']) && $_POST['numero'] >= 0) {
            $numero = $_POST['numero'];
            $sum = 0;
            for($i = $numero + 1; $i < $numero + 101; $i++){
                $sum += $i;
            }
            echo "La suma de los 100 números siguientes es: $sum";
        }
        ?>

    </p>
</body>

</html>