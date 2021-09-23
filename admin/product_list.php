<?php
error_reporting( error_reporting() & ~E_NOTICE );
include('condb.php');  
$query = "SELECT p.*,t.* FROM tbl_product as p 
INNER JOIN tbl_type  as t ON p.type_id=t.type_id 
ORDER BY p.p_id DESC";
$result = mysqli_query($conn, $query);

$i=1;

	
?>

<table class="table table-bordered  datatable  table-responsive" align="center">
    <thead>
        <tr class="info">
            <th scope="col">#</th>
            <th class="text-nowrap" scope="col">ชื่อขนม</th>
            <th class="text-nowrap" scope="col">ประเภทขนม</th>
            <th class="text-nowrap" scope="col">รายละเอียด</th>
            <th scope="col">ราคา</th>
            <th scope="col">จำนวน</th>
            <th scope="col">หมายเหตุ</th>
            <th width="10%" scope="col">ภาพ</th>
            <th scope="col">จัดการ</th>
        </tr>
    </thead>
    <?php while($row_p = mysqli_fetch_array($result)) { ?>
    <tr>
        <th scope="row"><?php echo $i++ ?></th>
        <td><?php echo $row_p['product_name']; ?></td>
        <td><?php echo $row_p['type_name']; ?></td>
        <td style="font-size:14px"><?php echo $row_p['product_detail']; ?></td>
        <td><?php echo number_format($row_p['price_product']); ?></td>
        <td>
            <?php echo $row_p['product_qty']; ?> ชิ้น <br>
            <?php $st = $row_p['product_qty'];
            if($st > 0){
                echo "<font style='color:green'>มีสินค้า</font>";
            } else {
                echo "<font style='color:red'>สินค้าหมด</font>"; 
            } 
            ?>
        </td>
        <td><?php echo $row_p['note']; ?></td>
        <td><img src="../img/<?php echo $row_p['img']; ?>" width="100%" alt=""></td>
        <td>
            <div class="d-flex">
                <a href="product.php?act=edit&product_id=<?php echo $row_p['product_id']; ?>"
                    class="btn btn-warning btn-flat">แก้ไข</a><a
                    href="product.php?act=delete&product_id=<?php echo $row_p['product_id']; ?>"
                    class="btn btn-danger btn-flat">ลบ</a>
            </div>
        </td>
    </tr>


    <?php }  ?>


</table>



 <!-- Comments Form -->
 <div class="box1 card my-4">
        <h5 style="background-color:#FFFAFA" ; class=" card-header "><i class="fas fa-comment-alt"></i>
            กล่องแสดงความคิดเห็น:</h5>
        <div class="box1 card-body border ">
            <form action="comment_save.php" method="POST" class="form-horizontal">
                <label class="text-danger font-weight-bold">ความคิดเห็น:
                    <small>***แสดงความคิดเห็นหอพัก</small></label>
                <textarea name="c_detail" class="form-control border border-3 border-dark" required></textarea>
                <br>
                <label class="text-danger font-weight-bold">ชื่อ: <small>***ชื่อคนที่ต้องการตอบกลับ</small></label>
                <textarea name="reply_name" class=" form-control border border-3 border-dark col-6"></textarea>
                <br>
                <input type="hidden" name="member_id" id="member_id" value="<?php echo $member_id;?>">
                <input type="hidden" name="ref_p_id" value="<?php echo 
                    $row['p_id'];?>">
                <button type="submit" class="btn btn-outline-dark btn-flat"><i class="fas fa-save"></i>
                    บันทึก</button>
            </form>

        </div>
    </div>