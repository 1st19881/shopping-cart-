<?php include('condb.php');

$admin_id = $_GET['admin_id'];

$sql="SELECT * FROM admin WHERE admin_id='$admin_id'";
$result = mysqli_query($conn,$sql);
$row_m = mysqli_fetch_array($result);

?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="admin_edit_db.php" method="POST" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header" style="background-color: # !important;">
                        แก้ไขผู้ดูแลระบบ
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="" class="form-label">รหัสผู้ดูแลระบบ</label>
                            <input type="text" name="admin_id" id="p_name" value="<?php echo $row_m['admin_id'] ; ?>"
                                class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">ระดับผู้ดูแลระบบ</label>
                            <input type="text" name="level" id="p_name" value="<?php echo $row_m['level'] ; ?>"
                                class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">ชื่อ</label>
                            <input type="text" name="username" id="p_name" value="<?php echo $row_m['username'] ; ?>"
                                class="form-control">
                        </div>



                        <div class="mb-3">
                            <label for="" class="form-label">Username</label>
                            <input type="eamil" name="admin_email" id="p_username"
                                value="<?php echo $row_m['admin_email'] ; ?>" class="form-control">
                        </div>


                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" name="admin_password" id="p_password" required=""
                                value="<?php echo $row_m['admin_password'] ; ?>" class="form-control">
                        </div>

                        <input type="hidden" name="admin_id" value="<?php echo $row_m['admin_id'] ; ?>">
                        <button type="submit" class="btn btn-success  btn-flat col-2">บันทึก</button>
                    </div>

                </div>
        </div>
        </form>
    </div>
    <!-- <div class="col-md-2">
		</div> -->
</div>
</div>