<?php

  include 'db.php';
  
  $getAllData = $conectBd->query("SELECT * FROM $userTable");

  $data = $getAllData->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Estilizada com CSS e Ícones do Bootstrap</title>
    <!-- Link para o Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJ5bF6C0d1e3g1fVdXiTnXntpW48B32V3V6Xf9vTtZb7d68H9rs6E5Q6+F5O" crossorigin="anonymous">
    <!-- Link para o Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* Estilo geral da página */
        body {
            font-family: Arial, sans-serif;        
            margin: 0;
            padding: 0;
        }

        .center{
          width: 100%;
          display: flex;
          text-align: center;
          justify-content: center;
          flex-direction: column;
          align-items: center;
        }

        /* Estilo da tabela */
        table {
            width: 80%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        /* Cabeçalho da tabela */
        th {
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            text-align: left;
            font-size: 1.1em;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        /* Linhas da tabela */
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            font-size: 1em;
        }

        /* Efeito de hover nas linhas da tabela */
        tr:hover {
            background-color: #f5f5f5;
        }

        /* Estilo da primeira coluna para destaque */
        td:first-child {
            font-weight: bold;
        }

        /* Bordas arredondadas nas células */
        th, td {
            border-radius: 4px;
        }

        /* Última linha com borda mais grossa */
        tr:last-child td {
            border-bottom: 2px solid #4CAF50;
        }

        /* Estilo dos ícones de ação */
        .acao {
            display: flex;
            gap: 10px;
            justify-content: flex-start;
        }

        .acao a {
            font-size: 1.2em;
            cursor: pointer;
            padding: 5px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .acao a:hover {
            background-color: #f0f0f0;
        }

        .acao a.delete:hover {
            color: #e74c3c; /* Cor vermelha para o ícone de deletar */
        }

        .acao a.edit:hover {
            color: #3498db; /* Cor azul para o ícone de editar */
        }
    </style>
</head>
<body>
  <div class="center">
    <div>
      <a href="create.php">Cadastre um usuário</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $row) { ?>
                <tr>
                  <td><?php echo $row['ID'] ?></td>
                  <td><?php echo $row['NOME'] ?></td>
                  <td><?php echo $row['EMAIL'] ?></td>
                  <td class="acao">
                      <!-- Ícones de edição e lixeira do Bootstrap -->
                      <?php echo '<a class="edit" href="edit.php?id= '.$row['ID'].'"><i class="bi bi-pencil-square " title="Editar"></i></a>' ?>
                      <a class="delete" href=""><i class="bi bi-trash " title="Excluir"></i></a>
                  </td>
                </tr>
            <?php }  ?>
        </tbody>
    </table>
  </div>
   
    <!-- Script para carregar o Bootstrap JS (opcional, caso queira usar interatividade como modais, etc.) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0Szk3h0s4EX5Ejg9g93rJXpD0zj0FZQJ6kQW5DZr3bX+IMBG" crossorigin="anonymous"></script>
</body>
</html>
