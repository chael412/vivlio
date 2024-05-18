<style>
    .nav-menu-line {
        /* border: 1px solid #ccc; */
        border-right: 1px solid #ccc;
        border-radius: 5px;
    }
</style>


<nav class="main-header navbar navbar-expand-md navbar-light px-5" style="background: #ecf0f1; font-weight: 600">
    <div class="container-fluid">


        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <div style=" border-left: 1px solid #ccc;"></div>
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">Dasboard</a>
                </li>

                <div class="nav-menu-line"></div>

                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="nav-link dropdown-toggle">Masterfile</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">

                        <li class="dropdown-submenu dropdown-hover">
                            <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"
                                class="dropdown-item dropdown-toggle">User</a>
                            <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                <li>
                                    <a href="amdins.php" class="dropdown-item">Admins</a>
                                </li>
                                <li>
                                    <a href="faculty.php" class="dropdown-item">Faculties</a>
                                </li>
                                <li>
                                    <a href="/students" class="dropdown-item">Students</a>
                                </li>
                                <li>
                                    <a href="visitors.php" class="dropdown-item">Visitors</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="courses.php" class="dropdown-item">Course</a>
                            </a>
                        </li>
                        <li>
                            <a href="departments.php" class="dropdown-item">Department</a>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('books') }}" class="dropdown-item">Book Catalog</a>
                            </a>
                        </li>

                    </ul>
                </li>

                <div class="nav-menu-line"></div>

                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="nav-link dropdown-toggle">Transaction</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li>
                            <a href="attendances.php" class="dropdown-item">Attendance
                            </a>
                        </li>
                        <li>
                            <a href="Borrows.php" class="dropdown-item">Borrow
                            </a>
                        </li>
                        <li>
                            <a href="returns.php" class="dropdown-item">Return</a>
                            </a>
                        </li>
                    </ul>
                </li>

                <div class="nav-menu-line"></div>

                <li class="nav-item">
                    <a href="reports.php" class="nav-link">Report</a>
                </li>
                <div class="nav-menu-line"></div>
            </ul>
        </div>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Mike</a>
            </li>

            <li class="nav-item dropdown">
                <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" class="nav-link dropdown-toggle">
                    <img src="../assets/dist/img/account.png" alt="" width="35">
                </a>
                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                    <li>
                        <a href="{{ route('account') }}" class="dropdown-item">
                            Account
                        </a>
                    </li>
                    <li>
                        <a href="/" class="dropdown-item">Logout
                        </a>
                    </li>

                </ul>
            </li>

        </ul>
    </div>
</nav>
