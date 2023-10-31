<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$servername = "10.100.53.200";
$username = "root";
$password = "LANfpl37792";
$dbname = "formulario";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['nome'];
    $email = $_POST['email'];
    $password = $_POST['senha'];
    // $id = $_POST['id'];

    $sql = "INSERT INTO usuarios (nome, email, senha)
    VALUES ('$name', '$email', '$password', '$id')";

    if ($conn->query($sql) === TRUE) {
      echo "Novo registro criado com sucesso";
    } else {
      echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
