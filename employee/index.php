<?php 
$menu = "index";

include('condb.php');

$sql_total ="SELECT SUM(o_total) AS total        
FROM order_head
WHERE o_status IN(3)";
$rs_total = mysqli_query($conn,$sql_total);
$count_total = mysqli_fetch_array($rs_total);

$sql_totalc ="SELECT SUM(a_price) AS pricec        
FROM acount_list";
$rs_totalc = mysqli_query($conn,$sql_totalc);
$count_totalc = mysqli_fetch_array($rs_totalc);


$sql_order ="SELECT * FROM order_head";
$rs_order = mysqli_query($conn,$sql_order);
$count_order=mysqli_num_rows($rs_order);

$sql_wait ="SELECT * FROM order_head 
WHERE o_status=1";
$rs_wait = mysqli_query($conn,$sql_wait);
$count_wait=mysqli_num_rows($rs_wait);


$sql_confirm ="SELECT * FROM order_head 
WHERE o_status=2";
$rs_confirm = mysqli_query($conn,$sql_confirm);
$count_confirm=mysqli_num_rows($rs_confirm);


$sql_payment ="SELECT * FROM order_head 
WHERE o_status=3";
$rs_payment = mysqli_query($conn,$sql_payment);
$count_payment=mysqli_num_rows($rs_payment);


$sql_cancel ="SELECT * FROM order_head 
WHERE o_status=4";
$rs_cancel = mysqli_query($conn,$sql_cancel);
$count_cancel=mysqli_num_rows($rs_cancel);

$sql_product ="SELECT * FROM tbl_product ";
$rs_product = mysqli_query($conn,$sql_product);
$count_product=mysqli_num_rows($rs_product);


$sql_type ="SELECT * FROM tbl_type ";
$rs_type = mysqli_query($conn,$sql_type);
$count_type=mysqli_num_rows($rs_type);

$sql_admin ="SELECT * FROM admin";
$rs_admin = mysqli_query($conn,$sql_admin);
$count_admin=mysqli_num_rows($rs_admin);

$sql_customer ="SELECT * FROM customer";
$rs_customer = mysqli_query($conn,$sql_customer);
$count_customer=mysqli_num_rows($rs_customer);

$sql_employee ="SELECT * FROM employees";
$rs_employee = mysqli_query($conn,$sql_employee);
$count_employee=mysqli_num_rows($rs_employee);

?>

<title>หน้าแรก</title>
<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
</section>
<br><br>
<!-- Main content -->
<section class="content">



    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-tachometer-alt"></i> แผงควบคุม</h3>
        </div>
        <br>
        <div class="card-body p-1">
            <div class="row">
                <div class="col-md-4">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h1 class="text-white"><?php echo number_format($count_total['total']);  ?>  บาท</h1>
                            <p>รายได้</p>
                        </div>
                        <div class="icon">
                        <i class="fas fa-dollar-sign"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-dark">
                        <div class="inner">
                        <h1 class="text-white"><?php echo $count_order;  ?>  รายการ</h1>
                            <p>รายการสั่งซื้อ</p>
                        </div>
                        <div class="icon">
                        <i class="far fa-list-alt"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-warning">
                        <div class="inner">
                        <h1 class="text-white"><?php echo $count_wait;  ?>  รายการ</h1>
                            <p>รอการชำระเงิน</p>
                        </div>
                        <div class="icon">
                        <i class="fas fa-hourglass-half"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-primary">
                        <div class="inner">
                        <h1 class="text-white"><?php echo $count_confirm;  ?>  รายการ</h1>
                            <p>รอยืนยันการสั่งซื้อ</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-success">
                        <div class="inner">
                        <h1 class="text-white"><?php echo $count_payment;  ?>  รายการ</h1>
                        <p>ชำระเงินแล้ว</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-danger">
                        <div class="inner">
                        <h1 class="text-white"><?php echo $count_cancel;  ?>  รายการ</h1>
                        <p>ยกเลิก</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-secondary">
                        <div class="inner">
                        <h1 class="text-white"><?php echo $count_product;  ?>  รายการ</h1>
                        <p>สินค้า</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-secondary">
                        <div class="inner">
                        <h1 class="text-white"><?php echo $count_type;  ?>  รายการ</h1>
                        <p>ประเภทสินค้า</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-primary">
                        <div class="inner">
                        <h1 class="text-white"><?php echo $count_admin;  ?>  รายการ</h1>
                        <p>ผู้ดูแลระบบ</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-primary">
                        <div class="inner">
                        <h1 class="text-white"><?php echo $count_employee;  ?>  รายการ</h1>
                        <p>พนักงาน</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-primary">
                        <div class="inner">
                        <h1 class="text-white"><?php echo $count_customer;  ?>  รายการ</h1>
                        <p>สมาชิก</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-info">
                        <div class="inner">
                        <h1 class="text-white">บัญชี: <?php echo number_format($count_totalc['pricec']);  ?>  บาท</h1>
                        <p>บัญชี</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                    </div>
                </div>

            </div>




        </div>

    </div>







    </div>
    <!-- /.col -->
    </div>



</section>
<!-- /.content -->

<?php include('footer.php'); ?>

<script>
$(function() {
    $(".datatable").DataTable();
    // $('#example2').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    // http://fordev22.com/
    // });
});
</script>

</body>

</html>