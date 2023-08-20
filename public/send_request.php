<?php
include('connDb.php');
session_start();
$title = $conn->real_escape_string($_GET['name']);
$name = $conn->real_escape_string($_SESSION['name']);
$surname = $conn->real_escape_string($_SESSION['surname']);

$query = "INSERT INTO requests(name,surname,title) VALUES('$name','$surname','$title')";
$result = $conn->query($query);

if($result){
    header('Location: home_logged.php?success=1');
} else {
    header('Location: home_logged.php?success=0');
}

?>