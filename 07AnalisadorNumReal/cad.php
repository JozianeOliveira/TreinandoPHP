<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php 
        $numero = $_GET["numero"];
        echo "<p>Analisando o número  <strong>$numero</strong> informado pelo usuário:</p>";
        $inteiro = intval($numero);
        echo "<p>A parte inteira do número é <strong>$inteiro</strong></p>";
        $frac = $numero - $inteiro;
        echo "<p>A parte fracionária do número é <strong>$frac</strong></p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>