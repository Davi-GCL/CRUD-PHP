<?php
require ("dbcon.php"); //Requisita o arquivo que permite a conexao com a base de dados;

session_start();

if(isset($_POST["add_est"])){

    $nome = mysqli_real_escape_string($conn, $_POST["nome"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $telefone = mysqli_real_escape_string($conn, $_POST["telefone"]);
    $curso = mysqli_real_escape_string($conn, $_POST["curso"]);

    $query = "INSERT INTO estudantes(nome, email, telefone, curso) VALUES('$nome', '$email', '$telefone', '$curso')";

    $query_exe = mysqli_query($conn, $query);

    //Verifica se a mensagem sera exibida, caso os dados tenham sido inseridos na tela de estudantes

    if($query_exe){
        $_SESSION["mensagem"] = "Estudante criado com sucesso !";
        header("Location:estudantes.php");
        exit(0);
    }else{
        $_SESSION["mensagem"] = "Estudante NÃO foi criado com sucesso !";
        header("Location:mensagem.php");
        exit(0);
    }


}
?>