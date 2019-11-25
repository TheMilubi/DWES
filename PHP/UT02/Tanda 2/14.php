<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio UT02 T2 14</title>
</head>

<body>
    <!-- Realiza un programa que diga si un número introducido por teclado es par y/o divisible entre 5. -->
    <form action="14.php" method="post">
        <label for="numero">Número: </label>
        <input type="number" name="numero" id="numero">
        <input type="submit" value="Calcular">
    </form>
    <br><br>
    <?php 
        if(!empty($_POST['numero']))
        {
            $numero = $_POST['numero'];
            if ($numero % 2 == 0)
            {
                echo "El número ${_POST['numero']} es par<br>";
            }
            else
            {
                echo "El número $numero es impar<br>";
            }
            if ($numero % 5 == 0)
            {
                echo "El número $numero es divisible por 5<br>";
            }
            else
            {
                echo "El número $numero no es divisible por 5<br>";
            }
        }
    ?>
</body>

</html>