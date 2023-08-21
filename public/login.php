<?php
    require('connDb.php');

    $infoMsg = '';

    if(isset($_POST['email']) && isset($_POST['password'])){ 
        session_start();
        # User data
        $pass = $conn->real_escape_string($_POST['password']);
        $email = $conn->real_escape_string($_POST['email']);
        $hash = '';
        $verified = null;

        $verified_sql = "SELECT verified FROM users WHERE email='$email'";
        $result = $conn->query($verified_sql);
        while($row = $result->fetch_array()){
            $verified = $row['verified'];
        }

        $get_user = "SELECT * FROM users WHERE email = '$email'";
        $result = $conn->query($get_user);

        if($result->num_rows > 0){
            while($row = $result->fetch_array()){
                $hash = $row['password'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['surname'] = $row['surname'];
            } 
        }

        if(password_verify($pass, $hash)){;
            $_SESSION['user'] = $email;
            $_SESSION['pass'] = $hash;
            if($verified=='1'){
                if($email == 'admin'){
                    header('Location: dashboard.php');
                } else {
                    header('Location: index.php');
                }
            } else {
                 session_destroy();
                 header('Location: home.php?success=4');
            }
        } else {
            $infoMsg = "Invalid e-mail and/or password";
        }

    }
?>