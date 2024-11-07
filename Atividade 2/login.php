
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>

        .form-container {
            max-width: 400px; /* Largura máxima do formulário */
            margin: 50px auto; /* Centraliza o formulário na tela */
            padding: 20px; /* Espaçamento interno do formulário */
            background-color: #fff; /* Cor de fundo do formulário */
            border-radius: 8px; /* Bordas arredondadas */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra suave */
            font-family: 'Arial', sans-serif; /* Fonte do formulário */
        }


        .form-container label {
            display: block; /* Faz com que o label ocupe uma linha inteira */
            margin-bottom: 8px; /* Espaçamento abaixo do label */
            font-size: 16px;
            color: #333; /* Cor do texto do label */
        }

    
        .form-container input[type="text"] {
            width: 100%; /* Faz o input ocupar toda a largura do formulário */
            padding: 12px; /* Espaçamento interno */
            margin-bottom: 20px; /* Espaço abaixo do input */
            border: 1px solid #ccc; /* Borda padrão */
            border-radius: 5px; /* Bordas arredondadas */
            font-size: 16px; /* Tamanho da fonte */
            background-color: #f9f9f9; /* Cor de fundo do input */
            transition: border-color 0.3s ease, box-shadow 0.3s ease; /* Efeito de transição */
        }

        .form-container input[type="text"]:focus {
            border-color: #1d324d; /* Cor da borda quando o campo estiver em foco */
            box-shadow: 0 0 5px rgba(76, 175, 80, 0.5); /* Efeito de sombra suave */
            outline: none; /* Remove a borda padrão do navegador */
        }

        .form-container button {
            width: 100%; /* Faz o botão ocupar toda a largura do formulário */
            padding: 12px; /* Espaçamento interno */
            background-color: #1d324d; /* Cor de fundo do botão */
            color: white; /* Cor do texto */
            border: none; /* Remove a borda padrão */
            border-radius: 5px; /* Bordas arredondadas */
            font-size: 16px; /* Tamanho da fonte */
            cursor: pointer; /* Altera o cursor para indicar que é clicável */
            transition: background-color 0.3s ease; /* Efeito de transição ao passar o mouse */
        }

        .form-container button:hover {
            background-color: #1d324d; /* Cor do fundo do botão quando o mouse passa por cima */
        }

        /* Estilo para o botão ao ser pressionado */
        .form-container button:active {
            background-color: #1d324d; /* Cor do fundo quando o botão é pressionado */
        }


        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9; /* Cor de fundo do corpo */
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Ocupa 100% da altura da tela */
        }

        h1 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h1>Faça seu login</h1>
            <form action="autenticaçãoNome.php" method="POST">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" required><br><br>

                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
</body>

</html>
