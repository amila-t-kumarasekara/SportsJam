<html>
<?php
if (isset($_POST['viewImg'])) {
    $id = $_POST['equImage'];
    echo "<img src='./EquipmentImg/$id'>";
} else if (isset($_POST['wearsviewImg'])) {
    $id = $_POST['wearsImage'];
    echo "<img src='./WearsImg/$id'>";
}
?>
</html>
<?php
