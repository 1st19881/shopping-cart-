<?php 
$menu = "index"

?>
<title>หน้าแรก</title>
<?php  
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
            <div class="col-md-12" style="margin-top: 10px">
            <h4 class="text-center mb-4">รายการขนมบ้านอันน์</h4>
                <div class="row">
        <?php
            $act = (isset($_GET['act']) ? $_GET['act'] : '');
            if($act=='showtype'){
            include('showtype.php');
            }else{
            include('show.php');
            }
        ?>
                </div>
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