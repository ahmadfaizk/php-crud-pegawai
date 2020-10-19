<?php session_start(); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light rounded mb-4 mt-4">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="index.php">SIM Perusahaan</a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="list-pegawai.php">Pegawai</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="list-departemen.php">Departemen</a>
            </li>
            <?php
            $isLogin = isset($_SESSION['username']);
            if ($isLogin) {
                echo    '<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="auth-dropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'
                                . $_SESSION['username'] .
                            '</a>
                            <div class="dropdown-menu" aria-labelledby="auth-dropdown">
                                <a class="dropdown-item" href="logout.php">Logout</a>
                            </div>
                        </li>';
            } else {
                echo '<li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>';
            }
            ?>
        </ul>
    </div>
</nav>