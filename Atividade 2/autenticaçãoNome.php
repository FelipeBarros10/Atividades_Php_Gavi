<?php
  session_start();

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

$name = $_POST['name'];


$_SESSION['allData'] = $response;


  foreach($response as $itemResponse) {

      if($name == $itemResponse['name']) {
          $_SESSION['name'] = $name;
          $_SESSION['email'] = $itemResponse['email'];
          $_SESSION['address'] = $itemResponse['address'];
          header('location:usuarios.php');
          return true;

        }else{
          header('location:erro.php');
        }
  }   
?>
