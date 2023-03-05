<main class="container mt-5 mb-5">
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <div class="row">
        <div class="col-sm">
            <a href="addauthor.php" class="btn btn-success">Thêm mới</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">usename</th>
                        <th scope="col">pass</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < sizeof($arrUser); $i++) {

                        ?>
                        <tr>
                            <td scope='row'>
                                <?php echo $arrUser["$i"]->getId(); ?>
                            </td>
                            <td scope='row'>
                                <?php echo $arrUser["$i"]->getUsername() ?>
                            </td>
                            <td scope='row'>
                                <?php echo $arrUser["$i"]->getPass() ?>
                            </td>
                            <td>
                                <a href='editauthor.php?id=<?php echo $arrUser["$i"]->getId() ?>' <i class='fa-solid fa-pen-to-square'></i></a>
                            </td>
                            <td>
                                <a href='?action=del&id=<?php echo $arrUser["$i"]->getId() ?>'><i class='fa-solid fa-trash'></i></a>
                            </td>
                        </tr>

                    <?php }
                    // }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</main>
