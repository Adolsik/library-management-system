<?php
include "connDb.php";

if (isset($_POST['search'])) {

   $name = $_POST['search'];
   $query = "SELECT name FROM books WHERE name LIKE '%$name%' LIMIT 5";

   $result = $conn->query($query);
   echo "
<div>
   ";

   while ($row = $result->fetch_array()) {
       ?>

   <div onclick='fill("<?php echo $row['name']; ?>")'>
   <a href="send_request.php?name=<?php echo $row['name']; ?>" class="suggestion">
       <?php echo $row['name']; ?>
   </div></a>
   <?php
}}
?>
</div>