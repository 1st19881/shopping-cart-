<?php 
include('condb.php');

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";;
// exit();

$username = $_POST["username"];
$admin_email = $_POST["admin_email"];
$admin_password = $_POST["admin_password"];
$level = $_POST['level'];


    $sql = "INSERT INTO admin
    (
    username,	
    admin_email,
    admin_password,
    level
    )
    VALUES
    (
    '$username',
    '$admin_email',
    '$admin_password',
    '$level'
    )";
    $result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error($conn). "<br>$sql");

	//exit();
	//mysqli_close($conn);

	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('เพิ่มข้อมูลเรียบร้อย');";
	echo "window.location = 'admin.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'admin.php'; ";
	echo "</script>";
}
?>