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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Resultado da Temperatura</title>
  <style>
    body {
      background: linear-gradient(to right, #f12711, #f5af19);
      font-family: "Segoe UI", sans-serif;
      color: #fff;
      height: 100vh;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .result-box {
      background: rgba(255, 255, 255, 0.1);
      padding: 30px 40px;
      border-radius: 20px;
      backdrop-filter: blur(10px);
      text-align: center;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
    }

    h1 {
      margin-bottom: 15px;
    }

    p {
      font-size: 1.2rem;
      font-weight: bold;
    }

    a {
      display: inline-block;
      margin-top: 20px;
      text-decoration: none;
      background: #fff;
      color: #f12711;
      padding: 10px 20px;
      border-radius: 10px;
      font-weight: bold;
      transition: 0.3s ease;
    }

    a:hover {
      background: #f5f5f5;
    }
  </style>
</head>
<body>
  <div class="result-box">
    <h1>Resultado</h1>
    <p><?php echo $mensagem; ?></p>
    <a href="index.html">⏪ Voltar</a>
  </div>
</body>
</html>