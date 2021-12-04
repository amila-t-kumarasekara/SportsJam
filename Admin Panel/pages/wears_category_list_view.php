<?php

include 'db.php';


$sql="SELECT * from wear_category";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
    echo " <option  value=".$row['id_wearcat'].">".$row['wear_name']."</option>";
}
$conn->close();
?>
