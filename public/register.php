<?php
    require('register.html');
    require('connDb.php');

    if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['password'])){
        # User data
        $pass = $_POST['password'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];

        $hashPass = password_hash($pass,PASSWORD_BCRYPT);

        $sql = "INSERT INTO users (name,surname,email,password) VALUES ('$name','$surname','$email','$hashPass')";
        $result = $conn->query($sql);

        header('Location: index.php?registerSuccess=success');
    }



?>