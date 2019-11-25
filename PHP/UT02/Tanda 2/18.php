<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio UT02 T2 18</title>
</head>

<body>
    <form action="18.php" method="post">
        <label for="numero">Número: </label>
        <input type="number" name="numero" id="numero">
        <input type="submit" value="Calcular">
    </form>
    <br><br>
    <?php
    if (isset($_POST['numero'])) {
        $num = $_POST['numero'];
        $r = ($num>=0) ? $num : ($num * -1);
        $i = 0;
        while($r > 0){
            $r = floor($r / 10);
            $i = $i + 1;
        }
        if ($num > 99999 || $num <-99999){
            echo 'Sólo se permiten números de 5 cifras';
        }
        else{
            echo "Tiene $i cifras";
        }
    }
    ?>
</body>

</html>