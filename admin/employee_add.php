<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="employee_add_db.php" method="POST" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header" style="background-color: # !important;">
                        เพิ่มพนักงาน
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="" class="form-label">ชื่อ</label>
                            <input type="text" name="employee_name" id="p_name" value=""
                                class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">ที่อยู่</label>
                            <input type="text" name="employee_address" id="p_name" value=""
                                class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">เบอร์โทร</label>
                            <input type="text" name="employee_phone" id="p_name" value=""
                                class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">เพศ</label>
                            <input type="text" name="employee_gender" id="p_username"
                                value="" class="form-control">
                        </div>


                        <div class="mb-3">
                            <label for="" class="form-label">อายุ</label>
                            <input type="number" name="employee_age" id="p_password" required=""
                                value="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">username</label>
                            <input type="email" name="employee_email" id="p_password" required=""
                                value="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">password</label>
                            <input type="text" name="employee_password" id="p_password" required=""
                                value="" class="form-control">
                        </div>

                        <input type="hidden" name="level" value="พนักงาน">
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