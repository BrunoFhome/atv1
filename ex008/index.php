<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 8</title>
</head>
<body>
    <h1>Exercicio 8</h1>
    <?php 
        function removerEspacos($string) {
            $stringSemEspacos = str_replace(' ', '', $string);
            return $stringSemEspacos;
        }
        
        // Testando a função
        $texto = "Ola me chamo Bruno, Prazer.";
        $resultado = removerEspacos($texto);
        echo $resultado;

    ?>
</body>
</html>