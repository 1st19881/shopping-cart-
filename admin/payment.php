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
            <h4>รอชำระเงิน</h4><br>
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