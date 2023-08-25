<?php
if($_SESSION['user']=='admin'){
    include("connDb.php");
    $sql_get_users = "SELECT id,name,surname,title,accepted FROM requests WHERE accepted='No'";
    $result = $conn->query($sql_get_users);
    while($row = $result->fetch_array()){
        $id = $row['id'];
        echo "<div class='flex justify-center mt-10 items-center'>".$row['name']." ".$row['surname']." ".$row['title']."<a class='btnHeader' href='requestHelper.php?accept=$id'> Accept </a>"."<a class='btnHeader' href='requestHelper.php?discard=$id'> Discard </a>"."</div>";
    }
} else {
    header('Location: home.php?success=3');
}

?>