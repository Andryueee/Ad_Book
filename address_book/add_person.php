<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $conn = new mysqli("localhost", "root", "", "address_book");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO persons (name, phone, email, address) VALUES ('$name', '$phone', '$email', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "Новый контакт добавлен";
    } else {
        echo "Ошибка: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
