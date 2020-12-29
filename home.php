<?php  
  
   session_start();

   //se não existir um valor no indice nome, então a aplicação será encerrada
   if(!isset($_SESSION['nome'])){
     header('Location: index.php');
     exit;
   }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>
<body>
     <h1>Olá, <?php echo $_SESSION['nome'] ?></h1>

     <a href="<?php session_destroy() ?>">Sair</a>
</body>
</html>