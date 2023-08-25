<?php
session_start();
if(!($_SESSION['user'])=='admin'){
    header('Location: home.php?success=3');
} else {
    require('dashboardPage.php');
    if(isset($_GET['verifications'])){ require('verifications.php'); }
    if(isset($_GET['requests'])){ require('requests.php'); }
    if(isset($_GET['books'])){ require('books.php'); }
}

?>