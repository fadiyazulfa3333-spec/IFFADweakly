<?php
$judul = "Input Data Mahasiswa";

$menu = [
    "Home" => "index.php",
    "Profile" => "profile.php",
    "Contact" => "Contact.php",
    "Data Mahasiswa" => "data mahasiswa.php"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $judul; ?></title>

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

        .navbar{
            background:white;
            display:flex;
            justify-content:center;
            gap:30px;
            padding:15px;
            box-shadow:0 2px 8px rgba(0,0,0,0.1);
        }

        .navbar a{
            text-decoration:none;
            color:black;
            font-weight:bold;
        }

        .navbar a:hover{
            color:#2563eb;
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
    <h1><?php echo $judul; ?></h1>
    <p>Website Pembelajaran HTML dan PHP</p>
</div>

<div class="navbar">
    <?php
    foreach($menu as $nama => $link){
        echo "<a href='$link'>$nama</a>";
    }
    ?>
</div>

<div class="container">

    <h2>Form Input Mahasiswa</h2>

    <form action="" method="post" enctype="multipart/form-data">

        <label>Nama Mahasiswa</label>
        <input type="text" name="nama" placeholder="Masukkan nama">

        <label>NIM</label>
        <input type="text" name="nim" placeholder="Masukkan NIM">

        <label>Foto</label>
        <input type="file" name="foto">

        <label>Nilai UTS</label>
        <input type="number" name="uts">

        <label>Nilai UAS</label>
        <input type="number" name="uas">

        <label>Nilai Tugas</label>
        <input type="number" name="tugas">

        <button type="submit" class="btn">
            Simpan Data
        </button>

    </form>

</div>

<div class="footer">
    © <?php echo date("Y"); ?> Program Studi Informatika
</div>

</body>
</html>