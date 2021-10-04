<?php 
$query = "SELECT * FROM tbl_type ORDER BY type_id asc" or die("Error:" . mysqli_error());
$result = mysqli_query($conn, $query); 

?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
        <img src="../assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo $_SESSION['name'];  ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


                <li class="nav-item">
                    <a href="index.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>หน้าแรก</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle"></i>
                        <p>
                            ประเภทขนม
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                        <?php foreach ($result as $row_t )  { ?>
                            <a href="index.php?act=showtype&type_id=<?php echo $row_t['type_id'];?>" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <?php echo $row_t["type_name"];  ?>
                            </a>
                        <?php } ?>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="order.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ประวัติสั่งซื้อ</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="shopping.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>วิธีการสั่งซื้อ</p>
                    </a>
                </li>



                <li class="nav-item">
                    <a href="contac.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ติดต่อร้าน</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="profile.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>แก้ไขข้อมูลส่วนตัว</p>
                    </a>
                </li>

                <li class="nav-item mt-4">
                    <a href="logout.php" class="nav-link">
                        <i class="fas fa-sign-out-alt nav-icon"></i>
                        <p>ออกจากระบบ</p>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>