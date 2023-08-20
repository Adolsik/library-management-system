<?php
session_start();

if (isset($_SESSION['user'])){
    if($_SESSION['user']=='admin'){
        header('Location: dashboard.php');
    } else {
        header('Location: home_logged.php');
    }
    #requiere home page for logged in  
} else {
    header('Location: home.html');
}
?>