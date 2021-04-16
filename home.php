<?php

session_start();

//se não existir um valor no indice nome, então a aplicação será encerrada
if (!isset($_SESSION['nome'])) {
  header('Location: index.php');
  exit;
} else {
  $conn = mysqli_connect("localhost", "root", "", "sistema");
  $postagens = $conn->query("SELECT * FROM postagens JOIN usuarios WHERE postagens.fk_usuario = usuarios.id  ORDER BY id_postagens DESC");
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="./css/home.css">
  <title>home</title>
</head>

<body>


  <header class="container-fluid border shadow">
    <nav class="row container  m-auto">

      <div class="col-10 d-flex align-items-center ">
        <img class="rounded-circle" src="<?php echo $_SESSION['imagem'] ?>" alt="<?php echo $_SESSION['nome'] ?>">
        <h5 class="ml-3 mb-0"><?php echo $_SESSION['nome'] ?></h5>
      </div>

      <div class="col-2 d-flex align-items-center justify-content-end">
        <div class="dropdown">
          <button class="btn text-white rounded-circle dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="perfil.php">Meu perfil</a>
            <a class="dropdown-item" href="sair.php">Sair</a>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <!--conteudo-->
  <main class="container">

    <form class="form-row mt-5" action="cadastro_postagens.php" method="post">
      <input class="col-9 form-control" type="text" name="post" placeholder="No que você está pensando, <?php echo $_SESSION['nome'] ?> ? ">
      <button class="col-3 btn" type="submit">Publicar</button>
    </form>


    <?php
    //percorre o array
    if ($postagens->num_rows > 0) {
      foreach ($postagens as $postagem) {

    ?>

        <div class="card mt-5">
          <div class="card-header">
            <img class="rounded-circle" src="<?php echo $postagem["imagem"] ?>" alt="<?php echo $postagem['nome'] ?>">
            <h5 class="ml-3 mb-0"><?php echo $postagem['nome'] ?></h5>
          </div>
          <div class="card-body">
            <?php echo $postagem["conteudo"] ?>
          </div>
        </div>

    <?php
      }
    }
    ?>


  </main>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>