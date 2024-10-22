<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
    // Capturando os dados do Formulário Retroalimentado
    $numero = $_GET['num'] ?? 1;
    ?>

    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?=$numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>

        <section id="resultado">
            <h2>Resultado Final</h2>
            <?php 
            $quadrada = sqrt($numero);
            $cubica = $numero ** (1/3);
            echo "<p>Analisando o <strong>número $numero</strong>, temos: </p>"; 
            echo "<ul><li>A sua raiz quadrada é <strong>" . number_format($quadrada, 3, ",", ".") . " </strong></li></ul>";
            echo "<ul><li>A sua raiz quadrada é <strong>" . number_format($cubica, 3, ",", ".") . " </strong></li></ul>";
            ?>
        </section>
</body>
</html>