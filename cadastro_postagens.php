<?php

session_start();

$postagem = $_POST['post'];
$id = $_SESSION['id'];

if(strlen($postagem) > 0){
    
$conn = mysqli_connect("localhost", "root", "", "sistema");

$result = $conn->query("INSERT INTO postagens (conteudo, fk_usuario) VALUES ('$postagem', $id)");

   if($result == true){
       echo "
        <script>
                alert('Postagem cadastrada com sucesso!')
                Location.href = 'home.php'
        </script>
       ";
   }else{
    echo "
    <script>
            alert('Não foi possivel cadastrar a postagem!')
            Location.href = 'home.php'
    </script>
   ";
   }
}else{
    echo "
    <script>
            alert('Digite algo para postar!')
            Location.href = 'home.php'
    </script>
   ";
}