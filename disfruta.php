<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DisFruta</title>
    <style>
        span {
            font-size: 4rem;
        }
    </style>
</head>

<body>
    <h1>DisFruta</h1>
    <!-- 
        Debes crear un programa que indique el número de veces que aparece una fruta en una coleccion:
        El programa tendra una sola pagina
        Cada vez se carga la pagina se muestran entre 7 y 20 frutas al azar.
        La frutas serán entidades unicode de #127815 al #127827
        Te dará unos resultados con el número de veces que aparece cada fruta distinta
        Si es 1 o mas la palabra vez se pondra en singular o plural respectivamente.
    -->
    <h2>Frutas</h2>


    <?php
    $n = rand(7, 20);
    $fruta = [];
    $cont = [];
    for ($i = 0; $i < $n; $i++) {
        $nFruta = dechex(rand(hexdec("127815"), hexdec("127827")));
        if (in_array($nFruta, $fruta)) {
            $index = array_search($nFruta, $fruta);
            $cont[$index] = $cont[$index] + 1;
        } else {
            $fruta[] = $nFruta;
            $cont[] = 1;
        }
        echo "<span>&#$nFruta;</span>";
    }
    /* foreach($fruta as $f){
            echo "<p>&#$f;</p>";
        }
        foreach($cont as $c){
            echo "<p>$c</p>";
            
        } */

    ?>

    <h2>Resultados</h2>
    <?php
    for ($i = 0; $i < count($fruta); $i++) {
        echo "<p>La fruta &#" . $fruta[$i] . "; aparece " . $cont[$i];
        if($cont[$i] == 1){
            echo " vez.</p>";
        }else{
            echo " veces.</p>";
        }
    }
    ?>
    <button onclick="location.reload()">¡¡¡ DisFruta otra vez !!!</button>
    <!-- <p>
        <a href="<?php echo $_SERVER['PHP_SELF'] ?>">&lt;&lt; Volver</a>
    </p> -->
</body>

</html>