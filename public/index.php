<?php
session_start();

if (isset($_SESSION['user'])){
    if($_SESSION['user']=='admin'){
        header('Location: dashboard.php');
    } else {
        header('Location: home_logged.html');
    }
    #requiere home page for logged in  
} else {
    header('Location: home.html');
}

#todo
if(isset($_GET['registerSuccess'])){
    echo <<< notif
        <div class='notification'>
            <label>Account created!</label>
        </div>

    notif;
}
?>