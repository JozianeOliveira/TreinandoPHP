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
    $seg = $_GET['seg'] ?? 1;
?>

<main>
    <h1>Calculadora de Tempo</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="seg">Qual é o total de segundos?</label>
        <input type="number" name="seg" id="seg" value="<?=$seg?>">
        <input type="submit" value="Calcular">
    </form>

    <section id="resultado">
        <h2>Totalizando tudo</h2>

        <?php 
            // Cálculos corrigidos
            $sem = intdiv($seg, 604800);
            $resto = $seg % 604800;
            
            $dia = intdiv($resto, 86400);
            $resto = $resto % 86400;
            
            $hora = intdiv($resto, 3600);
            $resto = $resto % 3600;
            
            $min = intdiv($resto, 60);
            $seg = $resto % 60;
        ?>

        <p>Analisando o valor digitado, <strong><?=number_format($_GET['seg'], 0, ",", ".")?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=$sem?> semanas</li>
            <li><?=$dia?> dias</li>
            <li><?=$hora?> horas</li>
            <li><?=$min?> minutos</li>
            <li><?=$seg?> segundos</li>
        </ul>
    </section>
</main>
</body>
</html>
