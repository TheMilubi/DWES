<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>EjercicioUT0109</title>
    </head>
    <body>
        <?php
        $peseta = 500;
        function conversorEuros($pesetas){
            $euros = $pesetas / 166.386;
            return $euros;
        }
        $euros = round($pesetas / 166.386, 2);
        echo $peseta, " pesetas son ", conversorEuros($peseta), " euros";
        ?>
    </body>
</html>