<!DOCTYPE html>
<html>
 <head>
     <title>Login</title>
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <!-- vinculo a bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Temas-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("LOGIN/estilo.css");?>"> 
<link rel="stylesheet" type="text/css" href="<?php echo base_url("LOGIN/style.css");?>"> 
 </head>
 <body>

     <?php
        if (isset($error_message)) {
        echo "<div class='message'>";
        echo $error_message;
        echo "</div>";
        }
        ?>
   <?php echo validation_errors(); ?>
   <?php 
    // Va al controlador y busca el método user_login_process

    $route=base_url()."index.php/Inicio/user_login_process";
    $attributes = array('id' => 'mylogin');
    echo form_open($route, $attributes);

 ?>


<div class="login-box">
      <img src="https://raw.githubusercontent.com/SierraLynn/Ingenieria_Software/master/logo.png" class="avatar" alt="Avatar Image">

  <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0">
<link rel="stylesheet"  href="style.css">
</head>
<body>

  <form class="box" action="" method="post">
    <input type="text" name="username" placeholder="Correo">
    <input type="password" name="password" placeholder="******">
<input type="submit" name="" placeholder="Login">
</form> 

<!-- vinculando a libreria Jquery-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body> 
</html>