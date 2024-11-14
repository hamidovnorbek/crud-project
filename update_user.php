<?php
include('db.php');

$id = $_POST['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];


$sql = "UPDATE users SET first_name='$first_name', last_name='$last_name', email='$email' WHERE id=$id";


if ($conn->query($sql) === TRUE) {
    header("Location: index.php"); 
    exit();
} 
else {
    echo "Error updating record: " . $conn->error;
}


$conn->close();
?>
