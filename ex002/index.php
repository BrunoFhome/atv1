<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
    <h1>Exercicio 2</h1>
    <?php 
        function ehPrimo($numero) {
            if ($numero < 2) {
                return false;
            }
        
            for ($i = 2; $i <= sqrt($numero); $i++) {
                if ($numero % $i == 0) {
                    return false;
                }
            }
        
            return true;
        }
        
        $numero = 15;
        if (ehPrimo($numero)) {
            echo "$numero é um número primo.";
        } else {
            echo "$numero não é um número primo.";
        }

    ?>
</body>
</html>