<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>
    <h1>Exercicio 3</h1>
    <?php 
        function inverterString($string) {
    
            $stringInvertida = '';
            
            
            $comprimento = strlen($string);
            
            
            for ($i = $comprimento - 1; $i >= 0; $i--) {
                
                $stringInvertida .= $string[$i];
            }
            
            return $stringInvertida;
        }
        
        
        $texto = "Testando as strings";
        $resultado = inverterString($texto);
        echo $resultado; 
    ?>
</body>
</html>