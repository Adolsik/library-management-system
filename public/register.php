<?php
    require('connDb.php');

    $infoMsg = '';

    if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['password'])){
        # User data
        $pass = $conn->real_escape_string($_POST['password']);
        $name = $conn->real_escape_string($_POST['name']);
        $surname = $conn->real_escape_string($_POST['surname']);
        $email = $conn->real_escape_string($_POST['email']);

        #Check if user with that email already exists
        $sql_get_user = "SELECT id FROM users WHERE email='$email'";
        $result = $conn->query($sql_get_user);

        if($result->num_rows > 0){
            $infoMsg = "This e-mail is already taken.";
        } else {
        # if users do not exist hash password and create account
        $hashPass = password_hash($pass,PASSWORD_BCRYPT);
        $sql_create_user = "INSERT INTO users (name,surname,email,password) VALUES ('$name','$surname','$email','$hashPass')";
        $result = $conn->query($sql_create_user);

        header('Location: index.php?registersuccess=register');
        }
    }
?>