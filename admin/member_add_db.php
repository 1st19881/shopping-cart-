<?php 
include('condb.php');

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";;
// exit();

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$username = $_POST["username"];
$password = $_POST["password"];
$level = $_POST['level'];


    $sql = "INSERT INTO customer
    (
    name,	
    email,
    phone,
    address,
    username,
    password,
    level
    )
    VALUES
    (
    '$name',
    '$email',
    '$phone',
    '$address',
    '$username',
    '$username',
    '$level'
    )";
    $result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error($conn). "<br>$sql");

	//exit();
	//mysqli_close($conn);

	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('เพิ่มข้อมูลเรียบร้อย');";
	echo "window.location = 'member.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'member.php'; ";
	echo "</script>";
}
?>