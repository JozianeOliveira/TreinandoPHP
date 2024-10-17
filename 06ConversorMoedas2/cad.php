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
        <h1>Conversor de Moedas v1.0</h1>
    </header>
    <main>
        <?php 
        $valor = $_GET["valor"];
        $dolar = 0;
        $conversao = $valor * $dolar;
        echo "<p>Seus R$ $valor equivalem a <strong>US$ $conversao</strong></p>";
        echo "<p>*Cotação obtida diretamente do site do <strong>Banco Central do Brasil</strong>.</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>