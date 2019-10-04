<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EjercicioUT0108</title>
  </head>
  <body>
    <?php
      $euro = 100;
      function conversorPeseta($euros){
        $peseta = $euros * 166.386;
        return $peseta;
      }
      
      echo $euro, " euros son ", conversorPeseta($euro), " pesetas.";
    ?>
  </body>
</html>