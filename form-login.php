<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&display=swap">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image"
                                    style="background: url('assets/img/yomnan/1.jpg') center / cover no-repeat;">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Welcome Back!</h4>
                                    </div>

                                    <!-- แสดงข้อความแจ้งเตือนข้อผิดพลาด -->
                                    <?php
                                    if (isset($_GET['error'])) {
                                        $error = htmlspecialchars($_GET['error']);
                                        if ($error == 'invalid_login') {
                                            echo '<div class="alert alert-danger" role="alert">Invalid email or password.</div>';
                                        } elseif ($error == 'account_locked') {
                                            echo '<div class="alert alert-warning" role="alert">Your account is temporarily locked. Please try again later.</div>';
                                        }
                                    }
                                    ?>

                                    <!-- ฟอร์มเข้าสู่ระบบ -->
                                    <form action="process-login.php" method="POST" class="user">
                                        <!-- อีเมล -->
                                        <div class="mb-3">
                                            <input class="form-control form-control-user" type="email" id="email"
                                                aria-describedby="emailHelp" placeholder="Enter Email Address..."
                                                name="email" required>
                                        </div>
                                        <!-- รหัสผ่าน -->
                                        <div class="mb-3">
                                            <input class="form-control form-control-user" type="password" id="password"
                                                placeholder="Password" name="password" required>
                                        </div>
                                        <!-- ปุ่มเข้าสู่ระบบ -->
                                        <button class="btn btn-primary d-block btn-user w-100" type="submit">Login</button>
                                        <hr>
                                    </form>
                                    <!-- ลิงก์เพิ่มเติม -->
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="form-register.php">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>
