<?php include('condb.php');

$employee_id = $_GET['employee_id'];

$sql="SELECT * FROM employees WHERE employee_id='$employee_id'";
$result = mysqli_query($conn,$sql);
$row_m = mysqli_fetch_array($result);

?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="employee_edit_db.php" method="POST" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header" style="background-color: # !important;">
                        แก้ไขพนักงาน
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="" class="form-label">รหัสพนักงาน</label>
                            <input type="text" name="employee_id" id="p_name" value="<?php echo $row_m['employee_id'] ; ?>"
                                class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">ระดับพนักงาน</label>
                            <input type="text" name="level" id="p_name" value="<?php echo $row_m['level'] ; ?>"
                                class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">ชื่อ</label>
                            <input type="text" name="employee_name" id="p_name" value="<?php echo $row_m['employee_name'] ; ?>"
                                class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">ที่อยู่</label>
                            <input type="text" name="employee_address" id="p_name" value="<?php echo $row_m['employee_address'] ; ?>"
                                class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">เบอร์โทร</label>
                            <input type="text" name="employee_phone" id="p_name" value="<?php echo $row_m['employee_phone'] ; ?>"
                                class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">เพศ</label>
                            <input type="text" name="employee_gender" id="p_username"
                                value="<?php echo $row_m['employee_gender'] ; ?>" class="form-control">
                        </div>


                        <div class="mb-3">
                            <label for="" class="form-label">อายุ</label>
                            <input type="number" name="employee_age" id="p_password" required=""
                                value="<?php echo $row_m['employee_age'] ; ?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">username</label>
                            <input type="email" name="employee_email" id="p_password" required=""
                                value="<?php echo $row_m['employee_email'] ; ?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">password</label>
                            <input type="text" name="employee_password" id="p_password" required=""
                                value="<?php echo $row_m['employee_password'] ; ?>" class="form-control">
                        </div>

                        <input type="hidden" name="employee_id" value="<?php echo $row_m['employee_id'] ; ?>">
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