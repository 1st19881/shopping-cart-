<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
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
          <a href="#" class="d-block"><?php echo $_SESSION['employee_name'] ;?></a>
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
            <a href="product.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
              <p>สินค้า</p>
            </a>
          </li>


          <li class="nav-item">
            <a href="report.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
              <p>รายงาน</p>
            </a>
          </li>



          <li class="nav-item">
            <a href="order.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
              <p>จัดการรายการสั่งซื้อ</p>
            </a>
          </li>



          <li class="nav-item">
            <a href="account.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
              <p>บันทึกยอดขาย</p>
            </a>
          </li>






          <li class="nav-item mt-4">
            <a href="#" class="nav-link">
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