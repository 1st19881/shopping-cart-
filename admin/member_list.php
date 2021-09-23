<?php
error_reporting( error_reporting() & ~E_NOTICE );
include('condb.php');  
$query = "SELECT * FROM customer
ORDER BY member_id DESC";
$result = mysqli_query($conn, $query);

$i=1;

	
?>

<table class="table table-bordered table-striped datatable  border" align="center">
    <thead>
        <tr class="info">
            <th scope="col">#</th>
            <th class="text-nowrap"scope="col">รหัสสมาชิก</th>
            <th class="text-nowrap"scope="col">ชื่อผู้ใช้</th>
            <th class="text-nowrap"scope="col">อีเมล</th>
            <th class="text-nowrap"scope="col">เบอร์โทร</th>
            <th scope="col">ที่อยู่</th>
            <th scope="col">username</th>
            <th scope="col">password</th>
            <th class="text-nowrap"scope="col">ระดับผู้ใช้งาน</th>
            <th scope="col">จัดการ</th>
        </tr>
    </thead>
    <?php while($row_p = mysqli_fetch_array($result)) { ?>
    <tr>
        <th scope="row"><?php echo $i++ ?></th>
        <td><?php echo $row_p['member_id']; ?></td>
        <td><?php echo $row_p['name']; ?></td>
        <td><?php echo $row_p['email']; ?></td>
        <td><?php echo $row_p['phone']; ?></td>
        <td><?php echo $row_p['address']; ?></td>
        <td><?php echo $row_p['username']; ?></td>
        <td><?php echo $row_p['password']; ?></td>
        <td><?php echo $row_p['level']; ?></td>
        <td>
            <div class="d-flex">
                <a href="member.php?act=edit&member_id=<?php echo $row_p['member_id']; ?>"
                    class="btn btn-warning btn-flat">แก้ไข</a><a
                    href="member.php?act=delete&member_id=<?php echo $row_p['member_id']; ?>"
                    class="btn btn-danger btn-flat" onclick="return confirm('ต้องการลบข้อมุลสมาชิก')">ลบ</a>
            </div>
        </td>
    </tr>
    <?php }  ?>
</table>