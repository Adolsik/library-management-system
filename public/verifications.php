<?php
if($_SESSION['user']=='admin'){
    include("connDb.php");
    $sql_get_users = "SELECT id,name,surname,email FROM users WHERE verified='0'";
    $result = $conn->query($sql_get_users);
    while($row = $result->fetch_array()){
        $id = $row['id'];
        echo "<div class='flex justify-center mt-10 items-center'>".$row['name']." ".$row['surname']." ".$row['email']."<a class='btnHeader' href='verifHelper.php?verify=$id'> Verify </a>"."<a class='btnHeader' href='verifHelper.php?delete=$id'> Delete </a>"."</div>";
    }
} else {
    header('Location: home.php?success=3');
}

?>