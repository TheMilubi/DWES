<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 13</title>
</head>

<body>
    <h1>Numeros positivos y negativos</h1>
    <!-- Escribe un programa que lea una lista de diez números y determine cuántos son positivos, 
y cuántos son negativos. -->
    <?php
    session_start();
    if(isset($_POST['numero'])&&is_numeric($_POST['numero'])){
        $num = $_POST['numero'];
        $_SESSION['count'][] = $num;
        if($num > 0) $_SESSION['positivos'][] = $num;
        else $_SESSION['negativos'][] = $num;
    }
    if (count($_SESSION['count']) == 10) { 
        $positivos = count($_SESSION['positivos']);
        $negativos = count($_SESSION['negativos']);
        echo "Números postivos: $positivos<br>";
        echo "Números negativos: $negativos<br>";
        
    } else {
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <input type="number" name="numero" id="numero">
            <input type="submit" name="enviar" value="Enviar">
        </form>
    <?php
    }
    ?>
</body>

</html>