<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    echo "Nome: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Senha: " . $password . "<br>";
    echo "ID: " . $id;
}
?>
