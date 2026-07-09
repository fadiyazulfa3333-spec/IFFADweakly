<?php
session_start();
require "fungsi.php";

if(isset($_POST["login"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username'");

    if(mysqli_num_rows($result)==1){

        $row = mysqli_fetch_assoc($result);

        if(password_verify($password,$row["password"])){

            $_SESSION["login"]=true;

            header("Location:data mahasiswa.php");
            exit;

        }

    }

    $error=true;

}
?>

<!DOCTYPE html>
<html>
<head>

<title>Login</title>

<style>

body{
background:#f4f6f9;
font-family:Arial;
}

.container{
width:400px;
margin:100px auto;
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

.error{
color:red;
text-align:center;
}

</style>

</head>

<body>

<div class="container">

<h2>Login</h2>

<?php if(isset($error)): ?>
<p class="error">
Username atau Password salah!
</p>
<?php endif; ?>

<form method="post">

<input type="text" name="username" placeholder="Username" required>

<input type="password" name="password" placeholder="Password" required>

<button type="submit" name="login">
Masuk
</button>

</form>

<br>

<p align="center">
Belum punya akun?
<a href="register.php">Register</a>
</p>

</div>

</body>
</html>