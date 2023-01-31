<!-- !!!CODIGGO PHP NO ALTERAR HASTA MEJORAR!!!-->
<?php
session_start();

require 'database.php';

if(isset($_SESSION['user_id'])){
  $records = $conn->prepare('SELECT id, email, password FROM users WHERE id= :id');
  $records->bindParam(':id', $_SESSION['user_id']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  $user = null;

  if(count($results)> 0){
    $user = $results;
  }
}

?>
<!-- !!!CODIGGO PHP NO ALTERAR HASTA MEJORAR!!!-->
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Iniciar sesion</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="registro.css">
    </head>
    <body>
      <h1>Pagina para de home, aqui iria informacion del usuario</h1>
      <?php if(!empty($user)):  ?>
        <br>Bienvenido. <?= $user['email'] ?>
        <br>Has iniciado sesion con exito.
        <a href="logout.php">
          Cerrar Sesion.
        </a>
        <?php else:  ?>
          <h1>Inicia sesion o registrate.</h1>
          <a href="Login.php">Iniciar sesion</a>
          <a href="registro.php">Registrarse</a>
          <?php endif; ?>
        <script src="" async defer></script>
    </body>
</html>