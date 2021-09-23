<?php
error_reporting( error_reporting() & ~E_NOTICE );
include('condb.php');  

$a_id = $_GET['a_id'];

$query = " SELECT * FROM acount_list 
WHERE  a_id='$a_id'  
ORDER BY a_id DESC";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

$i=1;

	
?>
<div class="col-md-12">
    <form name="add" action="account_edit_db.php" method="POST" enctype="multipart/form-data"
        class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-2"> </div>
            <div class="col-sm-12" align="left">
                <h4 class="text-center"> แก้ไข บันทึกยอดขาย </h4>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align=""> รายการ :</div>
            <div class="col-sm-12" align="left">
                <input name="a_name" type="text" required class="form-control" value="<?php echo $row['a_name']  ?>" />
            </div>
        </div>

      

        <div class="form-group">
            <div class="col-sm-3" align=""> จำนวน : </div>
            <div class="col-sm-12" align="left">
                <input name="a_total" type="number" min="0" class="form-control" id="m_email" required placeholder="" value="<?php echo $row['a_total']  ?>" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align=""> ราคา :</div>
            <div class="col-sm-12" align="left">
                <input name="a_price" type="number" min="0" required class="form-control" id="m_name" placeholder="" value="<?php echo $row['a_price']  ?>" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2" align=""> วันที่บันทึก : </div>
            <div class="col-sm-12" align="left">
              <input type="date" name="a_date" id="" class="form-control" value="<?php echo $row['a_date']  ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2"> </div>
            <div class="col-sm-12" align="right">
                <input type="hidden" name="a_id" id="" value="<?php echo $row['a_id']  ?>">
                <button type="submit" class="btn btn-success btn-flat" id="btn"><span class="glyphicon glyphicon-saved"></span>
                    บันทึก
                </button> <a href="account.php" type="button" class="btn btn-danger btn-flat" id="btn"><span
                        class="glyphicon glyphicon-saved"></span> ยกเลิก </a>
            </div>
        </div>
    </form>
</div>