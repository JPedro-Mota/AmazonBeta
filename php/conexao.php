<?php
// Conectar ao banco de dados
$hostname = "localhost";
$usuario = "root";
$senha = "";
$bancodedados = "formulario";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

// Receber os dados do formulário
$email = $_POST['email'];
$password = $_POST['password'];
$nome = $_POST['nome'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

// Inserir os dados no banco de dados
$sql = "INSERT INTO usuarios (email, password, nome, cidade, estado) VALUES ('$email', '$password', '$nome', '$cidade', '$estado')";

if ($mysqli->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro ao cadastrar: " . $mysqli->error;
}

$mysqli->close();
?>
