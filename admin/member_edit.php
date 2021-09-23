<?php include('condb.php');

$member_id = $_GET['member_id'];

$sql="SELECT * FROM customer WHERE member_id='$member_id'";
$result = mysqli_query($conn,$sql);
$row_m = mysqli_fetch_array($result);

?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="member_edit_db.php" method="POST" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header" style="background-color: # !important;">
                        แก้ไขสมาชิก
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="" class="form-label">รหัสสมาชิก</label>
                            <input type="text" name="member_id" id="p_name" value="<?php echo $row_m['member_id'] ; ?>"
                                class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">ระดับสมาชิก</label>
                            <input type="text" name="level" id="p_name" value="<?php echo $row_m['level'] ; ?>"
                                class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">ชื่อ</label>
                            <input type="text" name="name" id="p_name" value="<?php echo $row_m['name'] ; ?>"
                                class="form-control">
                        </div>


                        <div class="mb-3">
                            <label for="" class="form-label">อีเมล</label>
                            <input type="email" name="email" id="p_surname" value="<?php echo $row_m['email'] ; ?>"
                                class="form-control">
                        </div>


                        <div class="mb-3">
                            <label for="" class="form-label">เบอร์โทร</label>
                            <input type="text" name="phone" id="p_email" value="<?php echo $row_m['phone'] ; ?>"
                                class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">ที่อยู่</label>
                            <input type="text" name="address" id="p_tel" value="<?php echo $row_m['address'] ; ?>"
                                class="form-control">
                        </div>


                        <div class="mb-3">
                            <label for="" class="form-label">Username</label>
                            <input type="text" name="username" id="p_username"
                                value="<?php echo $row_m['username'] ; ?>" class="form-control">
                        </div>


                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" name="password" id="p_password" required=""
                                value="<?php echo $row_m['password'] ; ?>" class="form-control">
                        </div>

                        <input type="hidden" name="member_id" value="<?php echo $row_m['member_id'] ; ?>">
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