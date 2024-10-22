<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de Preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
    // Capturando os dados do Formulário Retroalimentado
    $preco = $_GET['preco'] ?? '0';
    $reajuste = $_GET['reajuste'] ?? '0';
?>

    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$preco?>">
            <label for="reajuste">Qual será o percentual do reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$reajuste?>">
            <input type="submit" value="Reajustar">
        </form>

        <?php 
            $aumento = $preco * $reajuste / 100;
            $precofinal = $preco + $aumento;
        ?>

        <section id="resultado">
            <h2>Resultado do Reajuste</h2>
            <p>O produto que custava R$<?=number_format($preco, 2, ",", ".")?>, com <strong><?=$reajuste?>% de aumento</strong> vai passar a custar <strong>R$ <?=number_format($precofinal, 2, ",", ".")?></strong> a partit de agora.</p>
        </section>
        <script>
            //Declaração automática
            mudaValor()
            function mudaValor() {
                p.innerText = reajuste.value;
            }
        </script>
</body>
</html>