<?php
    require('login.html');
    require('connDb.php');

    if(isset($_POST['email']) && isset($_POST['password'])){ 
        session_start();
        # User data
        $pass = $_POST['password'];
        $email = $_POST['email'];
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
            if($email=='admin'){
                header('Location: dashboard.php');
            } else {
                header('Location: index.php');
            }
           
        } else {
            $msg = "<h1 class='absolute top-0 left-0 text-lg text-white'> Invalid e-mail or password </h1>";
            echo $msg;     
        }

    }
?>