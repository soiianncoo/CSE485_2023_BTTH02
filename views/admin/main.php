<main class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm-3">
            <div class="card mb-2" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <a href="index.php?controller=admin&action=user" class="text-decoration-none">Người dùng</a>
                    </h5>

                    <h5 class="h1 text-center">
                        <?php
                        echo sizeof($arrUser);
                        ?>
                    </h5>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card mb-2" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <a href="index.php?controller=admin&action=category" class="text-decoration-none">Thể loại</a>
                    </h5>

                    <h5 class="h1 text-center">
                        <?php
                        echo sizeof($arrCategory);
                        ?>
                    </h5>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card mb-2" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <a href="index.php?controller=admin&action=author" class="text-decoration-none">Tác giả</a>
                    </h5>

                    <h5 class="h1 text-center">
                        <?php
                        echo sizeof($arrAuthor);
                        ?>
                    </h5>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card mb-2" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <a href="index.php?controller=admin&action=article" class="text-decoration-none">Bài viết</a>
                    </h5>

                    <h5 class="h1 text-center">
                        <?php
                        echo sizeof($arrArticle);
                        ?>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</main>
