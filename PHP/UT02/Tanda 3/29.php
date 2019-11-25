<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ejercicio 29</title>
</head>

<body>
    <h1>Numeros divisibles</h1>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <p>
            Introduzca un número entero positivo (relativamente grande):
            <input type="number" name="numeroGrande" min="0" autofocus="" required="">
        </p>
        <p>
            Introduzca otro número (relativamente pequeño):
            <input type="number" name="numeroPequeno" min="0" required="">
        </p>
        <input type="submit" value="Aceptar">
    </form>
    <p>
        <?php
        if (isset($_POST['numeroGrande']) && isset($_POST['numeroPequeno'])) {
            $numeroGrande = $_POST['numeroGrande'];
            $numeroPequeno = $_POST['numeroPequeno'];
            $cuenta = 0;
            $suma = 0;

            echo "Los números enteros positivos menores que $numeroGrande";
            echo " que no son divisibles entre $numeroPequeno son los siguientes: <br><br>";

            for ($i = 1; $i < $numeroGrande; $i++) {
                if (($i % $numeroPequeno) != 0) {
                    echo "$i ";
                }
            }
        }
        ?>
    </p>
</body>

</html>