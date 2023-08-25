<?php
include("connDb.php");

if(isset($_GET['availability'])){
    $id = $_GET['id'];
    $availability = $_GET['availability'];
    $sql = '';
    if($availability == '0'){
        $sql = "UPDATE books SET availability = '1' WHERE id='$id'";
    } else {
        $sql = "UPDATE books SET availability = '0' WHERE id='$id'";
    }
    $conn->query($sql);
} 
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql = "DELETE FROM books WHERE id='$id'";
    $conn->query($sql);
} 

header("Location: dashboard.php?books");

?>