<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="form_cadastro">
        <form action="cadastrados.php" method="post">
            <fieldset>
            <label for="nome_personagem">Nome do personagem</label><br>
            <input type="text" name="nome_personagem" id="nome_personagem" placeholder="ex.: Gandalf"> <br>

            <label for="nome_personagem">Classe</label><br>
            <input type="text" name="classe" id="classe" placeholder="ex.: Druida, Ladino"> <br>

            <br>
            <label for="nome_personagem">Guilda</label><br>
            <input type="text" name="guilda" id="guilda" placeholder="ex.: Los Grandes"><br>

            <div>
              <button type="submit"  class="btn btn-primary"> Cadastrar </button>
            </div>
            </fieldset>
        </form>
    </div>
</body>
</html>