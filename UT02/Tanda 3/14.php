<!-- Escribe un programa que pida una base y un exponente (entero positivo) y que calcule la potencia. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 13</title>
</head>

<body>
    <h1>Potencia</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <p>
            <label for="base">Base: </label>
            <input type="number" name="base" id="base">
        </p>
        <p>
            <label for="exponente">Exponente: </label>
            <input type="number" name="exponente" id="exponente">
        </p>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <p>
        <?php
        if (isset($_POST['base']) /* && is_numeric($_POST['base'])*/ && isset($_POST['exponente']) /*&& is_numeric($_POST['exponente'])*/ && $_POST['exponente'] >= 0) {
            $base = $_POST['base'];
            $exponente = $_POST['exponente'];
            $potencia = $base ** $exponente;
            echo "La potencia vale: $potencia";
        }
        ?>

    </p>
</body>

</html>