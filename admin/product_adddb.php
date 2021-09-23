<meta charset="UTF-8">
<?php
include('condb.php'); 

date_default_timezone_set('Asia/Bangkok');
	$date1 = date("Ymd_His");
	$numrand = (mt_rand());


	$product_name = $_POST['product_name'];
	$type_id = $_POST['type_id'];
	$product_detail = $_POST['product_detail'];
	$price_product	 = $_POST['price_product'];
	$product_qty = $_POST['product_qty'];
	$note = $_POST['note'];
//img
	$img =(isset($_POST['img']) ? $_POST['img'] :'');
	$upload=$_FILES['img']['name'];
	if($upload !='') { 

		$path="../img/";
		$type = strrchr($_FILES['img']['name'],".");
		$newname =$numrand.$date1.$type;
		$path_copy=$path.$newname;
		$path_link="../img/".$newname;
		move_uploaded_file($_FILES['img']['tmp_name'],$path_copy);  
	}else{
		$newname='';
	}


	// echo '<pre>';
	// print_r($_POST);
	// echo '</pre>';
	// exit;

	// เพิ่มไฟล์เข้าไปในตาราง uploadfile
	
		$sql = "INSERT INTO tbl_product
		(
            product_name,type_id,product_detail,price_product,product_qty,note,img)VALUES('$product_name','$type_id','$product_detail','$price_product','$product_qty','$note','$newname')";
		
		$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
	
	mysqli_close($conn);
	// javascript แสดงการ upload file
	
	echo '
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
	';		
	if($result){
		echo '
		<script>
		   setTimeout(function() {
			swal({
				title: "สำเร็จ",
				text: "เพิ่มข้อมูลสำเร็จ",
				type: "success"
			}, function() {
				window.location = "product.php";
			});
		}, 100);
	</script>
	';
}
else{
echo "<script type='text/javascript'>";
echo "alert('เพิ่มข้อมูลไม่สำเร็จ');";
echo "window.location = 'product.php' ";
echo "</script>";
}
?>