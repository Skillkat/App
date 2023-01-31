<!-- !!!CODIGGO PHP NO ALTERAR HASTA MEJORAR!!!-->
<?php

session_start();
if(isset($_SESSION['user_id'])){
    header('Location: Inicio.php');
}
require 'database.php';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email=:email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message;
    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])){
        $_SESSION['user_id'] = $results['id'];
        header('Location: Login.php');
    }else{
        $message = 'La cuenta no existe';
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
        <header>
            <a href="index.php"><br>School App</br></a>
        </header>

        <div class="container2">
            <div class="form sign-in-container">
                <h1>Iniciar sesion </h1>
                <?php if(!empty($message)): ?>
            <p><?= $message ?> </p>
            <?php endif; ?>
                <span>o <a href="registro.php">Registrarse</a></span>

                <form action="Login.php" method="post">
                    <input type="email" placeholder="Email o Usuario" name="email" required>
                    <input type="password" placeholder="Contrasena" name="password" required>
                    <input type="submit" value="Iniciar sesion">
                </form>

            </div>
        </div>
        
        <script src="" async defer></script>
    </body>
</html>