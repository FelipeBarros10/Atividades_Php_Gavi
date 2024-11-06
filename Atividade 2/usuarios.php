<?php
  session_start();

  $name = $_SESSION['name'];

  $email = $_SESSION['email'];

  $address = $_SESSION['address'];

  function logout () { 
    //Limpar as sessões
    session_unset();
    //Destruíndo as sessões
    session_destroy();
    //redirecionando para a tela de login
    header('location:login.php');
  }

  //Verificação se
  if(isset($_POST['sair'])){
    logout();
  }



?>


<div style="justify-content: space-between; display: flex; align-items: center; text-align:center; border-bottom: 1px solid black; ">
  <div style="justify-content: center; display: flex; align-items: center; text-align:center; flex-direction: column; ">
    <h1>Bem vindo(a) <?php echo $name ?></h1>
    <div>
      <span>Este é seu e-mail: <?php echo $email ?>,</span>
      <span> seu é seu endereço: <?php echo $address['street']?> </span>
    </div>
  </div>

  <form method="POST" style="padding: 0 10px;">
    <button type="submit" name="sair" style="border-bottom: 1px solid black;">Sair</button>
  </div>
  
</div>