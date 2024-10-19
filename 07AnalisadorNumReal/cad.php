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
        $numero = $_GET["numero"] ?? 0;
        echo "<p>Analisando o número <strong>" . number_format($numero, 3, ",", ".") . "</strong> informado pelo usuário:</p>";

        $inteiro = (int) $numero;

        echo "<p>A parte inteira do número é <strong>" . number_format($inteiro, 0, ",", ".") . "</strong></p>";

        $frac = $numero - $inteiro;

        echo "<p>A parte fracionária do número é <strong>" . number_format($frac, 3, ",", ".") . "</strong></p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>