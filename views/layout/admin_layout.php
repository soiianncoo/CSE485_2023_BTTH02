<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style_login.css">

</head>

<body>
    <?php
    require_once 'views/admin/header.php';
    // switch ($_GET['action']) {
    // case 'index':
    //     // code...
    //     include_once 'views/admin/main.php';
    //     break;
    // case 'user':
    //     // code...
    //     include_once 'views/admin/user.php';
    //     break;
    // case 'category':
    //     // code...
    //     include_once 'views/admin/category.php';
    //     break;
    // case 'author':
    //     // code...
    //     include_once 'views/admin/author.php';
    //
    //     break;
    // case 'article':
    //     // code...
    //     include_once 'views/admin/article.php';
    //     break;
    // }
    // require_once 'services/articleService.php';
    // require_once 'services/categoryService.php';
    // require_once 'services/authorService.php';
    // require_once 'services/userService.php';
    if ($_GET['action'] == 'login') {
        include_once 'views/admin/main.php';
    } else {

        include_once 'views/admin/' . $_GET['action'] . '.php';
    }
    require_once 'views/blocks/footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
