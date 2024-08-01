<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <h1>Exercicio 1</h1>
    <?php 
        function substituirVogais($string) {
            $vogais = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
            
            $stringSubstituida = str_replace($vogais, '*', $string);
            
            return $stringSubstituida;
        }
        
        $resultado = substituirVogais("Teste");
        echo $resultado;

    ?>
</body>
</html>