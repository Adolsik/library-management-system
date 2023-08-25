<?php
include("connDb.php");

if(isset($_GET['verify'])){
    $id = $_GET['verify'];
    $sql = "UPDATE users SET verified = '1' WHERE id='$id'";
    $conn->query($sql);
} 
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql = "DELETE FROM users WHERE id='$id'";
    $conn->query($sql);
} 

header("Location: dashboard.php?verifications");

?>