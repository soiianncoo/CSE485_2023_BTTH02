<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
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

            <div class="card">

                <div class="card-header">

                    <h3>Sign In</h3>

                    <div class="d-flex justify-content-end social_icon">

                        <a href="https://www.facebook.com/" style="font-size:40px; margin-right:5px"> <i class="fab fa-facebook-square"></i></a>

                        <a href="https://accounts.google.com/v3/signin/identifier?dsh=S1510048080%3A1677514648916496&continue=https%3A%2F%2Fwww.google.com%2F&ec=GAZAmgQ&hl=vi&passive=true&flowName=GlifWebSignIn&flowEntry=ServiceLogin&ifkv=AWnogHf9SjZy8ocoseSzKm0ZuE-ThrMV5HsyALzbihXtpTL-_6H9qmFJQ_tRwGIHCz-aUJVW52XXQg" style="font-size:40px; margin-right:5px"><i class="fab fa-google-plus-square"></i></a>

                        <a href="https://twitter.com/i/flow/login" style="font-size:40px"><i class="fab fa-twitter-square"></i></a>

                    </div>

                </div>

                <div class="card-body">

                    <form action="login.php" onsubmit="return submit_login()" method="post">

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
    <footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-2" style="height:80px">
        <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
    </footer>
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
</body>

</html>
