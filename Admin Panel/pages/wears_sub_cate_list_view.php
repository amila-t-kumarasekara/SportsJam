<?php

include 'db.php';


$sql="SELECT * from wear_sub_cat";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
    echo " <option  value=".$row['id_wearsubcat'].">".$row['wear_subname']."</option>";
}
$conn->close();
?>
