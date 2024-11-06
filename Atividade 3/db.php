<?php

  $hostName = 'localhost';
  $userName = 'root';
  $password = '';
  $dataBase = 'usuarios_bd';
  $userTable = 'cadastro_usuarios';


  try {
      $conectBd = new PDO("mysql:host=$hostName;dbname=$dataBase", $userName, $password);
      $conectBd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  } catch (PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
      exit();
  }
  



?>