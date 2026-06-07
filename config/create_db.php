<?php

$conn = mysqli_connect("localhost", "root", "");

$sql = "CREATE DATABASE php_project";

if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>