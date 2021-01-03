<?php 

//let = $

session_start();

$email = $_POST['email'];
$senha = md5($_POST['senha']);

if(strlen($email) > 3 && strlen($senha) > 3){

     $conn = mysqli_connect("localhost", "root", "", "sistema");
      
     $sql = "SELECT * from usuarios where email = '$email' AND senha = '$senha'"; 
     
     $result = $conn->query($sql);
     
     //$usuario recebe a lista de usuários
     $usuarios = mysqli_fetch_assoc($result);

     $_SESSION['nome'] = $usuarios["nome"];
     $_SESSION['imagem'] = $usuarios["imagem"];
     $_SESSION['email'] = $usuarios["email"];
    $_SESSION['id'] = $usuarios["id"];

     header('Location: home.php ');
  
}
else{
    echo "
    <script>
       alert('E-mail ou senha inválidos !')
       location.href = 'index.php'
    </script>
    ";
}