<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
</head>
<body>
    <h1>Exercicio 4</h1>
    <?php 
        function verificarNum($numero) {
            if ($numero > 0) {
                return "positivo";
            } elseif ($numero < 0) {
                return "negativo";
            } else {
                return "zero";
            }
        }
        
        $numero1 = 1;
        $numero2 = -2;
        $numero3 = 0;
        
        echo "$numero1 é " . verificarNum($numero1); 
        echo "\n$numero2 é " . verificarNum($numero2); 
        echo "\n$numero3 é " . verificarNum($numero3); 

    ?>
</body>
</html>