<?php 

include('condb.php');

	$admin_id = $_POST["admin_id"];
	$username = $_POST["username"];
	$admin_email = $_POST["admin_email"];
    $admin_password = $_POST["admin_password"];
	$level = $_POST['level'];


	$sql = "UPDATE admin SET 
	username='$username',
	admin_email='$admin_email',
	admin_password='$admin_password',
	level='$level'
	WHERE admin_id=$admin_id" ;

	$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error($conn). "<br>$sql");
	mysqli_close($conn);
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('แก้ไขข้อมูลเรียบร้อย');";
	echo "window.location = 'admin.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'admin.php'; ";
	echo "</script>";
}

?>