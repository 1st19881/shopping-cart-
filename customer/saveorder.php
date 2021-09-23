<?php
	session_start();
    include("condb.php");  
?>

<?php
	$name = $_POST["name"];
	$address = $_POST["address"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$member_id =$_POST['member_id'];
	$total = $_POST["total"];
	$dttm = Date("Y-m-d G:i:s");
	$note = $_POST["note"];
	//บันทึกการสั่งซื้อลงใน order_detail

	// echo "<pre>";
	// print_r($_SESSION);
	// echo "</pre>";

	// echo "<hr>";

	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";
	// exit;

	mysqli_query($conn, "BEGIN"); 
	$sql1	= "INSERT INTO order_head VALUES(null,'$member_id','$dttm','$name', '$address', '$email', '$phone', '$total',1,'','0000-00-00','',1,'$note')";
	$query1	= mysqli_query($conn, $sql1)or die ("Error in query: $sql1 " . mysqli_error());
  
	//ฟังก์ชั่น MAX() จะคืนค่าที่มากที่สุดในคอลัมน์ที่ระบุ ออกมา หรือจะพูดง่ายๆก็ว่า ใช้สำหรับหาค่าที่มากที่สุด นั่นเอง.

	$sql2 = "SELECT MAX(o_id) AS o_id FROM order_head WHERE member_id='$member_id' AND o_dttm='$dttm' ";
	$query2	= mysqli_query($conn, $sql2)or die ("Error in query: $sql2 " . mysqli_error());
	$row = mysqli_fetch_array($query2);
	$o_id = $row["o_id"];

	// echo $sql1;
	// echo "<br>";
	// echo $sql2;
	// echo "<br>";
	// echo $o_id;
	// exit;
//PHP foreach() เป็นคำสั่งเพื่อนำข้อมูลออกมาจากตัวแปลที่เป็นประเภท array โดยสามารถเรียกค่าได้ทั้ง $key และ $value ของ array
foreach($_SESSION['cart'] as $p_id=>$qty)
{
	$sql3	= "SELECT * FROM tbl_product WHERE  p_id=$p_id";
	$query3	= mysqli_query($conn, $sql3);
	$row3	= mysqli_fetch_array($query3);
	$pricetotal	= $row3['price_product']*$qty;
	$count=mysqli_num_rows($query3);
	
	$sql4	= "INSERT INTO order_detail VALUES(null, '$o_id', '$p_id', '$qty', '$pricetotal')";
	$query4	= mysqli_query($conn, $sql4);


	// echo $sql4;
	// exit;


	//ตัดสต๊อก
	
	for($i=0; $i<$count; $i++){
		$instock =  $row3['product_qty']; //จำนวนสินค้าที่มีอยู่
		
		$updatestock= $instock - $qty;  //จำนวนสินค้าที่ซื้อ - ลบด้วยสินค้าที่มีอยู่ในสต๊อก
		
		$sql9 = "UPDATE tbl_product SET  
		product_qty=$updatestock
		WHERE  p_id=$p_id ";
		$query9 = mysqli_query($conn, $sql9);  
		}
		
	/*   stock  */

}

	if($query1 && $query4){
		mysqli_query($conn, "COMMIT");
		$msg = "บันทึกข้อมูลเรียบร้อยแล้ว ";
		foreach($_SESSION['cart'] AS $p_id)
		{	
			//unset($_SESSION['cart'][$p_id]);
			unset($_SESSION['cart']);
		}
	}
	else{
		mysqli_query($conn, "ROLLBACK");  
		$msg = "บันทึกข้อมูลไม่สำเร็จ  ";	
	}
?>
<script type="text/javascript">
alert("<?php echo $msg;?>");
window.location = 'order_detail.php?o_id=<?php echo $o_id; ?>';
</script>