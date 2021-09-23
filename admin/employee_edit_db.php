<?php 

include('condb.php');

	$employee_id = $_POST["employee_id"];
	$employee_name = $_POST["employee_name"];
	$employee_address = $_POST["employee_address"];
    $employee_phone = $_POST["employee_phone"];
	$employee_gender = $_POST['employee_gender'];
    $employee_age = $_POST['employee_age'];
    $employee_email = $_POST['employee_email'];
    $employee_password = $_POST['employee_password'];


	$sql = "UPDATE employees SET 
	employee_name='$employee_name',
	employee_address='$employee_address',
	employee_phone='$employee_phone',
	employee_age='$employee_age',
    employee_gender='$employee_gender',
    employee_email='$employee_email',
    employee_password='$employee_password'
	WHERE employee_id=$employee_id" ;

	$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error($conn). "<br>$sql");
	mysqli_close($conn);
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('แก้ไขข้อมูลเรียบร้อย');";
	echo "window.location = 'employee.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'employee.php'; ";
	echo "</script>";
}

?>