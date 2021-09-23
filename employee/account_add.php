<div class="col-md-12">
    <form name="add" action="account_add_db.php" method="POST" enctype="multipart/form-data"
        class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-2"> </div>
            <div class="col-sm-12" align="left">
                <h4 class="text-center"> บันทึกยอดขาย </h4>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align=""> รายการ :</div>
            <div class="col-sm-12" align="left">
                <input name="a_name" type="text" required class="form-control" />
            </div>
        </div>

      

        <div class="form-group">
            <div class="col-sm-3" align=""> จำนวน : </div>
            <div class="col-sm-12" align="left">
                <input name="a_total" type="number" min="0" class="form-control" id="m_email" required placeholder="" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align=""> ราคา :</div>
            <div class="col-sm-12" align="left">
                <input name="a_price" type="number" min="0" required class="form-control" id="m_name" placeholder="" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2" align=""> วันที่บันทึก : </div>
            <div class="col-sm-12" align="left">
              <input type="date" name="a_date" id="" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2"> </div>
            <div class="col-sm-12" align="right">
                <button type="submit" class="btn btn-success btn-flat" id="btn"><span class="glyphicon glyphicon-saved"></span>
                    บันทึก
                </button> <a href="account.php" type="button" class="btn btn-danger btn-flat" id="btn"><span
                        class="glyphicon glyphicon-saved"></span> ยกเลิก </a>
            </div>
        </div>
    </form>
</div>