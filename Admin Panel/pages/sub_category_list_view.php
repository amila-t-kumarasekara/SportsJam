<?php

include 'db.php';


$sql="SELECT * from item_subcat";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
    echo " <option  value=".$row['idSubCat'].">".$row['sub_name']."</option>";
}
$conn->close();
?>
