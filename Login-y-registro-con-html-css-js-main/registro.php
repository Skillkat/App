<?php
require 'database.php';

$message;

if (!empty($_POST['email'])&& !empty($_POST['password'])){
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if($stmt->execute()){
        $message = 'Successfully';
    }else{
        $message = 'Error inesperado creando la cuenta';
    }
}
?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Registrarse</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="registro.css">
    <body>
    <header>
            <a href="index.php"><br>School App</br></a>
        </header>
        <div class="container">
            <div class="container__form">
                <h1>Registrarse </h1>
                <?php if(!empty($message)): ?>
                    <p><?= $message ?></p>
                    <?php endif; ?>
                <form action="registro.php" method="post">
                    <span>o <a href="registro.php">Iniciar sesion</a></span>
                    <input type="email" placeholder="Email" name="email" required>
                    <input type="password" placeholder="Contrasena" name="password" required>
                    <input type="password" placeholder="Confirma tu Contrasena" name="confirm_password" required>
                    <input type="submit" value="Registrarse">
                </form>

            </div>
        </div>
        <script src="" async defer></script>
    </body>
</html>