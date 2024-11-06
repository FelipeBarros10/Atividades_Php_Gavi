<?php

  include 'db.php';
  
  $getAllData = $conectBd->query("SELECT * FROM $userTable");

  $dataInArray = $getAllData->fetchAll(PDO::FETCH_ASSOC);

  $idOfUser = $_GET['id'];

  if($idOfUser > 0) {
    foreach($dataInArray as $item){
      if($idOfUser == $item['ID']){
          $showUserName = $item['NOME'];
          $showUserEmail = $item['EMAIL'];
          $showUserPassword = $item['SENHA'];
        break;
      } 
    } 
  } else {
     echo 'não achou'; 
  }

?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Simples</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f9;
        }

        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            margin-bottom: 8px;
            display: block;
        }

        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0 20px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Cadastro</h2>
        <form action="handleEdit.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required value="<?php echo $showUserName  ?>"> 

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required value="<?php echo $showUserEmail  ?>">

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required value="<?php echo $showUserEmail  ?>">

            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>
