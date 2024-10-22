<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converssor de Moedas 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <h1>Conversor de Moedas v1.0</h1>
    </header>
    <main>
        <?php 
        $valor = $_GET["valor"] ?? 0;
        $inicio = date("m-d-Y", strtotime("- 7 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        

        $dolar = $dados["value"][0]["cotacaoCompra"];
        $conversao = $valor / $dolar;  
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY); //biblioteca intl, formatação de moedas - internacionalização
        
        echo "<p>Seus " . numfmt_format_currency($padrao, $valor, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $conversao, "USD") . "</p>";
        echo "<p><strong>*Cotação de " . numfmt_format_currency($padrao, $dolar, "USD") . "</strong> vinda da <a href='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/aplicacao#!/recursos/CotacaoDolarPeriodo#eyJmb3JtdWxhcmlvIjp7IiRmb3JtYXQiOiJqc29uIiwiJHRvcCI6MSwiZGF0YUZpbmFsQ290YWNhbyI6IjEwLTE4LTIwMjQiLCJkYXRhSW5pY2lhbCI6IjEwLTExLTIwMjQiLCIkb3JkZXJieSI6IgQyBCBkZXNjIn0sInByb3ByaWVkYWRlcyI6WzAsMl19' target='_blank'>API do Banco Central</a>.</p>";
        ?>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>
