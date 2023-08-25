<?php
if($_SESSION['user']=='admin'){
    include("connDb.php");
    $sql_get_users = "SELECT id,name,availability FROM books";
    $result = $conn->query($sql_get_users);
    while($row = $result->fetch_array()){
        $id = $row['id'];
        $availabilityDigit = $row['availability'];
        $availability = '';
        if($row['availability']=='0'){
            $availability = 'Unavailable';
        } else {
            $availability = 'Available';
        }
        echo "<div class='flex justify-center mt-10 items-center'>".$row['id']." ".$row['name']." ".$availability."<a class='btnHeader' href='bookHelper.php?id=$id&availability=$availabilityDigit'> Change availability </a>"."<a class='btnHeader' href='bookHelper.php?delete=$id'> Delete </a>"."</div>";
    }
} else {
    header('Location: home.php?success=3');
}

?>