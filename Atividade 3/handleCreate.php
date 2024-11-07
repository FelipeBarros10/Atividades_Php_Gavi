<?php
   

  include 'db.php';
  
  $getAllData = $conectBd->query("SELECT * FROM $userTable");

  $dataInArray = $getAllData->fetchAll(PDO::FETCH_ASSOC);

  

  $userName = $_REQUEST['nome'];
  $userEmail = $_REQUEST['email'];
  $userPassword = $_REQUEST['senha'];

  if(!empty($userName) && !empty($userEmail) && !empty($userPassword)){
    $insertSql = $conectBd->prepare("INSERT INTO $userTable (NOME, EMAIL, SENHA) VALUES (:nome, :email, :senha)");

    $insertSql -> bindParam(':nome', $userName);
    $insertSql -> bindParam(':email', $userEmail);
    $insertSql -> bindParam(':senha', $userPassword);

    if($insertSql->execute()){
      header('location:index.php');
      exit();
    }
  }

?>