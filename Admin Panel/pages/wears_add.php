
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>SportJam Admin Panel</title>


    <!-- Fontawesome -->
    <link type="text/css" href="../Compilation/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="../Compilation/notyf/notyf.min.css" rel="stylesheet">


    <link type="text/css" href="../css/compilation.css" rel="stylesheet">

    <link type="text/css" href="../css/compilation.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css"/>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>



</head>

<body>

<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-md-none">
    <a class="navbar-brand mr-lg-5" href="../../index.html">
        <img class="navbar-brand-dark" src="../assets/img/brand/light.svg" alt="Volt logo" /> <img class="navbar-brand-light" src="../assets/img/brand/dark.svg" alt="Volt logo" />
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<div class="container-fluid bg-soft">
    <div class="row">
        <div class="col-12">

            <!--            start of side bar nav-->
            <?php include 'navBar.php' ?>

            <main class="content">

                <!--                start of notification & avatar-->
                <?php include  'navUser.php'?>


                <!--         start navigation & title-->

                <div class="py-2">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                            <li class="breadcrumb-item"><a href="dashboard.html"><span class="fas fa-home"></span></a></li>
                            <li class="breadcrumb-item"><a href="#">Wears</a></li>
                            <!--                            <li class="breadcrumb-item active" aria-current="page">Equipment Add</li>-->
                        </ol>
                    </nav>
                    <div class="d-flex justify-content-between w-100 flex-wrap">
                        <div class="mb-3 mb-lg-0">
                            <h1 class="h4">Wears Add</h1>
                        </div>
                    </div>
                </div>

                <!--              end of navigation & title -->

                <div class="row justify-content-md-center">
                    <div class="card border-light shadow-sm components-section">
                        <div class="main-panel">
                            <form method="POST"  name="subcatForm" action="insert_update_delete.php" onsubmit="return myFunction()"  enctype="multipart/form-data">
                                <div class="form-group">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1">Category</label>
                                        <div class="d-flex justify-content-between w-100 flex-wrap">
                                            <div class="select_cat_list mb-3 mb-lg-0 mt-2">
                                                <select class="form-select" name="wears_category_list" aria-label="Default select example">
                                                    <?php
                                                    include 'wears_category_list_view.php';
                                                    ?>
                                                </select>
                                            </div>
                                            <button type="submit" class="mr-9 mt-2 cateBtn btn btn-primary" ><a href="wears_cat_add.php" class="cateBtn">New Category</a></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1">Sub Category</label>
                                    <div class="d-flex justify-content-between w-100 flex-wrap">
                                        <div class="select_cat_list mb-3 mb-lg-0 mt-2">
                                            <select class="form-select" name="wears_sub_cat_list" aria-label="Default select example">
                                                <?php
                                                include 'wears_sub_cate_list_view.php';
                                                ?>
                                            </select>
                                        </div>
                                        <button type="submit" class="mr-9 mt-2 cateBtn btn btn-primary" ><a href="wears_sub_cat_add.php" class="cateBtn ">New Sub Category</a></button>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="email">Wears Name</label>
                                    <div class="d-flex justify-content-between flex-wrap w-50">
                                        <input type="text" class="equ_input form-control" name="wears_equName" aria-describedby="emailHelp" placeholder="Wears Name">
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="email">Wears Description</label>
                                    <div class="d-flex justify-content-between flex-wrap w-50">
                                        <input type="text" class="equ_input form-control" name="wears_equDesc" aria-describedby="emailHelp" placeholder="Wears Description">
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="email">Wears Image</label>
                                    <div class="form-file w-50">
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control" id="wears_uploadImg" name="wears_uploadImg" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                                        </div>

                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="email">Wears Quantity</label>
                                    <div class="d-flex justify-content-between flex-wrap w-50">
                                        <input type="text" class="equ_input form-control" name="wears_equQty" aria-describedby="emailHelp" placeholder="Wears Quantity">
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="email">Wears Price</label>
                                    <div class="d-flex justify-content-between flex-wrap w-50">
                                        <input type="text" class="equ_input form-control" name="wears_equPrice" aria-describedby="emailHelp" placeholder="Wears Price">
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <button type="submit" id="wearsAdd" name="wearsAdd" class="cateBtn btn btn-primary">Submit</button>
                                </div>
                            </form>
                            <div class="mb-4">
                                <h1 class="h4">Wears Table</h1>
                            </div>
                            <div class="card card-body border-light shadow-sm table-wrapper table-responsive pt-3">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Sub Category</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    include 'wears_view.php';
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    function myFunction() {
                        let name = document.forms["subcatForm"]["subcategory"].value;
                        if (name == ''){
                            alert("Please Enter the Sub Category");
                            return false;
                        }
                    }
                    $(document).ready(function(){
                        $('table').DataTable();
                    });
                </script>



                <footer class="footer section  py-2">
                    <div class="row">
                        <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                            <p class="mb-0 text-center text-xl-left">Copyright © 2021-<span class="current-year"></span> <a class="text-primary font-weight-normal" href="https://themesberg.com" target="_blank">Compilation Error</a></p>
                        </div>

                    </div>
                </footer>

            </main>
        </div>
    </div>
</div>

<!-- Core -->
<script src="../Compilation/popper.js/dist/umd/popper.min.js"></script>
<script src="../Compilation/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Vendor JS -->
<script src="../Compilation/onscreen/dist/on-screen.umd.min.js"></script>

<!-- Slider -->
<script src="../vendor/nouislider/distribute/nouislider.min.js"></script>

<!-- Jarallax -->
<script src="../Compilation/jarallax/dist/jarallax.min.js"></script>

<!-- Smooth scroll -->
<script src="../Compilation/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

<!-- Count up -->
<script src="../Compilation/countup.js/dist/countUp.umd.js"></script>

<!-- Notyf -->
<script src="../Compilation/notyf/notyf.min.js"></script>

<!-- Charts -->
<script src="../Compilation/chartist/dist/chartist.min.js"></script>
<script src="../Compilation/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

<!-- Datepicker -->
<script src="../Compilation/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

<!-- Simplebar -->
<script src="../Compilation/simplebar/dist/simplebar.min.js"></script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Volt JS -->
<script src="../assets/js/volt.js"></script>


</body>

</html>
