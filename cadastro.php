<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="./css/cadastro.css">
    <link rel="stylesheet" href="./css/global.css">


</head>

<body>
  
    <main>

       <div class="card">
           <h1>Cadastre-se</h1>
        <form action="cadastro_usuario.php" method="post"> 
           <input type="text" name="nome" placeholder="Digite o seu nome" required>
           <input type="email" name="email" placeholder="Digite seu e-mail" required>
           <input type="password" name="senha" placeholder="Digite sua senha" required>
           <input type="password" name="conf_senha" placeholder="Confirme a sua senha" required>
           <button type="submit">Cadastre-se</button>

           <a href="./index.php">Já possui cadastro? Realize o login</a>
        </form>

       </div>


    </main>


</body>

</html>