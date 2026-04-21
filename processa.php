<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    if (empty($nome) || empty($email) || empty($assunto) || empty($mensagem)) {
        
        header("Location: contato.php?status=erro&nome=$nome&email=$email&assunto=$assunto&mensagem=$mensagem");
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO contatos (nome, email, assunto, mensagem) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nome, $email, $assunto, $mensagem);

    if ($stmt->execute()) {
        header("Location: contato.php?status=sucesso");
    } else {
        header("Location: contato.php?status=erro&nome=$nome&email=$email&assunto=$assunto&mensagem=$mensagem");
    }

    exit;
}
?>