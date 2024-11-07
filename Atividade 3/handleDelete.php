<?php

  include 'db.php';
  
  $getAllData = $conectBd->query("SELECT * FROM $userTable");

  $data = $getAllData->fetchAll(PDO::FETCH_ASSOC);

  $userId = $_REQUEST['id'];

  if(isset($userId)){

    $commandSql = "DELETE FROM CADASTRO_USUARIOS WHERE ID = :id";

    $deleteSql = $conectBd -> prepare($commandSql);

    $deleteSql -> bindParam(":id", $userId);

    if($deleteSql->execute()){
      header('location:index.php');
      exit();
    } else {
      echo 'erro ao excluir';
    }
  }

    

?>