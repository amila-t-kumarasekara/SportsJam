<?php
include 'product_view.php';
include('header.php');
?>


    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a href="shop.php">Shop</a> <span class="mx-2 mb-0">/</span> <strong class="text-black"><?php echo $name; ?></strong></div>
            </div>
        </div>
    </div>
      
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="item-entry">
                        <a href="#" class="product-item md-height bg-gray d-block">
                            <?php if(isset($_GET['pro_id']))
                                {?>
                            <img src="../Admin%20Panel/pages/EquipmentImg/<?php echo $path; ?>" alt="Image" class="img-fluid">
                            <?php } else if(isset($_GET['wear_id']))
                                {?>
                            <img src="../Admin%20Panel/pages/WearsImg/<?php echo $path; ?>" alt="Image" class="img-fluid">
                            <?php } ?>
                        </a>

                    </div>

                                </div>
                
                <div class="col-md-6">
                    <h2 class="text-black"><?php echo $name; ?></h2>
                    <p><?php echo $description; ?>.</p>

                  <p><strong class="text-primary h4">Rs.<?php echo $amount; ?>.00</strong></p>
                    
                    <div class="mb-5">
                        <div class="input-group mb-3" style="max-width: 120px;">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                            </div>
                            <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                            </div>
                        </div>

                    </div>
                    <form action="addcart.php" method="POST"> 
                    <input type="hidden"  name="equipmentName" value='<?php echo $name?>'>
                    <input type="hidden"  name="equipmentPrice" value='<?php echo $amount   ?>'>
                    <input type="hidden" name="Quantity" placeholder="Quantity" value="1" >
                    <p><button type="submit" value="Add to Cart" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Add To Cart</button></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
                                

<?php

   include 'product_view.php';
include('footer.php');
?>
</div>

</body>
</html><?php
