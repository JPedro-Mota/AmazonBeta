<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastro.css">
    <link rel="stylesheet" href="../css/header.css">
    <title>Cadastro</title>

<body>
    <header class="header">
        <nav class="nav">
            <div class="secao1">
                <a href="/" class="logo"><img src="../img/amazon-logo.png" alt=""></a>
                <ul class="nav-list">
                    <li><a href="#">Início</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Logística</a></li>
                </ul>
             </div>
            <input id="rectangle-1" class="rectangle-1" style="font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif" placeholder="   Tudo para você, de A a Z" onkeyup="search()">  </input>
            <a href="#" class="cadastro">Olá, faça seu login</a>
        </nav>
    </header>

    <div class="login">
        <h1>Cadastro</h1>
        <form method="POST" action="config.php"></form>
            <input type="text" placeholder="Nome" name="nome">
            <br><br>
            <input type="text" placeholder="E-mail" name="email">
            <br><br>
            <h4>Data de nascimento</h4>
            <input type="Date" placeholder="Data de Nascimento" name="data">
            <br><br>
            <input type="text" placeholder="Senha" name="senha">
            <br><br>
            <button class="bt-l">Enviar</button>
        </form>
    </div>
</body>
</html>