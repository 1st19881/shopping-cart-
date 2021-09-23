<?php
error_reporting( error_reporting() & ~E_NOTICE );
include('condb.php');  
$query = "SELECT * FROM employees
ORDER BY employee_id DESC";
$result = mysqli_query($conn, $query);

$i=1;

	
?>

<table class="table table-bordered table-striped datatable  table-responsive" align="center">
    <thead>
        <tr class="info">
            <th scope="col">#</th>
            <th class="text-nowrap"scope="col">รหัสemployee</th>
            <th class="text-nowrap"scope="col">ชื่อ</th>
            <th class="text-nowrap"scope="col">ที่อยู่</th>
            <th class="text-nowrap"scope="col">เบอร์โทร</th>
            <th class="text-nowrap"scope="col">เพศ</th>
            <th class="text-nowrap"scope="col">อายุ</th>
            <th class="text-nowrap"scope="col">username</th>
            <th class="text-nowrap"scope="col">password</th>
            <th class="text-nowrap"scope="col">ระดับ</th>
            <th scope="col">จัดการ</th>
        </tr>
    </thead>
    <?php while($row_p = mysqli_fetch_array($result)) { ?>
    <tr>
        <th scope="row"><?php echo $i++ ?></th>
        <td><?php echo $row_p['employee_id']; ?></td>
        <td><?php echo $row_p['employee_name']; ?></td>
        <td><?php echo $row_p['employee_address']; ?></td>
        <td><?php echo $row_p['employee_phone']; ?></td>
        <td><?php echo $row_p['employee_gender']; ?></td>
        <td><?php echo $row_p['employee_age']; ?></td>
        <td><?php echo $row_p['employee_email']; ?></td>
        <td><?php echo $row_p['employee_password']; ?></td>
        <td><?php echo $row_p['level']; ?></td>
        <td>
            <div class="d-flex">
                <a href="employee.php?act=edit&employee_id=<?php echo $row_p['employee_id']; ?>"
                    class="btn btn-warning btn-flat">แก้ไข</a><a
                    href="employee.php?act=delete&employee_id=<?php echo $row_p['employee_id']; ?>"
                    class="btn btn-danger btn-flat" onclick="return confirm('ต้องการลบข้อมุลสมาชิก')">ลบ</a>
            </div>
        </td>
    </tr>
    <?php }  ?>
</table>