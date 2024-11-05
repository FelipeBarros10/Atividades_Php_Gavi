<?php
  session_start();

  $name = $_SESSION['name'];

  $email = $_SESSION['email'];

  $address = $_SESSION['address'];



?>


<div>
  <h1>Bem vindo <?php echo $name ?></h1>
  <span>Este é seu e-mail: <?php echo $email ?>,</span>
  <span> seu é seu endereço:
      <?php echo $address['street']?>
    </span>
</div>