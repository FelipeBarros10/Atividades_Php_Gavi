<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro: Nome Não Cadastrado</title>
    <style>
        /* Estilos gerais para o body */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Altura total da tela */
        }

        /* Estilo para a área de erro */
        .error-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 500px;
            width: 100%;
        }

        /* Título da mensagem de erro */
        .error-container h1 {
            font-size: 24px;
            color: #f07926; /* Cor vermelha para o erro */
            margin-bottom: 20px;
        }

        /* Estilo para o botão de voltar */
        .error-container a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #1d324d;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        /* Efeito ao passar o mouse sobre o botão */
        .error-container a:hover {
            background-color: #1d324d;
        }
    </style>
</head>

<body>
    <div class="error-container">
        <?php
        echo '<h1>Nome não cadastrado</h1>';
        ?>
        <p>O nome que você procurou não foi encontrado no nosso banco de dados. Por favor, tente novamente ou entre em
            contato com o suporte.</p>
        <a href="login.php">Voltar para a página inicial</a>
    </div>
</body>

</html>

