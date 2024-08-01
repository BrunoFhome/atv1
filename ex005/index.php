<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>
</head>
<body>
    <h1>Exercicio 5</h1>
    <?php 
        function contarPalavrasEImprimir($frase) {
            
            $palavras = explode(' ', $frase);
            
            $numeroDePalavras = count($palavras);
            
            echo "Número de palavras: $numeroDePalavras<br>";
            
            foreach ($palavras as $palavra) {
                echo "$palavra<br>";
            }
        }
        

        $frase = "Ola eu sou o Bruno";
        contarPalavrasEImprimir($frase);
        

    ?>
</body>
</html>