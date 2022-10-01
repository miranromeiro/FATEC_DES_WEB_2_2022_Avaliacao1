<?php

$NOME = $_POST['nome_personagem'];
$CLASSE = $_POST['classe'];
$GUILDA = $POST['guilda'];

if(isset($_POST['nome_personagem']) && isset($_POST['classe']) && isset($_POST['guilda'])){
    if(!file_exists("cadastros.txt")){
        $handle = fopen("cadastros.txt", "w");
    } else {
        $handle = fopen("cadastros.txt", "a");
    }


    fwrite($handle, $_POST['nome_personagem']."\n");
    fwrite($handle, $_POST['classe']."\n");
    fwrite($handle, $_POST['guilda']."\n");
    fflush($handle);
    fclose($handle);
}

?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
  <title> Personagem cadastrado </title>
  <style type="text/css">
     body{ font: 14px sans-serif; text-align: center; }
  </style>
</head>
<body>
    <div class="page-header">
        <h1>
            <?php
                if (session_status() === PHP_SESSION_NONE) {
                    header("location: login.php");
                }
                
                echo "Personagem: ".$_POST['nome_personagem']."</br>";
                echo "Classe: ".$_POST['classe']."</br>";
                echo "Guilda: ".$_POST['guilda']."</br>";
            ?>
        Personagem cadastrado</h1><b>
        <br>
    </div>
    <p>
        <a href="cadastro.php" class="btn btn-primary">Cadastrar novamente</a>
        <br><br>
        <a href="logout.php" class="btn btn-danger">Sair da conta</a>
    </p>
</body>
</html>