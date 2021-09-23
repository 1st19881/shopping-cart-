<?php
    include("condb.php");  
?>
<title>หน้าแรก</title>
<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="container">
        <h4>ยืนยันการสั่งซื้อขนม</h4>
        <form id="frmcart" name="frmcart" method="post" action="saveorder.php">
            <table width="100% border="0" align="center" class="table table-bordered" style="background-color:#F7F7ED">
                <tr>
                <td bgcolor="#F7F7ED">ภาพ</td>
                    <td bgcolor="#F7F7ED">สินค้า</td>
                    <td align="center" bgcolor="#F7F7ED">ราคา</td>
                    <td align="center" bgcolor="#F7F7ED">จำนวน</td>
                    <td align="center" bgcolor="#F7F7ED">รวม/รายการ</td>
                </tr>
                <?php
	$total=0;
	foreach($_SESSION['cart'] as $p_id=>$qty)
	{
		$sql	= "SELECT * FROM tbl_product where p_id=$p_id";
		$query	= mysqli_query($conn, $sql);
		$row	= mysqli_fetch_array($query);
		$sum	= $row['price_product']*$qty;
		$total	+= $sum;
    echo "<tr>";
    echo "<td width='20%'> <img src='../img/" . $row['img'] . "' width='50%' alt='img'>" .'</td>' ;
    echo "<td>" . $row["product_name"] . "</td>";
    echo "<td align='right'>" .number_format($row['price_product'],2) ."</td>";
    echo "<td align='right'>$qty</td>";
    echo "<td align='right'>".number_format($sum,2)."</td>";
    echo "</tr>";
	}
	echo "<tr>";
    echo "<td  align='right' colspan='4' bgcolor='#F7DD83'><b>รวม</b></td>";
    echo "<td align='right' bgcolor='#F7DD83'>"."<b>".number_format($total,2)."</b>"."</td>";
    echo "</tr>";
?>
            </table>
<br>

<?php 

$member_id = $_SESSION['member_id'];

$sql_m="SELECT * FROM customer WHERE member_id=$member_id ";
$rs_m = mysqli_query($conn,$sql_m);
$row_m = mysqli_fetch_array($rs_m);

?>


            <table border="0" cellspacing="0" align="center" class="table table-bordered">
                <tr>
                    <td colspan="2" bgcolor="#eee">รายละเอียดในการติดต่อ</td>
                </tr>
                <tr>
                    <td bgcolor="#EEEEEE">ชื่อ</td>
                    <td><input class="form-control" name="name" type="text" id="name" required value="<?php echo $row_m['name'] ; ?>" /></td>
                </tr>
                <tr>
                    <td width="22%" bgcolor="#EEEEEE">ที่อยู่</td>
                    <td width="78%">
                        <textarea  class="form-control"name="address" cols="35" rows="5" id="address" required><?php echo $row_m['address'] ; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#EEEEEE">อีเมล</td>
                    <td><input class="form-control" name="email" type="email" id="email" required value="<?php echo $row_m['email'] ; ?>" /></td>
                </tr>
                <tr>
                    <td bgcolor="#EEEEEE">เบอร์ติดต่อ</td>
                    <td><input class="form-control" name="phone" type="text" id="phone" required value="<?php echo $row_m['phone'] ; ?>"/></td>
                </tr>
                <tr>
                    <td width="22%" bgcolor="#EEEEEE">เพิ่มเติม</td>
                    <td width="78%">
                        <textarea  class="form-control"name="note" cols="35" rows="5" id="address" ></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="right" bgcolor="#eee">
                    <input type="hidden" name="member_id" id="" value="<?php echo $member_id;  ?>">
                    <input type="hidden" name="total" id="" value="<?php echo $total;  ?>">
                        <input class="col-2 btn btn-flat btn-success" type="submit" name="Submit2" value="สั่งซื้อ" />
                    </td>
                </tr>
            </table>
        </form>

    </div>

</section>
<!-- /.content -->

<?php include('footer.php'); ?>