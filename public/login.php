<?php
    require('connDb.php');

    $infoMsg = '';

    if(isset($_POST['email']) && isset($_POST['password'])){ 
        session_start();
        # User data
        $pass = $conn->real_escape_string($_POST['password']);
        $email = $conn->real_escape_string($_POST['email']);
        $hash = '';

        $get_user = "SELECT * FROM users WHERE email = '$email'";
        $result = $conn->query($get_user);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $hash = $row['password'];
            } 
        }

        if(password_verify($pass, $hash)){;
            $_SESSION['user'] = $email;
            $_SESSION['pass'] = $hash;
            if($email == 'admin'){
                header('Location: dashboard.php');
            } else {
                header('Location: index.php');
            } 
        } else {
            $infoMsg = "Invalid e-mail and/or password";
        }

    }
?>