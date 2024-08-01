<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 7</title>
</head>
<body>
    <h1>Exercicio 7</h1>
    <?php 
        function imprimirNumeros() {
            for ($i = 1; $i <= 20; $i++) {
                if ($i % 3 == 0) {
                    echo "?\n";
                } else {
                    echo "$i\n";
                }
            }
        }
        
        imprimirNumeros();

    ?>
</body>
</html>