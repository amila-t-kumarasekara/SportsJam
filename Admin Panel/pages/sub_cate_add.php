
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

    <!-- Volt CSS -->
    <link type="text/css" href="../css/compilation.css" rel="stylesheet">

    <link type="text/css" href="../css/compilation.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css"/>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

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

            <?php include 'navBar.php' ?>
            <!--            end of side bar nav-->

            <main class="content">

                <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark pl-0 pr-2 pb-0">
                    <div class="container-fluid px-0">
                        <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                            <div class="d-flex">
                                <!-- Search form -->
                            </div>
                            <!-- Navbar links -->
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item dropdown">
                                    <a class="nav-link text-dark mr-lg-3 icon-notifications" data-unread-notifications="true" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="icon icon-sm">
                <span class="fas fa-bell bell-shake"></span>
                <span class="icon-badge rounded-circle unread-notifications"></span>
              </span>
                                    </a>
                                    <div class="dropdown-menu dashboard-dropdown dropdown-menu-lg dropdown-menu-center mt-2 py-0">
                                        <div class="list-group list-group-flush">
                                            <a href="#" class="text-center text-primary font-weight-bold border-bottom border-light py-3">Notifications</a>

                                <li class="nav-item dropdown">
                                    <a class="nav-link pt-1 px-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="media d-flex align-items-center">
                                            <img class="user-avatar md-avatar rounded-circle" alt="Image placeholder" src="../assets/img/team/profile-picture-3.jpg">
                                            <div class="media-body ml-2 text-dark align-items-center d-none d-lg-block">
                                                <span class="mb-0 font-small font-weight-bold">Bonnie Green</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dashboard-dropdown dropdown-menu-right mt-2">
                                        <a class="dropdown-item font-weight-bold" href="#"><span class="far fa-user-circle"></span>My Profile</a>
                                        <div role="separator" class="dropdown-divider"></div>
                                        <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-sign-out-alt text-danger"></span>Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <!--                end of notification & avatar-->

                <!--                navigation & title-->

                <div class="py-2">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                            <li class="breadcrumb-item"><a href="dashboard.html"><span class="fas fa-home"></span></a></li>
                            <li class="breadcrumb-item"><a href="equipment_add.php">Equipment</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sub Category</li>
                        </ol>
                    </nav>
                    <div class="d-flex justify-content-between w-100 flex-wrap">
                        <div class="mb-3 mb-lg-0">
                            <h1 class="h4">Sub Category</h1>
                        </div>
                    </div>
                </div>

                <!--              end of navigation & title -->

                <div class="row justify-content-md-center">
                    <div class="card border-light shadow-sm components-section">
                    <div class="main-panel">
                        <form method="POST" name="subcatForm" action="insert_update_delete.php" onsubmit="return myFunction()" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sub Category Add</label>
                                <div class="mb-4 cateInput">
                                    <input type="text" class="form-control" id="subcategory" name="subcategory" aria-describedby="emailHelp" placeholder="Enter Sub Category">
                                </div>
                            </div>
                            <div class="mb-4">
                            <button type="submit" id="subcate_Add" name="subcate_Add" class="cateBtn btn btn-primary">Submit</button>
                            </div>
                        </form>
                        <div class="mb-4">
                            <h1 class="h4">Equipment Table</h1>
                        </div>
                <div class="card card-body border-light shadow-sm table-wrapper table-responsive pt-3">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Sub Category Name</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody  id="table_sub_category">
                            <?php
                            include 'sub_category_view.php';
                            ?>
                            </tbody>
                        </table>
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
