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
<div style="justify-content: center; display: flex; align-items:center; width:100%;">
  <table border="1">
      <tr>
          <td>Id</td>
          <td>Nome</td>
          <td>Email</td>
          <td>Telefone</td>
          <td>Empresa</td>
      </tr>
  <?php foreach($response as $item){ ?>
          <tr>
              <td><?php echo $item['id']; ?></td>
              <td><?php echo $item['name']; ?></td>
              <td><?php echo $item['email']; ?></td>
              <td><?php echo $item['phone']; ?></td>
              <td><?php 
              $companyData = $item['company'];
              echo $companyData['name'];
              ?></td>
          </tr>
  <?php } ?>
  </table>
</div>