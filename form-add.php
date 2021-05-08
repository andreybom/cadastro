<?php
require 'init.php';
?>
<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" , charset="utf-8">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <title>Cadastro de Usuário - ULTIMATE PHP</title>
</head>

<body>

    <h1>Sistema de Cadastro - ULTIMATE PHP</h1>

    <h2>Cadastro de Usuário</h2>

    <form action="add.php" method="post">

        <div class="form-group">

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Nome:</span>
                </div>
                <input type="text" name="name" class="form-control" placeholder="Insira seu nome" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">E-mail:</span>
                </div>
                <input type="text" name="email" class="form-control" placeholder="Insira seu e-mail" aria-label="email" aria-describedby="basic-addon1">
            </div>
        </div>
        
        Gênero:
        <br>
        <input type="radio" name="gender" id="gener_m" value="m">
        <label for="gener_m">Masculino </label>
        <input type="radio" name="gender" id="gener_f" value="f">
        <label for="gener_f">Feminino </label>

        <br><br>

        <label for="birthdate">Data de Nascimento: </label>
        <br>
        <input type="text" name="birthdate" id="birthdate" placeholder="dd/mm/YYYY">

        <br><br>

        <input type="submit" value="Cadastrar">
    </form>

</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>