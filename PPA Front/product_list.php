
<?php include 'db.php';

if (!isset($_GET['cat'])) {
    if (!isset($_GET['s_cat'])) {
        $per_page = 8;
        if (isset($_GET['page'])) {

            $page = $_GET['page'];

        }
        else {

            $page = 1;

        }
        $start_from = ($page - 1) * $per_page;
        $sql="SELECT * from equipmentstable order by equipmentID DESC LIMIT  $start_from,$per_page";
        $result = $conn->query($sql);




        $sql1="SELECT * from wearstable order by wearID DESC LIMIT  $start_from,$per_page";
        $result1 = $conn->query($sql1);



        while($row = $result->fetch_assoc()) {
            echo"<div class='col-lg-6 col-md-6 item-entry mb-4'>
    <a href='single_product.php?pro_id=" . $row["equipmentID"] . "' class='product-item md-height bg-gray d-block'>
        <img src='../Admin%20Panel/pages/EquipmentImg/" . $row["equipmentImage"] . "' alt='Image' class='img-fluid'>
    </a>
    <h2 class='item-title'><a href='single_product.php?pro_id=" . $row["equipmentID"] . "'>" . $row["equipmentName"] . "</a></h2>
    <strong class='item-price'>Rs." . $row["equipmentPrice"] . ".00</strong>
</div>";
            while($row1 = $result1->fetch_assoc()) {
                echo"<div class='col-lg-6 col-md-6 item-entry mb-4'>
    <a href='single_product.php?wear_id=" . $row1["wearID"] . "' class='product-item md-height bg-gray d-block'>
        <img src='../Admin%20Panel/pages/EquipmentImg/" . $row1["wearImage"] . "' alt='Image' class='img-fluid'>
    </a>
    <h2 class='item-title'><a href='single_product.php?wear_id=" . $row1["wearID"] . "'>" . $row1["wearName"] . "</a></h2>
    <strong class='item-price'>Rs." . $row1["wearPrice"] . ".00</strong>
</div>";
            }
        }


        ?>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="site-block-27">
                    <ul>
                        <?php
                        $sql="SELECT * from equipmentstable";
                        $result = $conn->query($sql);
                        $sql1="SELECT * from wearstable";
                        $result1 = $conn->query($sql1);
                        $rowcount = mysqli_num_rows($result);
                        $rowcount1 = mysqli_num_rows($result1);
                        $total_pages = ceil($rowcount );
                        $total_pages1 = ceil($rowcount1);
                        $all_pages = ceil(($total_pages + $total_pages1)/$per_page);
                        echo"<li><a href='shop.php?page=1'>&lt;</a></li>";
                        for ($i = 1; $i <= $all_pages; $i++) {
                            echo "<li class='active'><a href='shop.php?page=" . $i . "'> " . $i . "</a> </li>";
                        }
                        echo"<li><a href='shop.php?page=$all_pages'>&gt;</a></li>"
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <?php

    }
}
?>



<?php
if(isset($_GET['cat'])) {
    $cat_per_page = 8;
    $p_cat_id = $_GET['cat'];
    if (isset($_GET['cat_page'])) {

        $cat_page = $_GET['cat_page'];

    } else {

        $cat_page = 1;

    }
    $cat_start_from = ($cat_page - 1) * $cat_per_page;
    $sql="SELECT * from equipmentstable where equ_cat ='$p_cat_id' group by equipmentID desc limit $cat_start_from,$cat_per_page";
    $result = $conn->query($sql);


//    $sql1="select * from item_category where id_category='$p_cat_id'";
//    $result1 = $conn->query($sql1);
    $count = mysqli_num_rows($result);


    if($count==0 ){

        echo "
            
                <div class='box'>
                
                    <h1> No Product Found In This! </h1>
                
                </div>
            
            ";

    }else{

    }
    while($row = $result->fetch_assoc()) {
        echo"<div class='col-lg-6 col-md-6 item-entry mb-4'>
    <a href='single_product.php?pro_id=" . $row["equipmentID"] . "' class='product-item md-height bg-gray d-block'>
        <img src='../Admin%20Panel/pages/EquipmentImg/" . $row["equipmentImage"] . "' alt='Image' class='img-fluid'>
    </a>
    <h2 class='item-title'><a href='single_product.php?pro_id=" . $row["equipmentID"] . "'>" . $row["equipmentName"] . "</a></h2>
    <strong class='item-price'>Rs." . $row["equipmentPrice"] . ".00</strong>
</div>";
    }


    ?>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="site-block-27">
                <ul>
                    <?php
                    $sql="SELECT * from equipmentstable where equ_cat = '$p_cat_id'";
                    $result = $conn->query($sql);
                    $rowcount = mysqli_num_rows($result);
                    $cat_total_pages = ceil($rowcount / $cat_per_page);
                    echo"<li><a href='shop.php?cat_page=1'>&lt;</a></li>";
                    for ($i = 1; $i <= $cat_total_pages; $i++) {
                        echo"<li class='active'><a href='shop.php?cat_page=" . $i . "&cat=".$p_cat_id."'> " . $i . "</a> </li>";
                    }
                    echo"<li><a href='shop.php?cat_page=$cat_total_pages'>&gt;</a></li>"
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <?php
}


?>
