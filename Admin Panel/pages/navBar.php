<nav id="sidebarMenu" class="sidebar d-md-block bg-primary text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
        <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
            <div class="d-flex align-items-center">
                <div class="user-avatar lg-avatar mr-4">
                    <img src="../assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white" alt="Bonnie Green">
                </div>
                <div class="d-block">
                    <h2 class="h6">Hi, User Name</h2>
                    <a href="examples/sign-in.html" class="btn btn-secondary text-dark btn-xs"><span class="mr-2"><span class="fas fa-sign-out-alt"></span></span>Sign Out</a>
                </div>
            </div>
            <div class="collapse-close d-md-none">
                <a href="#sidebarMenu" class="fas fa-times" data-toggle="collapse"
                   data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true"
                   aria-label="Toggle navigation"></a>
            </div>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item  active ">
                <a href="dashboard.html" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-chart-pie"></span></span>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
          <span class="nav-link  collapsed  d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#submenu-pages">
            <span>
              <span class="sidebar-icon"><span class="far fa-file-alt"></span></span>
              Equipment
            </span>
            <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
          </span>
                <div class="multi-level collapse " role="list" id="submenu-pages" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item"><a class="nav-link" href="equipment_add.php"><span>Equipment Add</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="./category_add.php"><span>Equipment Category Add</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="sub_cate_add.php"><span>Equipment Sub Category Add</span></a></li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
          <span class="nav-link  collapsed  d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#submenu-components">
            <span>
              <span class="sidebar-icon"><span class="far fa-file-alt"></span></span>
              Wears
            </span>
            <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
          </span>
                <div class="multi-level collapse " role="list" id="submenu-components" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item"><a class="nav-link" href="wears_add.php"><span>Wears Add</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="wears_cat_add.php"><span>Wears Category Add</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="wears_sub_cat_add.php"><span>Wears Sub Category Add</span></a></li>
                    </ul>
                </div>
            </li>

            <li role="separator" class="dropdown-divider mt-4 mb-3 border-black"></li>
            <li class="nav-item">
                <a href="../../index.html" class="nav-link d-flex align-items-center">
            <span class="sidebar-icon">
              <img src="../assets/img/brand/light.svg" height="20" width="20" alt="Volt Logo">
            </span>
                    <span class="mt-1">SportJam</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
