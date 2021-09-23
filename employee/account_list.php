<?php
error_reporting( error_reporting() & ~E_NOTICE );
include('condb.php');  
$query = " SELECT * FROM acount_list  
ORDER BY a_id DESC";
$result = mysqli_query($conn, $query);

$i=1;

	
?>

<table class="table table-bordered table-striped datatable  border" align="center">
    <thead>
        <tr class="info">
            <th scope="col">#</th>
            <th class="text-nowrap"scope="col">รายการ</th>
            <th class="text-nowrap"scope="col">จำนวน</th>
            <th class="text-nowrap"scope="col">ราคา</th>
            <th class="text-nowrap"scope="col">ว/ด/ป</th>
            <th scope="col">จัดการ</th>
        </tr>
    </thead>
    <?php while($row_p = mysqli_fetch_array($result)) { ?>
    <tr>
        <th scope="row"><?php echo $i++ ?></th>
        <td><?php echo $row_p['a_name']; ?></td>
        <td><?php echo $row_p['a_total']; ?></td>
        <td><?php echo number_format($row_p['a_price']); ?></td>
        <td><?php echo $row_p['a_date']; ?></td>
        <td>
            <div class="d-flex">
                <a href="account.php?act=edit&a_id=<?php echo $row_p['a_id']; ?>"
                    class="btn btn-warning btn-flat">แก้ไข</a><a
                    href="account.php?act=delete&a_id=<?php echo $row_p['a_id']; ?>"
                    class="btn btn-danger btn-flat">ลบ</a>
            </div>
        </td>
    </tr>
    <?php }  ?>
</table>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            $query = "
            SELECT 
            DATE_FORMAT(a_date, '%d-%M-%Y') AS a_date,
            SUM(a_price) AS total        
            FROM acount_list
            GROUP BY DATE_FORMAT(a_date, '%Y-%m-%d')
            ORDER BY DATE_FORMAT(a_date, '%Y-%m-%d') DESC
            ";
            $result = mysqli_query($conn, $query);
            $resultchart = mysqli_query($conn, $query);
            //for chart
            $a_date = array();
            $total = array();
            while($rs = mysqli_fetch_array($resultchart)){
            $a_date[] = "\"".$rs['a_date']."\"";
            $total[] = "\"".$rs['total']."\"";

            // echo '<hr>';
            // echo $rs['total'].',';
            

            }
            $a_date = implode(",", $a_date);
            $total = implode(",", $total);
            
            // echo $total;

            ?>
            <h3 align="center">รายงานบันทึกยอดขาย</h3>

            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js">
            </script>
            <hr>
            <p align="center">
                <!--devbanban.com-->
                <canvas id="myChart" width="800px" height="300px"></canvas>
                <script>
                var ctx = document.getElementById("myChart").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: [<?php echo $a_date;?>

                        ],
                        datasets: [{
                            label: 'รายงานรายได้ แยกตามวัน (บาท)',
                            data: [<?php echo $total;?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });
                </script>
            </p>
            <div class="col-sm-12">
                <h3>รายการ</h3>
                <table class=" table table-bordered" border="1" cellpadding="0" cellspacing="0" align="center">
                    <thead>
                        <tr class="table-primary">
                            <th width="20%">ว/ด/ป</th>
                            <th width="10%">
                                <center>รายได้</center>
                            </th>
                        </tr>
                    </thead>


                    <?php 
                $a_price=0;
					while($row2 = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php echo $row2['a_date'];?></td>
                        <td align="right"><?php echo number_format($row2['total'],2);?></td>
                    </tr>
                    <?php $a_price += $row2['total'];
                } ?>
                    <tr class=" table-danger">
                        <td align="center">รวม</td>
                        <td align="right"><b>
                                <?php echo number_format($a_price,2);?></b></td>
                        </td>
                    </tr>
                </table>
            </div>
            <?php mysqli_close($conn);?>
        </div>
    </div>
</div>