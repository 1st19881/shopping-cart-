<?php 

include('condb.php');

	$member_id = $_POST["member_id"];
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$address = $_POST["address"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$level = $_POST['level'];


	$sql = "UPDATE customer SET 
	name='$name',
	email='$email',
	phone='$phone',
	address='$address',
	username='$username',
	password='$password',
	level='$level'
	WHERE member_id=$member_id" ;

	$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error($conn). "<br>$sql");
	mysqli_close($conn);
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('แก้ไขข้อมูลเรียบร้อย');";
	echo "window.location = 'member.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'member.php'; ";
	echo "</script>";
}

?>