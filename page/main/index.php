<?php
include "./admin/connection/connection.php";
$select = mysqli_query($conn, "SELECT * FROM `baiviet` ORDER BY `ma_bviet` ASC");
mysqli_close($conn);
?>
<h3 class="text-center text-uppercase mb-3 text-primary">TOP bài hát yêu thích</h3>
<div class="row">
    <?php while($row = mysqli_fetch_array($select)){?>
    <div class="col-sm-3">
        <div class="card mb-2" style="width: 100%;">
            <img src="<?=$row['hinhanh']?>" class="card-img-top" alt="<?=$row['ten_bhat']?>">
            <div class="card-body">
                <h5 class="card-title text-center">
                    <a href="index.php?quanly=detail&id=<?=$row['ma_bviet']?>" class="text-decoration-none"><?=$row['ten_bhat']?></a>
                </h5>
            </div>
        </div>
    </div>
    <?php }?>
</div>