<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Invocador: <b><?php echo htmlspecialchars($_SESSION["username"]); ?>
    </div>
    <p>
        <a href="cadastro.php">Cadastrar personagem</a>
        <br><br>
        <a href="cadastros.txt">Lista de personagens
            <?php
                if (session_status() === '') {
                    header("location: login.php");
                }
            ?>
        </a>
        <br><br>
        <a href="logout.php">Logout</a>
    </p>
</body>
</html>