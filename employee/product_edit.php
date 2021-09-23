<?php
include('condb.php'); 

$p_id = $_GET['p_id'];

$query1 = "SELECT p.*,t.* FROM tbl_product as p 
INNER JOIN tbl_type  as t ON p.type_id=t.type_id 
WHERE p_id='$p_id'
ORDER BY p.p_id DESC";
$result1 = mysqli_query($conn, $query1);
$row= mysqli_fetch_array($result1);

$query = "SELECT * FROM tbl_type ORDER BY type_id asc" or die("Error:" . mysqli_error());
$result = mysqli_query($conn, $query);

?>

<div class="col-md-12">
    <form name="add" action="product_editdb.php" method="POST" enctype="multipart/form-data"
        class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-2"> </div>
            <div class="col-sm-12" align="left">
                <h4 class="text-center"> แก้ไขขนม </h4>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align=""> ชื่อขนม :</div>
            <div class="col-sm-12" align="left">
                <input name="product_name" type="text" required class="form-control"  value="<?php echo $row['product_name']; ?>"/>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align=""> ประเภทขนม :</div>
            <div class="col-sm-12" align="left">
                <select name="type_id" class="form-control" required>
                     <option value="<?php echo $row["type_id"];?>"><?php echo $row["type_name"];?></option>
                    <?php foreach($result as $results){?>
                    <option value="<?php echo $results["type_id"];?>">
                        <?php echo $results["type_name"]; ?>
                    </option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2" align=""> ราคา :</div>
            <div class="col-sm-12" align="left">
                <input name="price_product" type="text" required class="form-control" id="m_name" placeholder="" value="<?php echo $row['price_product']; ?>" />
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-3" align=""> จำนวน : </div>
            <div class="col-sm-12" align="left">
                <input name="product_qty" type="text" class="form-control" id="m_email" required placeholder="" value="<?php echo $row['product_qty']; ?>" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2" align=""> หมายเหตุ : </div>
            <div class="col-sm-12" align="left">
                <textarea name="note" class="form-control" id="m_address" required ><?php echo $row['note']; ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2" align=""> รายละเอียดขนม : </div>
            <div class="col-sm-12" align="left">
                <textarea name="product_detail" class="form-control" id="m_address" required ><?php echo $row['product_detail']; ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                รูปภาพ :
                <input type="file" name="img" id="card_img" class="form-control" /><br>
                <img src="../img/<?php echo $row['img']; ?>" width="150px" alt="">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2"> </div>
            <div class="col-sm-12" align="right">
            <input type="hidden" name="p_id" value="<?php echo $row['p_id'];  ?>">
                <input type="hidden" name="img2" value="<?php echo $row['img'];  ?>">
                <button type="submit" class="btn btn-success btn-flat" id="btn"><span class="glyphicon glyphicon-saved"></span>
                    บันทึก
                </button> <a href="product.php" type="button" class="btn btn-danger btn-flat" id="btn"><span
                        class="glyphicon glyphicon-saved"></span> ยกเลิก </a>
            </div>

        </div>
    </form>
</div>