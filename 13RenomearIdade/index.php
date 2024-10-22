<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
    // Capturando os dados do Formulário Retroalimentado
    $anoatual = date("Y");
    $nasc = $_GET['nasc'] ?? 2000;
    $ano = $_GET['ano'] ?? $anoatual;
?>

    <main>
        <h1>Calculando sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" min="1900" max="<?=$anoatual?>" value="<?=$nasc?>">
            <label for="ano">Quer saber sua idade em que ano? (atualmente estamos em <?=$anoatual?>)</label>
            <input type="number" name="ano" id="ano" value="<?=$ano?>">
            <input type="submit" value="Qual será minha idade?">
        </form>

        <section id="resultado">
            <h2>Resultado</h2>
            <?php 
            $idade = $ano - $nasc;
            echo "<p>Quem nasceu em $nasc vai ter <strong>$idade anos</strong> em $ano</p>";
            ?>
        </section>
</body>
</html>