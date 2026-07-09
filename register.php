<?php
require "fungsi.php";

if(isset($_POST["register"])){
    if(register($_POST) > 0){
        echo "<script>
                alert('Registrasi berhasil');
                document.location.href='login.php';
              </script>";
    }else{
        echo "<script>
                alert('Registrasi gagal');
              </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>

    <style>
        body{
            background:#f4f6f9;
            font-family:Arial;
        }

        .container{
            width:400px;
            margin:80px auto;
            background:white;
            padding:30px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,.2);
        }

        h2{
            text-align:center;
            color:#2563eb;
        }

        input{
            width:100%;
            padding:10px;
            margin:10px 0;
            border:1px solid #ccc;
            border-radius:5px;
        }

        button{
            width:100%;
            padding:10px;
            background:#2563eb;
            color:white;
            border:none;
            border-radius:5px;
            cursor:pointer;
        }

        a{
            text-decoration:none;
        }
    </style>

</head>
<body>

<div class="container">

<h2>Register</h2>
<form method="post">
<input type="text" name="username" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>
<input type="password" name="password2" placeholder="Konfirmasi Password" required>
<button type="submit" name="register">Daftar</button>
</form>

<br>

<p align="center">
Sudah punya akun?
<a href="login.php">Login</a>
</p>

</div>

</body>
</html>