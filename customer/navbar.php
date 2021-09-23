<nav class="main-header  navbar navbar-expand navbar-light navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?php if ($menu == "index"){echo "active";} ?>" href="index.php"> ขนมบ้านอันน์</a>
        </li>

    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
            <a href="cart.php" class="nav-link ">
                <i class="cart.php"></i> ตะกร้าสินค้า ( <?php 
                        echo (isset($_SESSION['cart']) && count($_SESSION['cart'])) > 0 ? count($_SESSION['cart']):'0';
                    ?> )
            </a>

        </li>
    </ul>
</nav>
<!--  http://fordev22.com/ -->
<!-- /.navbar -->