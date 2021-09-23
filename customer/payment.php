<?php 
$menu = "index"

?>
<title>หน้าแรก</title>

<?php  

include('condb.php');

$o_id = $_GET['o_id'];

 $sql= "SELECT d.*,p.*,h.*
 FROM order_detail as d
 INNER JOIN tbl_product as p ON d.p_id=p.p_id
 INNER JOIN order_head as h ON d.o_id=h.o_id
 WHERE d.o_id=$o_id";
 $rsdetail	= mysqli_query($conn, $sql);
 $rowdetail	= mysqli_fetch_array($rsdetail);
 $total=0;
 $i=1;
?>

<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="container">
        <div class="text-center">
            <h4>แจ้งชำระเงิน</h4><br>
        </div>
        <h5>
            Order ID : <?php echo $rowdetail['o_id']; ?> <br>
            ที่อยู่ : <?php echo $rowdetail['o_addr']; ?> <br>
            เบอร์โทรติดต่อ : <?php echo $rowdetail['o_phone']; ?> , Email : <?php echo $rowdetail['o_email']; ?> <br>
            วันที่สั่งซื้อ : <?php echo $rowdetail['o_dttm']; ?><br>
            สถานะ :
            <?php $st = $rowdetail['o_status']; 
            if($st==1){
                echo "<font color='blue'> รอชำระเงิน </font>";
            }
            elseif ($st==2) {
            echo "<font color='green'> ชำระเงินแล้ว </font>";
            }
            elseif ($st==3) {
            echo "<font color='red'> ยกเลิก </font>";
            }
        ?>
        </h5>
        <table width="100% border=" 0" align="center" class="table table-bordered  " style="background-color:#F7F7ED">
            <tr>
                <td bgcolor="#F7F7ED">#</td>
                <td bgcolor="#F7F7ED">ภาพ</td>
                <td bgcolor="#F7F7ED">สินค้า</td>
                <td align="center" bgcolor="#F7F7ED">ราคา</td>
                <td align="center" bgcolor="#F7F7ED">จำนวน</td>
                <td align="center" bgcolor="#F7F7ED">รวม/บาท</td>
            </tr>
            <?php foreach($rsdetail as $row ){
        $total += $row['d_subtotal']; 	       //ราคารวมทั้งออร์เดอ
        echo "<tr>";
        echo "<td width='5%'>" . $i++ . "</td>";
        echo "<td width='20%'> <img src='../img/" . $row['img'] . "' width='50%' alt='img'>" .'</td>' ;
        echo "<td width='35%'>" . $row["product_name"] . "</td>";
        echo "<td width='10%'align='right'>" .number_format($row['price_product'],2) ."</td>";
        echo "<td width='10%'align='right'>" .number_format($row['d_qty'],2) ."</td>";
        echo "<td width='10%'align='right'>" .number_format($row['d_subtotal'],2) ."</td>";

        echo "</tr>";
    }
        echo "<tr>";
        echo "<td  align='right' colspan='5' bgcolor='#F7DD83'><b>รวม</b></td>";
        echo "<td align='right' bgcolor='#F7DD83'>"."<b>".number_format($total,2)."</b>"."</td>";
        echo "</tr>";
    ?>
        </table>
        <br>
        <h4>แสดงรายละเอียดการชำระเงิน</h4>
        <table class="table table-bordered">
            <thead class="bg-primary">
                <tr>
                    <th width="10%">ธนาคาร</th>
                    <th>ชื่อธนาคาร</th>
                    <th>เลขบัญชี</th>
                    <th>ชื่อเจ้าของบัญชี</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="../img/k.jpg" width="100%" alt=""></td>
                    <td>กรุงไทย</td>
                    <td>4091876777</td>
                    <td>นางสาว กะทิ </td>
                </tr>
            </tbody>
        </table>
        <br>
        <form action="payment_db.php" method="POST" enctype="multipart/form-data">
            <div class="form-row">
                <div class="col-md-6">
                    <label for="">วันที่ชำระเงิน</label>
                    <input type="date" name="o_slip_date" class="form-control mb-3">
                </div>
                <div class="col-md-6">
                    <label for="">จำนวนที่ต้องชำระ</label>
                    <input type="number" name="o_slip_total" class="form-control mb-3" any required min="0" readonly value="<?php echo $total;  ?>">
                </div>
                <div class="col-md-6 mb-2">
                    <label for="">อัพโหลดสลิป</label>
                    <input type="file" name="o_slip" id="" class="form-control mb-3" onchange="readURL(this);">
                </div>
            </div>
           <center> <img src="#" alt="" id="blah" width="150px"></center>
            <br>
            <div class="form-group mt-3 d-flex justify-content-center">
                <input type="hidden" name="o_id" id="" value="<?php echo $o_id;  ?>">
                <button type="submit" class="btn btn-flat btn-success col-3">
                    แจ้งชำระเงิน
                </button>
                <a href="order.php" class="btn btn-flat btn-danger col-3">ยกเลิก</a>
            </div>
        </form>
    </div>
</section>
<!-- /.content -->
<?php include('footer.php'); ?>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
</script>

<script>
$(function() {
    $(".datatable").DataTable();
    // $('#example2').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    // http://fordev22.com/
    // });
});
</script>