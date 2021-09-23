<?php 
include('condb.php');

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";;
// exit();



$employee_name = $_POST["employee_name"];
$employee_address = $_POST["employee_address"];
$employee_phone = $_POST["employee_phone"];
$employee_gender = $_POST['employee_gender'];
$employee_age = $_POST['employee_age'];
$employee_email = $_POST['employee_email'];
$employee_password = $_POST['employee_password'];
$level = $_POST['level'];


    $sql = "INSERT INTO employees
    (
    employee_name,	
    employee_address,
    employee_phone,
    employee_gender,
    employee_age,
    employee_email,
    employee_password,
    level
    )
    VALUES
    (
    '$employee_name',
    '$employee_address',
    '$employee_phone',
    '$employee_gender',
    '$employee_age',
    '$employee_email',
    '$employee_password',
    '$level'
    )";
    $result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error($conn). "<br>$sql");

	//exit();
	//mysqli_close($conn);

	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('เพิ่มข้อมูลเรียบร้อย');";
	echo "window.location = 'employee.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'employee.php'; ";
	echo "</script>";
}
?>