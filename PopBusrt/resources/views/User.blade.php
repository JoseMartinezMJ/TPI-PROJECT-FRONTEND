<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-----===== css =====----->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <!-----===== Boxicons CSS =====----->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>PopBurst</title>
</head>
<body>
    <!-- Inicio de estructura SideBar Menu -->
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="{{ asset('img/logo.png') }}" alt="logo">
                </span>
                <div class="text header-text">
                    <span class="nameshop">PopBurst</span>
                    <span class="typeshop">Online store</span>
                </div>
            </div>
            <i class='bx bx-chevron-right toggle'></i>
        </header>
        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <a href="#">
                        <i class='bx bx-search icon' ></i>
                        <input type="search" placeholder=" Search...">
                    </a>
                </li>  
            <ul class="menu-links">
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-user-circle icon'></i>
                        <span class="text nav-text">Profile</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bxs-t-shirt icon' ></i>
                        <span class="text nav-text">Products</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-history icon'></i>
                        <span class="text nav-text">Shopping History</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bxs-coupon icon' ></i>
                        <span class="text nav-text">Coupons</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-list-plus icon' ></i>
                        <span class="text nav-text">Wish List</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-shopping-bag icon' ></i>
                        <span class="text nav-text">Orders</span>
                    </a>
                </li>
            </ul>
            </div>
            <div class="botton-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
                <li class="mode">
                    <div class="moon-sun">
                        <i class='bx bx-moon icon moon' ></i>
                        <i class='bx bx-sun icon sun' ></i>
                    </div>
                    <span class="mode-text text">Dark Mode</span>
                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </div>
        </div>
    </nav>
    <script src="{{ asset('js/dashboard-User.js') }}"></script>
</body>
</html>