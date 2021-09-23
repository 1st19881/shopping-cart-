<meta charset="UTF-8">
<?php
include('condb.php'); 
	$a_name = $_POST['a_name'];
	$a_total = $_POST['a_total'];
	$a_price = $_POST['a_price'];
	$a_date	 = $_POST['a_date'];
	// echo '<pre>';
	// print_r($_POST);
	// echo '</pre>';
	// exit;

	
		$sql = "INSERT INTO acount_list
		(
            a_name,a_total,a_price,a_date)VALUES('$a_name','$a_total','$a_price','$a_date')";
		
		$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
	
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
				text: "เพิ่มข้อมูลสำเร็จ",
				type: "success"
			}, function() {
				window.location = "account.php";
			});
		}, 100);
	</script>
	';
}
else{
echo "<script type='text/javascript'>";
echo "alert('เพิ่มข้อมูลไม่สำเร็จ');";
echo "window.location = 'account.php' ";
echo "</script>";
}
?>