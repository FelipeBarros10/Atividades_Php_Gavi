<?php

  session_start();

 include 'db.php';

 $getAllData = $conectBd->query("SELECT * FROM $userTable");

 $dataInArray = $getAllData->fetchAll(PDO::FETCH_ASSOC);


  $userName = $_REQUEST['nome'];
  $userEmail = $_REQUEST['email'];
  $userPassword = $_REQUEST['senha'];
  $userId = $_REQUEST['id'];




  if(!empty($userName) && !empty($userEmail) && !empty($userPassword)){
    $ArrayOfTheDataThatsGonnaBeChange = [];

    foreach($dataInArray as $item){
      if($userName == $item['NOME'] && $userEmail == $item['EMAIL'] && $userPassword == $item['SENHA']){
        echo 'Nenhum dado editado';
        return;
      } else {
        if($userName != $item['NOME']){
            
          $ArrayOfTheDataThatsGonnaBeChange['NOME'] = $userName;
            
         } 
          
        if($userEmail != $item['EMAIL']){
              
         $ArrayOfTheDataThatsGonnaBeChange['EMAIL'] = $userEmail;
            
        }
          
        if($userPassword != $item['SENHA']){
              
          $ArrayOfTheDataThatsGonnaBeChange['SENHA'] = $userPassword;
            
        } 
      } 
    }
      
    
    $commandSql = "UPDATE CADASTRO_USUARIOS SET NOME = :nome, EMAIL = :email, SENHA = :senha where ID = :id";

    $updateSql = $conectBd -> prepare($commandSql);

    $updateSql -> bindParam(":id", $userId);

    if(isset($ArrayOfTheDataThatsGonnaBeChange['NOME'])){
      $updateSql -> bindParam(":nome", $ArrayOfTheDataThatsGonnaBeChange['NOME']);

    } 
  
    if (isset($ArrayOfTheDataThatsGonnaBeChange['EMAIL'])){

      $updateSql -> bindParam(":email", $ArrayOfTheDataThatsGonnaBeChange['EMAIL']);

    }
    
    if (isset($ArrayOfTheDataThatsGonnaBeChange['SENHA'])){
      $updateSql -> bindParam(":senha", $ArrayOfTheDataThatsGonnaBeChange['SENHA']);
    }

    if($updateSql->execute()){
      header('location:index.php');
      exit();
    } else {
      echo 'Erro ao localizar dados';
      return;
    }

  } 



?>