<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário Mínimo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
    // Capturando os dados do Formulário Retroalimentado
    $salario = $_GET['sal'] ?? 1412;
    $salmin = 1_412.00;
    ?>

    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="sal" value="<?=$salario?>" step="0.01">
            <p>Considerando o salário mínimo de <strong>R$<?=number_format($salmin, 2, ",", ".")?></strong></p>
            <input type="submit" value="Calcular">
        </form>

        <section id="resultado">
            <h2>Resultado Final</h2>
            <?php 
            $qtdde = intdiv($salario, $salmin);
            $resto = $salario % $salmin;
            echo "<p>Quem recebe um salário de R\$ " . number_format($salario, 2, ",", ".") . " ganha <strong>$qtdde salários mínimos</strong> + R\$ " . number_format($resto, 2, ",", ".") . "</p>"; 
            ?>
        </section>
</body>
</html>