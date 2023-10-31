<?php
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
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $sql = "INSERT INTO MyGuests (nome, email, senha, id)
    VALUES ('$name', '$email', '$password', '$id')";

    if ($conn->query($sql) === TRUE) {
      echo "Novo registro criado com sucesso";
    } else {
      echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
