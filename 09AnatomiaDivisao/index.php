<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma Divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    // Capturando os dados do Formulário Retroalimentado
    $dividendo = $_GET['v1'] ?? 0;
    $divisor = $_GET['v2'] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Dividendo</label>
            <input type="number" name="v1" id="v1" value="<?=$dividendo?>">
            <label for="v2">Divisor</label>
            <input type="number" name="v2" id="v2" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>

        <section id="resultado">
            <h2>Estrutura da divisão</h2>
            <?php 
            $resultado = $dividendo / $divisor;
            $resto = $dividendo - ($resultado * $divisor); 
            ?>
        </section>
    </main>
</body>
</html>