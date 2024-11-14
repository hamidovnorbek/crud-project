<?php
// MySQLga ulanish parametrlarini saqlash
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud-data";



// Ulanishni yaratish
$conn = new mysqli($servername, $username, $password, $dbname);







// Ulanishni tekshirish
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
