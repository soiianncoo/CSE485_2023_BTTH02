<?php 
include "./admin/connection/connection.php";
$select = mysqli_query($conn, "SELECT * FROM baiviet, tacgia, theloai WHERE baiviet.ma_tloai = theloai.ma_tloai AND baiviet.ma_tgia = tacgia.ma_tgia AND baiviet.ma_bviet =".$_GET['id']);
$row = mysqli_fetch_array($select);
?>
<div class="row mb-5">
    <div class="col-sm-4">
        <img src="<?=$row['hinhanh']?>" class="img-fluid" alt="<?=$row['ten_bhat']?>">
    </div>
    <div class="col-sm-8">
        <h5 class="card-title mb-2">
            <a href="" class="text-decoration-none"><?=$row['ten_bhat']?></a>
        </h5>
        <p class="card-text"><span class=" fw-bold">Bài hát: </span><?=$row['ten_bhat']?></p>
        <p class="card-text"><span class=" fw-bold">Thể loại: </span><?=$row['ten_tloai']?></p>
        <p class="card-text"><span class=" fw-bold">Tóm tắt: </span><?=$row['tomtat']?></p>
        <p class="card-text"><span class=" fw-bold">Nội dung: </span><?=$row['noidung']?></p>
        <p class="card-text"><span class=" fw-bold">Tác giả: </span><?=$row['ten_tgia']?></p>

    </div>          
</div>