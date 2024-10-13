<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Me livrando da maldição</title>
</head>
<body>
    <h1>
        <?php 
            echo "<p>Olá Mundo!\u{1F30E}</p>";
            date_default_timezone_set("America/Sao_Paulo");
            echo "Hoje é dia " . date("d/M/Y");
            echo " e a hora atual é " . date("G:i:s");
        ?>
    </h1>
    <p>Vamos tentar nos livrar da maldição.</p>
</body>
</html>