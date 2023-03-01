<main class="container-fluid mt-3">
    <?php
    if(isset($_GET['quanly'])){
        $quanly = $_GET['quanly'];
    }else{
        $quanly = '';
    }

    if($quanly == 'detail'){
        include "./page/main/detail.php";
    }
    else{
        include "./page/main/index.php";
    }
    ?>
</main>