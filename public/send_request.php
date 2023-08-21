<?php
include('connDb.php');
session_start();
$title = $conn->real_escape_string($_GET['name']);
$name = $conn->real_escape_string($_SESSION['name']);
$surname = $conn->real_escape_string($_SESSION['surname']);
$date = date('Y-m-d');

$sql_availability = "SELECT availability FROM books where name ='$title'";
$result = $conn->query($sql_availability);

while($row = $result->fetch_array()){
    if($row['availability'] == '1'){
        $query = "INSERT INTO requests(name,surname,title,accepted,requested_date) VALUES('$name','$surname','$title','No','$date')";
        $result = $conn->query($query);
        if($result){
            header('Location: home_logged.php?success=1');
        } else {
            header('Location: home_logged.php?success=0');
        }
    } else {
        header('Location: home_logged.php?success=8');
    }
}

?>