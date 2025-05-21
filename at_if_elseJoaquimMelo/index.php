<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Exercícios</title>
   
    <link rel="stylesheet" href="style.css">
    <style>
        
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f9;
            margin: 0;
        }
        .container {
            display: flex;
            gap: 20px;
        }
        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 250px;
            height: 300px;
            text-align: center;
            padding: 20px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px);
        }
        .card img {
            width: 80px;
            height: 80px;
            object-fit: contain;
            margin-bottom: 15px;
        }
        .card h3 {
            font-size: 18px;
            color: #333;
            margin: 10px 0;
        }
        .card p {
            color: #777;
        }
    </style>
</head>
<body>

    <div class="container">
      
        <div class="card" onclick="window.location.href='exercicio1/index.html'">
            <img src="img\uno.jpg" alt="Ícone Cadastro">
            <h3>Exercício 1</h3>
            <p>Nota do Aluno</p>
        </div>

       
        <div class="card" onclick="window.location.href='exercicio2/index.html'">
            <img src="img/lebron.jpg" alt="Ícone Login">
            <h3>Exercício 2</h3>
            <p>Temperatura</p>
        </div>

     
        <div class="card" onclick="window.location.href='exercicio3.php'">
            <img src="https://via.placeholder.com/80" alt="Ícone Contato">
            <h3>Exercício 3</h3>
            <p>Formulário de Contato</p>
        </div>
    </div>

</body>
</html>
