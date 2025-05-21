<?php
// Variaveis
$altura =  $_POST['altura'];
$peso = $_POST['peso'];
$imc = $_POST ['imc'];
// Calculo da Média do aluno
$imc = $peso / ($altura * $altura);

//Usando função if para validar a situação do Aluno

if ($imc < 18.5) {
    $imc = "Abaixo do peso! ";
} elseif ($imc >= 18.5 && $imc <= 24.9 ) {
    $imc = "Peso Normal! ";
} else {
    $resultado = "Aluno Aprovado! ".$media;
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas Alunos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <aside class="lado_direito"><?php echo $nm_aluno?></aside>
        <div class="nota_aluno"><?php echo $resultado?></div>
    </div>
    
</body>
</html>