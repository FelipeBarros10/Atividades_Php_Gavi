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

//Transforma a resposta JSON em uma array PHP
$response = json_decode($getAllData, true);

//Capturando o dado enviado pelo form através do atributo 'name' setado no iput
$name = $_POST['name'];

  //Foreach que vai passar por todos os index do $response(que é a resposta da requisição)
  foreach($response as $itemResponse) {

      //Verificando se exiiste o nome enviado pelo formulário na resposta da requisição
      if($name == $itemResponse['name']) {
        //Armazenando em sessões algumas informações que serão usadas       
          $_SESSION['name'] = $name;
          $_SESSION['email'] = $itemResponse['email'];
          $_SESSION['address'] = $itemResponse['address'];

        //Encaminha para a próxima sessão (página)    
          header('location:usuarios.php');

          //Finaliza o if
          return true;

        //Caso não exista o nome na resposta, o usuário é direcionado para uma tela de erro
        }else{
          header('location:erro.php');
        }
  }   
?>
