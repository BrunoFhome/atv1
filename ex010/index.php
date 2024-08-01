<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 10</title>
</head>
<body>
    <h1>Exercicio 10</h1>
    <?php 
        function ehPangrama($texto) {
            
            $texto = strtolower(str_replace(' ', '', $texto));
            
            
            $letrasEncontradas = array_fill(0, 26, false);
            
            
            for ($i = 0; $i < strlen($texto); $i++) {
                $char = $texto[$i];
                
                
                if ($char >= 'a' && $char <= 'z') {
                    
                    $indice = ord($char) - ord('a');
                    $letrasEncontradas[$indice] = true;
                }
            }
            
            
            foreach ($letrasEncontradas as $letra) {
                if (!$letra) {
                    return false;
                }
            }
            
            return true;
        }
        
        $texto1 = "Juiz faz com que whisky de malte baixe logo preço de venda";
        $texto2 = "Bruno Thomé Rei Foda Poderoso Exemplar ";
        
        if (ehPangrama($texto1)) {
            echo "\"$texto1\" é um pangrama.\n";
        } else {
            echo "\"$texto1\" não é um pangrama.\n";
        }
        
        if (ehPangrama($texto2)) {
            echo "\"$texto2\" é um pangrama.\n";
        } else {
            echo "\"$texto2\" não é um pangrama.\n";
        }

    ?>
</body>
</html>