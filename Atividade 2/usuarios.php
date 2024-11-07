<?php
  session_start();

  $name = $_SESSION['name'];

  $email = $_SESSION['email'];

  $address = $_SESSION['address'];

  function logout () { 
    //Limpar as sessões
    session_unset();
    //Destruíndo as sessões
    session_destroy();
    //redirecionando para a tela de login
    header('location:login.php');
  }

  //Verificação se
  if(isset($_POST['sair'])){
    logout();
  }



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Boas-vindas</title>
    <style>
        /* Estilização geral do body */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        /* Container principal com conteúdo */
        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            border-bottom: 1px solid #ccc;
        }

        /* Estilo para a área de boas-vindas */
        .welcome-area {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        /* Título de boas-vindas */
        .welcome-area h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }

        /* Texto de e-mail e endereço */
        .welcome-area div {
            font-size: 16px;
            color: #555;
        }

        .welcome-area span {
            display: block;
            margin-top: 5px;
        }

        /* Estilo do botão "Sair" */
        .logout-form {
            padding: 10px;
        }

        .logout-form button {
            padding: 8px 15px;
            font-size: 16px;
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* Efeito ao passar o mouse sobre o botão */
        .logout-form button:hover {
            background-color: #d32f2f;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="welcome-area">
            <h1>Bem-vindo(a), <?php echo $name ?></h1>
            <div>
                <span>Este é seu e-mail: <?php echo $email ?>,</span>
                <span>Seu endereço é: <?php echo $address['street'] ?></span>
            </div>
        </div>

        <form method="POST" class="logout-form">
            <button type="submit" name="sair">Sair</button>
        </form>
    </div>
</body>

</html>
