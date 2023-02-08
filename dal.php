<?php 

//funcao para cadastrar dados no MySql, recebe <objeto conectado ao DB>,<nome>,<email> e <senha>
function cadastrar($conn, $nome, $email, $senha){
    //Codigo SQL para cadastrar o nome,email e senha no DB
    $insert_code = "INSERT INTO usuarios (nome, email, senha)
    VALUES ('$nome', '$email', '$senha')";

    $result = mysqli_query($conn, $insert_code);

    if($result){
        return '<div class="alerta-info">cadastro bem sucedido!</div>';
    }else{
        return '<div class="alerta-aviso">algo ocorreu errado :(</div>';
    }
};

?>

