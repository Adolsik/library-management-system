<?php
if($_SESSION['user']=='admin'){
    echo <<< test
    <h1> Dashboard </h1>

test;
} else {
    echo "No permision";
}

?>