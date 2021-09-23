<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="admin_add_db.php" method="POST" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header" style="background-color: # !important;">
                        เพิ่มผู้ดูแลระบบ
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="" class="form-label">ชื่อ</label>
                            <input type="text" name="username" id="p_name" value=""
                                class="form-control">
                        </div>


                        <div class="mb-3">
                            <label for="" class="form-label">อีเมล</label>
                            <input type="email" name="admin_email" id="p_surname" value=""
                                class="form-control">
                        </div>


                        <div class="mb-3">
                            <label for="" class="form-label">รหัสผ่าน</label>
                            <input type="password" name="admin_password" id="p_email" value=""
                                class="form-control">
                        </div>

                        <input type="hidden" name="level" value="admin">
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