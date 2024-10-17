<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio de números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <?php 
        echo "<p>Gerando um número entre 0 e 100...</p>";
        $sorteio =  mt_rand(1, 100);
        echo "<p>O valor gerado foi <strong>$sorteio</strong></p>";
        ?>
        <p><a href="">Gerar outro</a></p>
    </main>
</body>
</html>