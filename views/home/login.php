<?php
// echo isset($_POST['uname']);
// echo var_dump($_POST['uname']);
if (isset($_POST['uname'])) {
    // $user = (new userService())->getUser($_POST['uname'], $_POST['passwd']);
    // echo var_dump($user);
    if ($_POST['uname'] == 'admin' && $_POST['passwd'] == 'admin') {
        include_once 'views/layout/admin_layout.php';
    }
    // else if (!empty($user->getUsername())) {
    //     include_once 'views/layout/client_layout.php';
    // }
} else {
    ?>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 bg-white rounded">
            <div class="container-fluid">
                <div class="my-logo">
                    <a class="navbar-brand" href="#">
                        <img src="assets/images/logo2.png" alt="" class="img-fluid">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?controller=home&action=login">Đăng nhập</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Nội dung cần tìm" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Tìm</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main class="container mt-5 mb-5">
        <div class="d-flex justify-content-center h-100">
            <div class="card" style="max-height:400px; margin-top: 100px">
                <div class="card-header">
                    <h3 style="color: dodgerblue;"><b>Sign In</b></h3>
                    <div class="d-flex justify-content-end social_icon">
                        <a href="https://www.facebook.com/" style="font-size:40px; margin-right:5px"> <i class="fab fa-facebook-square"></i></a>
                        <a href="https://accounts.google.com/v3/signin/identifier?dsh=S1510048080%3A1677514648916496&continue=https%3A%2F%2Fwww.google.com%2F&ec=GAZAmgQ&hl=vi&passive=true&flowName=GlifWebSignIn&flowEntry=ServiceLogin&ifkv=AWnogHf9SjZy8ocoseSzKm0ZuE-ThrMV5HsyALzbihXtpTL-_6H9qmFJQ_tRwGIHCz-aUJVW52XXQg" style="font-size:40px; margin-right:5px"><i class="fab fa-google-plus-square"></i></a>
                        <a href="https://twitter.com/i/flow/login" style="font-size:40px"><i class="fab fa-twitter-square"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="index.php?controller=home&action=login" onsubmit="return submit_login()" method="post">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="txtUser"><i class="fas fa-user"></i></span>
                            <input id="user1" type="text" class="form-control" placeholder="username" name="uname">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="txtPass"><i class="fas fa-key"></i></span>
                            <input id="pass1" type="text" class="form-control" placeholder="password" name="passwd">
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Remember Me</label>
                        </div>
                        <div class="form-group">
                            <input style="border:solid; background-color:lightgray;" type="submit" value="Login" class="btn float-end login_btn">
                        </div>
                    </form>

                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center ">
                        <p style="margin-right:10px">
                            Don't have an account?
                        </p>
                        <a href="#" class="text-warning text-decoration-none">Sign Up</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="text-warning text-decoration-none">Forgot your password?</a>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <script>
        function submit_login() {
            var user = document.getElementById('user1').value;
            var pass = document.getElementById('pass1').value;
            if (user.length == "" && pass.length == "") {
                alert('User Name and Password fields are empty')
                return false
            } else {
                if (user.length == '') {
                    alert('User Name is empty')
                    return false
                }
                if (pass.length == '') {
                    alert('Password field is empty')
                    return false
                }
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <?php
}
?>
