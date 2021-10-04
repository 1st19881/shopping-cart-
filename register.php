<link rel="stylesheet" href="css/style.css">
<title>สมัครสมาชิก</title>
<?php include("header.php"); ?>
<!-- Main content -->
<section class="content">
    <h4 class="text-center mb-4 mt-4">สมัครสมาชิก</h4>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <form action="register_db.php" method="POST" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header" style="background-color: # !important;">
                        สมัครสมาชิก
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="" class="form-label">ชื่อ</label>
                            <input type="text" name="name" id="p_name" value=""
                                class="form-control">
                        </div>


                        <div class="mb-3">
                            <label for="" class="form-label">อีเมล</label>
                            <input type="email" name="email" id="p_surname" value=""
                                class="form-control">
                        </div>


                        <div class="mb-3">
                            <label for="" class="form-label">เบอร์โทร</label>
                            <input type="text" name="phone" id="p_email" value=""
                                class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">ที่อยู่</label>
                            <input type="text" name="address" id="p_tel" value=""
                                class="form-control">
                        </div>


                        <div class="mb-3">
                            <label for="" class="form-label">Username</label>
                            <input type="text" name="username" id="p_username"
                                value="" class="form-control">
                        </div>


                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" name="password" id="p_password" required=""
                                value="" class="form-control">
                        </div>

                        <input type="hidden" name="level" value="member">
                        <button type="submit" class="btn btn-success  btn-flat col-2">บันทึก</button>
                        <a href="index.php" class="btn btn-danger  btn-flat col-2">ยกเลิก</a>
                    </div>

                </div>
        </div>
        </form>
    </div>
    <!-- <div class="col-md-2">
		</div> -->
</div>
</div>
</section>
<!-- /.content -->

<?php include('footer.php'); ?>