<?php 
session_start();
require 'dbconnection.php';

if(isset($_POST["submit"])){
    if(register($_POST) > 0 ){
        echo "<script>
        alert('User baru telah ditambahkan');
        document.location.href = 'login.php';
        </script>";
    }else{
        echo mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Page</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/reg-style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Silahkan Buat Akun</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="nama" id="nama" placeholder="Nama Lengkap" required/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Email" required/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password" required/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password2" id="password2" placeholder="Konfirmasi Password" required/>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" id="submit" class="form-submit">Sign Up</button>
                        </div>
                    </form>
                    <p class="loginhere">
                        Apakah anda sudah memiliki akun ? <a href="login.php" class="loginhere-link">Silahkan Login</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>