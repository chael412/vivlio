<style>
    .nav-menu-line {
        /* border: 1px solid #ccc; */
        border-right: 1px solid #ccc;
        border-radius: 5px;
    }
</style>


<nav class="main-header navbar navbar-expand-md navbar-light px-5" style="background: #ecf0f1; font-weight: 600">
    <div class="container-fluid">
        <!-- <a href="./index3.html" class="navbar-brand">
            <img src="./dist/img/menu.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                style="opacity: 0.8" />
            <span class="brand-text font-weight-light">ISU-libraryx</span>
        </a> -->

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <div style=" border-left: 1px solid #ccc;"></div>
                <li class="nav-item">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <div class="nav-menu-line"></div>

                <li class="nav-item">
                    <a href="reports.php" class="nav-link">Book</a>
                </li>
                <div class="nav-menu-line"></div>

                <li class="nav-item">
                    <a href="reports.php" class="nav-link">Services</a>
                </li>
                <div class="nav-menu-line"></div>


                <li class="nav-item">
                    <a href="reports.php" class="nav-link">About</a>
                </li>
                <div class="nav-menu-line"></div>
            </ul>
        </div>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">

            <!-- <li class="nav-item">
                <a href="#" class="btn btn-outline-primary btn-sm px-3 py-1">Login</a>
            </li> -->

            <li class="nav-item dropdown">
                <a class="btn btn-outline-primary px-3 py-1" href="#" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" class="nav-link dropdown-toggle">
                    <span>Login <i class="fas fa-caret-down"></i></span>
                </a>
                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                    <li>
                        <a href="/dashboard" class="dropdown-item">
                            Admin
                        </a>
                    </li>
                    <li>
                        <a href="/attendance" class="dropdown-item">
                            User attendance
                        </a>
                    </li>


                </ul>
            </li>

        </ul>
    </div>
</nav>
