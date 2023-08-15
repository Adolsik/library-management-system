<?php
    require('login.html');

    $conn = new mysqli('localhost','root','','library-management-system');

    if(!$conn){
        echo "Connection failed!";
    }

    if(isset($_POST['email']) && isset($_POST['password'])){
        # User data
        $pass = $_POST['password'];
        $email = $_POST['email'];

        $hashPass = hash('sha256',$pass);

        $sql = "INSERT INTO users (name,surname,email,password) VALUES ('$name','$surname','$email','$hashPass')";
        $result = $conn->query($sql);

        header('Location: index.php?registerSuccess=success');
    }


?>