<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Document</title>
</head>
<body>
    <div class="form_cadastro">
        <form action="cadastro" method="post">
            <label for="nome_personagem">Nome do personagem</label><br>
            <input type="text" name="nome_personagem"> <br>

            <label for="nome_personagem">Classe</label><br>
            <input type="text" name="classe"> <br>

            <label class="form-control">
                <input type="radio" name="radio" />
                Masculino
                <input type="radio" name="radio2">
                Feminino
            </label>

            <label for="nome_personagem">Guilda</label><br>
            <input type="text" name="guilda"><br>
        </form>
    </div>
</body>
</html>