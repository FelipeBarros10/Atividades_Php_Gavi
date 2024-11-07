<?php

 //Armazenando a URL em uma variável
 $url = "https://jsonplaceholder.typicode.com/users";

  //Dando início ao cURL
 $curlRequest = curl_init();

//Definindo a opção de configuração da request
  //Primeiro parâmetro é a variável de Início
  //Segundo parâmetro seria um indicativo para a função de qual endereço ela deve acessar
  //Terceiro paraâmetro é o valor do endereço mo qual será acessado.

 curl_setopt($curlRequest, CURLOPT_URL, $url);


//Retorna a resposta como string
 curl_setopt($curlRequest, CURLOPT_RETURNTRANSFER, true);


//Armazenando a resposta
 $getAllData = curl_exec($curlRequest);

// transforma a resposta JSON em uma array PHP
 $response = json_decode($getAllData, true);

 

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Dados</title>
    <style>
        /* Estilização do body */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            overflow-x: hidden;
        }

        /* Container para centralizar a tabela */
        .table-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            padding: 20px;
        }

        /* Estilo da tabela */
        table {
            width: 100%;
            max-width: 1200px;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        /* Estilo para os cabeçalhos da tabela */
        th {
            background-color: #1d324d;
            color: white;
            padding: 12px 15px;
            text-align: left;
        }

        /* Estilo para as células da tabela */
        td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        /* Estilo para a linha da tabela ao passar o mouse */
        tr:hover {
            background-color: #f1f1f1;
        }

        /* Estilo para a primeira coluna */
        td:first-child {
            font-weight: bold;
        }

        /* Estilo para a última linha da tabela */
        tr:last-child td {
            border-bottom: none;
        }

        /* Responsividade da tabela */
        @media screen and (max-width: 768px) {
            table {
                font-size: 14px;
            }

            th, td {
                padding: 8px;
            }
        }
    </style>
</head>

<body>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Empresa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($response as $item) { ?>
                    <tr>
                        <td><?php echo $item['id']; ?></td>
                        <td><?php echo $item['name']; ?></td>
                        <td><?php echo $item['email']; ?></td>
                        <td><?php echo $item['phone']; ?></td>
                        <td><?php echo $item['company']['name']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>
