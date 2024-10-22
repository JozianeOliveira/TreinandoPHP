<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Aritméticas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
    // Capturando os dados do Formulário Retroalimentado
    $val1 = $_GET['v1'] ?? '';
    $peso1 = $_GET['p1'] ?? '';
    $val2 = $_GET['v2'] ?? '';
    $peso2 = $_GET['p2'] ?? '';
    ?>

    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">1º Valor</label>
            <input type="number" name="v1" id="v1" value="<?=$val1?>" required>
            <label for="p1">1º Peso</label>
            <input type="number" name="p1" id="p1" value="<?=$peso1?>" min="1" required>
            <label for="v2">2º Valor</label>
            <input type="number" name="v2" id="v2" value="<?=$val2?>" required>
            <label for="p2">2º Peso</label>
            <input type="number" name="p2" id="p2" value="<?=$peso2?>" min="1" required>
            <input type="submit" value="Calcular Médias">
        </form>

        <section id="resultado">
            <h2>Cálculo das Médias</h2>
            <?php 
            $mediasim = ($val1 + $val2) / 2;
            $mediapon = (($val1 * $peso1) + ($val2 * $peso2)) / ($peso1 + $peso2);

            echo "<p>Analisando os valores $val1 e $val2: </p>"; 
            echo "<ul><li><strong>A Média Aritmética Simples </strong> entre os valores é igual a " . number_format($mediasim, 2, ",", ".") . "</li></ul>";
            echo "<ul><li><strong>A Média Aritmética Ponderada </strong> com pesos $peso1 e $peso2 é igual a " . number_format($mediapon, 2, ",", ".") . "</li></ul>";
            ?>
        </section>
</body>
</html>
