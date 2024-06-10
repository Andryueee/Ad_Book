<?php
if (isset($_GET['search'])) {
    $search = $_GET['search'];

    $conn = new mysqli("localhost", "root", "", "address_book");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM persons WHERE name LIKE '%$search%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Name</th><th>Phone</th><th>Email</th><th>Address</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["phone"]. "</td><td>" . $row["email"]. "</td><td>" . $row["address"]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 результатов";
    }

    $conn->close();
}
?>
