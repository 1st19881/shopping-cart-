<meta charset="UTF-8">
<?php
include('condb.php'); 

	// echo '<pre>';
	// print_r($_POST);
	// echo '</pre>';
	// exit;

    $a_id = $_GET['a_id'];

	$sql3 = " DELETE FROM acount_list WHERE a_id='$a_id' ";
	
	
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
				window.location = "account.php";
			});
		}, 100);
	</script>
	';
}
else{
echo "<script type='text/javascript'>";
echo "alert('ลบข้อมูลไม่สำเร็จ');";
echo "window.location = 'account.php' ";
echo "</script>";
}
?>