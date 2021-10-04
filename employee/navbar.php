<?php 
$sql_w= "SELECT *
 FROM  order_head
 WHERE o_status=2 ";
 $result_w	= mysqli_query($conn, $sql_w);
 $count_w = mysqli_num_rows($result_w);
?>

<nav class="main-header  navbar navbar-expand navbar-light navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?php if ($menu == "index"){echo "active";} ?>" href="index.php">  ขนมบ้านอันน์ ( พนักงาน )</a>
        </li>

    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-link"><a href="order.php?act=confirm">
               <h5><i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge"><?php echo  $count_w;  ?></span></h5>
            </a></li>
    </ul>
</nav>
<!--  http://fordev22.com/ -->
<!-- /.navbar -->