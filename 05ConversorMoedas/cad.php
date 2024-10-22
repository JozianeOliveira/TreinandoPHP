<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversosr de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <h1>Conversor de Moedas v1.0</h1>
    </header>
    <main>
        <?php 
        $valor = $_GET["valor"] ?? 0;
        $dolar = 5.50;
        $conversao = $valor / $dolar;  
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY); //biblioteca intl, formatação de moedas - internacionalização
        
        echo "<p>Seus " . numfmt_format_currency($padrao, $valor, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $conversao, "USD") . "</p>";
        echo "<p><strong>*Cotação fixa de " . numfmt_format_currency($padrao, $dolar, "USD") . "</strong> informada diretamente no código.</p>";
        ?>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>
