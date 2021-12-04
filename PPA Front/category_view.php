<?php include 'db.php'?>


<div class="border p-4 rounded mb-4">
    <h3 class="mb-3 h6 text-uppercase text-black d-block">Equipment Categories</h3>
    <ul class="list-unstyled mb-0">
        <?php $sql="SELECT * from item_category";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
            $cat_id = $row['id_category'];

            $cat_title = $row['cat_name'];
            echo "<li class='mb-1'><a href='shop.php?cat=$cat_id' class='d-flex'><span>$cat_title</span> <span class='text-black ml-auto'> </span></a></li>";
        }

        ?>
    </ul>
</div>
