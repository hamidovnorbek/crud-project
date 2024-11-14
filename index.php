<?php

include('db.php');

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <h2 class="text-2xl font-bold mb-5">User List</h2>
        <a href="create_user.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-5 inline-block">Add New User</a>
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">First Name</th>
                    <th class="py-2 px-4 border-b">Last Name</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td class='py-2 px-4 border-b'>" . $row['id'] . "</td>";
                        echo "<td class='py-2 px-4 border-b'>" . $row['first_name'] . "</td>";
                        echo "<td class='py-2 px-4 border-b'>" . $row['last_name'] . "</td>";
                        echo "<td class='py-2 px-4 border-b'>" . $row['email'] . "</td>";
                        echo "<td class='py-2 px-4 border-b'>";
                        echo "<a href='edit_user.php?id=" . $row['id'] . "' class='bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded mr-2'>Edit</a>";
                        echo "<a href='delete_user.php?id=" . $row['id'] . "' class='bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded' onclick=\"return confirm('Are you sure?')\">Delete</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5' class='text-center py-2 px-4 border-b'>No users found</td></tr>";
                }
                ?>
   
