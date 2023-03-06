<?php

include "db.php";


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO chat (msg) VALUES ('$input')";
// var_dump($sql);

// $sql = "UPDATE chat SET msg= '$input' WHERE ID = '$id'";

if ($conn->query($sql) == TRUE) {
    header("location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
