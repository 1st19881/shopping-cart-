<?php 
$menu = "employee"

?>
<title>จัดการพนักงาน</title>

<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">

    <div class="container">
    <?php 
  error_reporting( error_reporting() & ~E_NOTICE );
  $act = (isset($_GET['act']) ? $_GET['act'] : '');
    if($act=="add"){
      echo '';
    }elseif($act=="edit"){
        echo '';
    }elseif($act=="delete"){
        echo '';
    }else{?>
            <a href="employee.php?act=add" class="btn btn-primary btn-flat">เพิ่มพนักงาน</a>
            <?php } 
   ?>
     <div class="col-md-12" style="margin-top: 10px">
     <?php
            $act = (isset($_GET['act']) ? $_GET['act'] : '');
            if($act=='add'){
            include('employee_add.php');
            }else if($act=='edit'){
            include("employee_edit.php");
            }else if($act=='delete'){
            include("employee_delete.php");
            }else{
            include('employee_list.php');
            }
            ?>
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