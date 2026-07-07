<?php
require "fungsi.php";

if (isset($_POST["kirim"])) {
    if (tambahdata($_POST) > 0) {
        echo "<script>
                alert('Data berhasil ditambahkan!');
                window.location.href='data mahasiswa.php';
              </script>";
    } else {
        echo "<script>
                alert('Data gagal ditambahkan!');
                window.location.href='inputdata.php';
              </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mahasiswa</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }
        body{
            background:#f4f6f9;
        }
        .header{
            background:#2563eb;
            color:white;
            text-align:center;
            padding:25px;
        }
        .container{
            width:500px;
            margin:40px auto;
            background:white;
            padding:30px;
            border-radius:15px;
            box-shadow:0 4px 10px rgba(0,0,0,0.1);
        }
        h2{
            text-align:center;
            margin-bottom:25px;
        }
        label{
            font-weight:bold;
        }
        input{
            width:100%;
            padding:10px;
            margin-top:5px;
            margin-bottom:15px;
            border:1px solid #ccc;
            border-radius:8px;
        }
        .btn{
            width:100%;
            padding:12px;
            background:#2563eb;
            color:white;
            border:none;
            border-radius:8px;
            font-size:16px;
            cursor:pointer;
        }
        .btn:hover{
            background:#1d4ed8;
        }
        .footer{
            margin-top:30px;
            background:#2563eb;
            color:white;
            text-align:center;
            padding:15px;
        }
    </style>
</head>
<body>
<div class="header">
    <h1>Website Pembelajaran HTML dan PHP</h1>
</div>
<div class="container">
    <h2>Form Input Mahasiswa</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <label>Nama Mahasiswa</label>
        <input type="text" name="nama" placeholder="Masukkan nama" required>
        <label>NIM</label>
        <input type="number" name="nim" placeholder="Masukkan NIM" required>
        <label>Jurusan</label>
        <input type="text" name="jurusan" placeholder="Masukkan jurusan" required>
        <label>Email</label>
        <input type="email" name="email" placeholder="Masukkan email" required>
        <label>No HP</label>
        <input type="text" name="nohp" placeholder="Masukkan nomor HP" required>
        <label>Foto</label>
        <input type="file" name="foto" required>
        <button type="submit" name="kirim" class="btn">
            Simpan Data
        </button>
    </form>
</div>
<div class="footer">
    © <?php echo date("Y"); ?> Program Studi Informatika
</div>
</body>
</html>