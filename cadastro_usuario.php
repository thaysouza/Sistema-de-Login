<?php

/* 
    1 - recuperar as informações do formulario 
    2 - Validação dos dados 
    3 - Cadastro no banco de dados

*/


//recuperando informações do formulário
$nome = $_POST['nome'];
$imagem = $_POST['imagem'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$conf_senha = $_POST['conf_senha'];

//validação dos dados 

# strlen() : método que conta a quantidade de elementos de um array/string

if (strlen($nome) > 3 && strlen($email) > 3 && strlen($senha) > 3 && $senha === $conf_senha){

   $senha_cripto = md5($senha);

    //$conn = mysqli_connect(host, user, senha, database);
    $conn = mysqli_connect("localhost", "root" ,"", "sistema");//conectando ao bd

    $sql = "INSERT INTO usuarios (nome,imagem, email, senha) values ('$nome','$imagem', '$email', '$senha_cripto')";
   
    //recebe 2 parametro : conexão e instrução sql
   mysqli_query($conn, $sql); //ou $conn->query($sql);

  echo "<script>
            alert('Cadastro efetuado com sucesso!')
            window.location.href = 'index.php'
       </script>";
  /*  if($conn){
        echo "Conexão ok";
    }
    else{
        die("erro ao realizar conexão" . mysqli_connect_error());
    }*/


}
else if ($senha != $conf_senha){
    echo
    "<script>
    alert('As senhas devem ser iguais, tente novamente !')
    window.location.href = 'cadastro.php'
    </script>";
}
else if (strlen($nome) <= 3){
    echo 
    "<script>
    alert('Digite um nome válido !')
    window.location.href = 'cadastro.php'
    </script>";
    
}

else if (strlen($email) <= 3){
   echo 
   "<script>
   alert('Digite um e-mail válido!')
   window.location.href = 'cadastro.php'
   </script>";
}
else if(strlen($senha) <= 3){
    echo
    "<script>
    alert('Digite uma senha válida !')
    window.location.href = 'icadastro.php'
    </script>";
}