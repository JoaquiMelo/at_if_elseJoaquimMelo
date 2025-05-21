<?php
if(isset($_GET['temperatura'])){

    $temperatura = floatval($_GET['temperatura']);
    $mensagem = "";

    if ($temperatura <= 0) {
        $mensagem =  "Menor que 0°C. Congelante!";

    } elseif ($temperatura >= 0 && $temperatura <= 15) {
        $mensagem =   "Maior ou igual a 0°C e menor que 15°C. Muito Frio!";

    } elseif ($temperatura >= 15 && $temperatura <= 25) {
        $mensagem = "Maior ou igual a 15°C e Menor que 25°C. Razoavel.";

    } elseif ($temperatura >= 25 && $temperatura <= 35) {
        $mensagem = "Menor ou igual a 25°C. Calor.";

    } else {
        $mensagem = "Acima de 35°C. Muito Calor!";

    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatura</title>
</head>
<body>
    <h1>Temperatura: </h1>
    <p><?php echo  $mensagem  ?></p>
    <a href="/at_if_elseJoaquimMelo/index.php">Voltar a Home</a>
</body>
</html>