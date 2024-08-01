<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 9</title>
</head>
<body>
    <h1>Exercicio 9</h1>
    <?php 
        function calcularFibonacci($termos) {
            $fibonacci = [0, 1];
        
            for ($i = 2; $i < $termos; $i++) {
                $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
            }
        
            return $fibonacci;
        }
        
        $termos = 10;
        
        $fibonacci = calcularFibonacci($termos);
        
        foreach ($fibonacci as $numero) {
            echo $numero . "<br>";
        }

    ?>
</body>
</html>