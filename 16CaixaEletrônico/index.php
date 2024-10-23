<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
<?php 
    // Capturando os dados do Formulário Retroalimentado
    $valor = $_GET['val'] ?? 0;
?>

<main>
    <h1>Caixa Eletrônico</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="val">Qual valor você deseja sacar? (R$) <sup>*</sup></label>
        <input type="number" name="val" id="val" step="5" required value="<?=$valor?>">
        <p style="font-size: 0.7em;"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10, R$5</p>
        <input type="submit" value="Sacar">
    </form>

    <?php 
            $resto = $valor;

            $cem = floor($resto / 100);
            $resto %= 100;
            
            $cinquenta = floor($resto / 50);
            $resto %= 50;
            
            $dez = floor($resto / 10);
            $resto %= 10;

            $cinco = floor($resto / 5);
        ?>

    <section id="resultado">
        <h2>Saque de R$<?=number_format($valor, 2, ",", ".")?> realizado</h2>

        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"> x <?=$cem?></li>
            <li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"> x <?=$cinquenta?></li>
            <li><img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota"> x <?=$dez?></li>
            <li><img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota"> x <?=$cinco?></li>
        </ul>
    </section>
</main>
</body>
</html>
