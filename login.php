<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serifikati Web</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <?php
        include('header.php');
        if ($isLogin) {
            header('Location: list-pegawai.php');
        }
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            if ($username == 'ahmad' && $password == 'ahmad') {
                $_SESSION['username'] = $username;
                header('Location: list-pegawai.php');
            }
        }
    ?>
        <div class="card mr-auto ml-auto" style="width: 24rem;">
            <form action="" method="post">
                <div class="card-header text-center">
                    <h5 class="card-title">Login</h5>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <input type="submit" name="submit" value="login" class="btn btn-primary" text="Login">
                </div>
            </form>
        </div>
    </div>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>