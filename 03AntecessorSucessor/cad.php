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
        <h1>Resultado Final</h1>
    </header>
    <main>
        <p>
        <?php 
        $numero = $_GET["numero"] ?? 0;
        echo "<p>O número escolhido foi <strong>$numero</strong></p>";
        $antecessor = $numero - 1;
        echo "<p>O seu <em>antecessor</em> é $antecessor</p>";
        $sucessor = $numero + 1;
        echo "<p>O seu <em>sucessor</em> é $sucessor</p>";
        ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>