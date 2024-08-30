<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
    <script src ="js/acesso.js"></script>
</head>
<body>
    <div class="centraliza">
        <div class="form">
            <h1 style="text-align:center;">Login</h>
            <form action= "home.php" method= "post" class="form">
                Nome:<br>
                <input type="text" name="name"  required class = "i1"> <br><br>

                Email: <br>
                <input type="text" name="email" required class="i1"> <br><br>

                Senha: <br>
                <input type="text" name="senha" required class="i1"><br><br>
                 
                <p><a href="forgotpass.html" class = "esqueceu">Esqueceu a senha?</a>
                <a href="cadastrar.php" class="esqueceu">Cadastrar Novo</a></p>
                <input type="submit" class="centralizaBotao" value="Enviar Dados">
            </form>
        </div>
    </div>
</body>
</html>
