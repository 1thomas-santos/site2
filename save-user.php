<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha']; 
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $datadenascimento = $_POST['datadenascimento']; 
    $cep = $_POST['cep'];
    

    // $fp = fopen('users.csv', 'a');
    // fwrite($fp, "$nome,$email,$senha\n");

    $dsn = 'mysql:dbname=site;port=3306';
    $pdo = new PDO($dsn, 'root', '101010');
    $stmt = $pdo->query("
        INSERT INTO users (nome, email, senha, cpf, telefone, datadenascimento, cep)
        VALUES ('$nome', '$email', '$senha' , '$cpf', ' $telefone', '$datadenascimento', '$cep')
    ");

    header('location: index.php?msg=usuario_cadastrado');
?>