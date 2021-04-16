<?php
session_start();

$id = $_GET['id'];

if ($id == $_SESSION['id']) {
  $conn = mysqli_connect("localhost", "root", "", "sistema");
  $result = $conn->query("DELETE FROM usuarios WHERE id = $id");

  if ($result == true) {
    session_destroy();
    echo "   
         <script>
         alert('Conta excluida com sucesso')
         window.location.href = 'index.php'
          </script>";
  } else {
    echo "<script>
         alert('Não foi possivel excluir a conta')
         window.location.href = 'index.php'
          </script>";
  }
} else {
  echo "<script>
    alert('Não foi possivel excluir a conta')
    window.location.href = 'index.php'
     </script>";
}
