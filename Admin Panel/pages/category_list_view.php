<?php

include 'db.php';


$sql="SELECT * from item_category";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
    echo " <option  value=".$row['id_category'].">".$row['cat_name']."</option>";
}
$conn->close();
?>
