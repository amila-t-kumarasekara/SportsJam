<?php
include "db.php";

if(isset($_GET['pro_id'])) {
    $pro_id = $_GET['pro_id'];
    $sql = "SELECT * from equipmentstable where equipmentID=$pro_id";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $name = $row['equipmentName'];
        $description = $row['equipmentDesc'];
        $amount = $row['equipmentPrice'];
        $path = $row['equipmentImage'];
    }
} else if(isset($_GET['wear_id'])) {
    $pro_id = $_GET['wear_id'];
    $sql = "SELECT * from wearstable where wearID=$pro_id";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $name = $row['wearName'];
        $description = $row['wearDesc'];
        $amount = $row['wearPrice'];
        $path = $row['wearImage'];
    }
}

?>