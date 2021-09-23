<div class="container">
    <form action="" method="get">
        <h5 ><b>เลือกช่วงเวลาดูยอดขาย</b></h5><br>
        <div class="form-row">
            <div class="col-sm-5">
            <label for="">เริ่มต้น</label>
                <input type="date" name="ds" class="form-control" required>
            </div>
            <div class="col-sm-5">
            <label for="">สิ้นสุด</label>
                <input type="date" name="de" class="form-control" required>
            </div>
            <div class="col-sm-2">
            <label for="">ค้นหา</label>
                <input type="submit" name="act" value="ค้นหา" class="form-control btn tbn-sm btn-success btn-flat" >
            </div>
        </div>
        <br>
    </form>
    <div class="row">
        <div class="col-md-12">
            <?php
            error_reporting( error_reporting() & ~E_NOTICE );

            $ds = $_GET['ds'];
            $de = $_GET['de'];

            $query = "SELECT DATE_FORMAT(o_dttm, '%d-%M-%Y') AS o_dttm,SUM(o_total) AS total        
            FROM order_head WHERE o_status IN(3)
            AND o_dttm BETWEEN '$ds 00:00:00.000000' 
            AND '$de 23:59:59.000000'
            GROUP BY DATE_FORMAT(o_dttm, '%Y-%m-%d')
            ORDER BY DATE_FORMAT(o_dttm, '%Y-%m-%d') DESC
            ";
            $result = mysqli_query($conn, $query);
            $resultchart = mysqli_query($conn, $query);
            //for chart
            $o_dttm = array();
            $total = array();
            while($rs = mysqli_fetch_array($resultchart)){
            $o_dttm[] = "\"".$rs['o_dttm']."\"";
            $total[] = "\"".$rs['total']."\"";

            // echo '<hr>';
            // echo $rs['total'].',';
            

            }
            $o_dttm = implode(",", $o_dttm);
            $total = implode(",", $total);
            
            // echo $total;

            ?>
            <h3 align="center">รายงานยอดขายเรียกดูตามวันที่</h3>
            วันที่เริ่มต้น : <font style="color:blue;"><b><?php echo date('d/m/Y',strtotime($_GET['ds']));?></b></font>   ถึงวันที่   : <font style="color:blue;"><b><?php echo date('d/m/Y',strtotime($_GET['de']));?></b></font>
            
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
                        labels: [<?php echo $o_dttm;?>

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
                $o_total=0;
					while($row2 = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php echo $row2['o_dttm'];?></td>
                        <td align="right"><?php echo number_format($row2['total'],2);?></td>
                    </tr>
                    <?php $o_total += $row2['total'];
                } ?>
                    <tr class=" table-danger">
                        <td align="center">รวม</td>
                        <td align="right"><b>
                                <?php echo number_format($o_total,2);?></b></td>
                        </td>
                    </tr>
                </table>
            </div>
            <?php mysqli_close($conn);?>
        </div>
    </div>
</div>