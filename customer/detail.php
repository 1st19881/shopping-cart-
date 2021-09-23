<?php 
$menu = "index"

?>
<title>หน้าแรก</title>
<?php

$p_id = $_GET['p_id'];

error_reporting( error_reporting() & ~E_NOTICE );

include('condb.php');  

$query = "SELECT p.*,t.* FROM tbl_product as p 
INNER JOIN tbl_type  as t ON p.type_id=t.type_id 
WHERE p.p_id=$p_id
ORDER BY p.p_id DESC";
$result = mysqli_query($conn,$query);

$row_d = mysqli_fetch_array($result);

?>

<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4">
                <img src="../img/<?php echo $row_d['img'] ; ?>" width="100%" alt="">
            </div>
            <div class="col-md-6 ">
                <h4><?php echo $row_d['product_name'] ; ?></h4>
                <p>ประเภทขนม : <?php echo $row_d['product_name'] ; ?></p>
                <p>รายละเอียด : <?php echo $row_d['product_detail'] ; ?></p>
                <p>จำนวน : <?php echo $row_d['product_qty'] ; ?> ชิ้น</p>
                <p>ราคา : <?php echo $row_d['price_product'] ; ?> บาท</p>
                <br>
                <a class="btn btn-primary btn-flat" href="index.php">กลับ</a>
                <a  class="btn btn-success btn-flat" href="cart.php?p_id=<?php echo $row_d['p_id']; ?>&act=add">เพิ่มลงตะกร้า</a>
            </div>
        </div>
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