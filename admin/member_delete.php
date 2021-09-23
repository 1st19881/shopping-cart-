<?php 

include('condb.php');

	$member_id = $_GET["member_id"];


	$sql = "DELETE FROM customer
	WHERE member_id='$member_id'" ;

	$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error($conn). "<br>$sql");
	mysqli_close($conn);
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('ลบข้อมูลเรียบร้อย');";
	echo "window.location = 'member.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'member.php'; ";
	echo "</script>";
}

?>