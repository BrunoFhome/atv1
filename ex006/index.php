<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 6</title>
</head>
<body>
    <h1>Exercicio 6</h1>
    <?php 
        function ehPalindromo($palavra) {
            
            $palavra = strtolower(str_replace(' ', '', $palavra));
            
            $comprimento = strlen($palavra);
            
            for ($i = 0; $i < $comprimento / 2; $i++) {
                if ($palavra[$i] != $palavra[$comprimento - $i - 1]) {
                    return false;
                }
            }
            
            return true;
        }
        
        
        $palavra1 = "mirim";
        $palavra2 = "bruno";
        $palavra3 = "A base do teto desaba";
        
        if (ehPalindromo($palavra1)) {
            echo "\"$palavra1\" é um palíndromo.\n";
        } else {
            echo "\"$palavra1\" não é um palíndromo.\n";
        }
        
        if (ehPalindromo($palavra2)) {
            echo "\"$palavra2\" é um palíndromo.\n";
        } else {
            echo "\"$palavra2\" não é um palíndromo.\n";
        }
        
        if (ehPalindromo($palavra3)) {
            echo "\"$palavra3\" é um palíndromo.\n";
        } else {
            echo "\"$palavra3\" não é um palíndromo.\n";
        }

    ?>
</body>
</html>