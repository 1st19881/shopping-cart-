<meta charset="UTF-8">
<?php
include('condb.php'); 

	// echo '<pre>';
	// print_r($_POST);
	// echo '</pre>';
	// exit;

    $p_id = $_GET['p_id'];

	$sql3 = " DELETE FROM tbl_product WHERE p_id='$p_id' ";
	
	
	$result = mysqli_query($conn,$sql3) or die ("Error in query: $sql3 " . mysqli_error());
	
	mysqli_close($conn);

	
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
				text: "ลบมูลสำเร็จ",
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
echo "alert('ลบข้อมูลไม่สำเร็จ');";
echo "window.location = 'product.php' ";
echo "</script>";
}
?>