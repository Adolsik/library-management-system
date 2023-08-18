<?php
session_start();

echo <<< logout
<button><a href='logout.php'>Logout</a> </button>

logout;
if($_SESSION['user']=='admin'){
    echo <<< test
    <h1> Dashboard </h1>

test;
} else {
    echo "No permision";
}

?>