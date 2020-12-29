<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Entre ou cadastre-se</title>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/global.css">


</head>

<body>
  
    <main>

        <section class="painel-login">
            
            <div class="card">

                <h1>Entre ou Cadastre-se</h1>

            <form action="login_usuario.php" method="post">
                <input type="email" name="email" placeholder="E-mail">
                <input type="password" name="senha" placeholder="Senha">
                <button type="submit">Entrar</button>
                <a href="./cadastro.php">Ainda não possui cadastro? Clique aqui</a>
           </form>

            </div>
            
        </section>

        
        <section class="painel-imagem">
            <img src="./images/login.svg" alt="login">
        </section>


    </main>


</body>

</html>