<?php

include('condb.php');  
$query = "SELECT p.*,t.* FROM tbl_product as p 
INNER JOIN tbl_type  as t ON p.type_id=t.type_id 
ORDER BY p.p_id DESC";
$result = mysqli_query($conn, $query);



	
?>
<div class="row">
    <?php while($row_prd = mysqli_fetch_array($result)){?>
    <div class="col-md-3">
        <div class="card ">
            <a href=""> <img src="../img/<?php echo $row_prd['img']; ?>" class="card-img-top" alt=""></a>
            <div class="card-body">
                <h5><?php echo $row_prd['product_name']; ?></h5>
                <p>ประเภทขนม : <?php echo $row_prd["type_name"];?></p>
                <p>จำนวน :<?php echo $row_prd["product_qty"];?></p>
                <p>ราคา : <?php echo $row_prd["price_product"];?></p>
                <a class="btn btn-primary btn-flat"
                    href="detail.php?p_id=<?php echo $row_prd['p_id']; ?>">ดูรายละเอียด</a>
                <?php if($row_prd ['product_qty'] > 0){ ?>
                <a class="btn btn-success btn-flat"
                    href="cart.php?p_id=<?php echo $row_prd['p_id']; ?>&act=add">เพิ่มลงตะกร้า</a>
                <?php  }  else { ?>
                <button class="btn btn-danger btn-flat disabled">สินค้าหมด !!</button>
                <?php  } ?>
            </div>
        </div>
    </div>
    <?php } ?>
</div>