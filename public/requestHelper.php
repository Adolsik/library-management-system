<?php
include("connDb.php");

if(isset($_GET['accept'])){
    $id = $_GET['accept'];
    $sql = "UPDATE requests SET accepted = 'Yes' WHERE id='$id'";
    $conn->query($sql);
} 
if(isset($_GET['discard'])){
    $id = $_GET['discard'];
    $sql = "DELETE FROM requests WHERE id='$id'";
    $conn->query($sql);
} 

header("Location: dashboard.php?requests");

?>