<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Números aleatórios</title>
</head>

<body>
    <main>
        <header>
            <h1>Gerador de Números Aleatórios</h1>
            <h3>Entre 0 e 100</h3>
        </header>
        <p>
            <?php
                $valor = rand(0, 100);
                // lenta em versões anteriores a php 7
                echo "O número gerado com <em>rand()</em> é: <strong>{$valor}</strong>" ;
                echo "<br/>";
        
                $valor = mt_rand(0, 100);
                echo "O número gerado com <em>mt_rand()</em> é: <strong>{$valor}</strong>";
                echo "<br/>";
        
                // números aleatórios criptograficamente seguros
                $valor = random_int(0, 100);
                echo "O número gerado com <em>random_int()</em> é: <strong>{$valor}</strong>";
                echo "<br/>";
            ?>
        </p>
        <button onclick="javascript:window.location.reload()">&#x1F504; Gerar Outro</button>
    </main>

</body>

</html>