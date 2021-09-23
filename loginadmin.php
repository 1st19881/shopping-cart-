<link rel="stylesheet" href="css/style.css">
<title>เข้าสู่ระบบ</title>
<?php include("header.php"); ?>
<!-- Main content -->
<section class="content">
    <div class="login-dark" style="height: 700px;">
        <form class="form-horizontal" action="checkadmin.php" method="POST">
        <h3 class="text-center">ผู้ดูแลระบบ</h3>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="admin_email" placeholder="ชื่อผู้ใช้"></div>
            <div class="form-group"><input class="form-control" type="password" name="admin_password" placeholder="รหัสผ่าน"></div>
            <div class="form-group"><button class="btn btn-primary btn-block">เข้าสู่ระบบ</button></div>
            <br>
            <a href="index.php" class="btn btn-sm btn-outline-primary">สมาชิก</a>
            <a href="loginemployee.php" class="btn btn-sm btn-outline-primary">พนักงาน</a>
        </form>
    </div>
</section>
<!-- /.content -->

<?php include('footer.php'); ?>