<!DOCTYPE html>
<html lang="en">
<head>
    <title>SportsJam</title>

</head>
<body>
    
    <?php 
    include('header.php');
    ?>

<div class="site-wrap">
<div class="custom-border-bottom py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Shop</strong></div>
        </div>
    </div>
</div>
<div class="site-section">
    <div class="container">

        <div class="row mb-5">
            <div class="col-md-9 order-1">


                <div class="row mb-5">
                    <?php include 'product_list.php'?>

            </div>


            <div class="col-md-3 order-2 mb-5 mb-md-0">

                <?php include 'category_view.php'; ?>
                <?php include 'wears_cate_view.php'; ?>

            </div>
        </div>

    </div>
</div>

    <?php include 'footer.php'?>

</body>
</html>



