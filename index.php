<?php
    $judul = "PROGRAM STUDI INFORMATIKA";

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
            width:80%;
            margin:40px auto;
            background:white;
            padding:30px;
            border-radius:15px;
            text-align:center;
            box-shadow:0 4px 10px rgba(0,0,0,0.1);
        }

        .container img{
            width:220px;
            margin:20px 0;
            border-radius:15px;
        }

        .container p{
            color:#555;
            line-height:1.8;
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

    <h2>Selamat Datang</h2>

    <img src="assets/images/fadiyah.jpeg" alt="Foto">

    <p>
        Selamat datang di Website milik Fadiyah Zulfa dari Program Studi Informatika.
        <br><br>
        Website ini dibuat untuk memenuhi tugas praktikum
        Pemrograman Web.
    </p>

    <br>

    <h3>Daftar Publikasi</h3>

    <ul style="display:inline-block; text-align:left;">
        <li>Scopus
            <ul>
                <li>Sentiment Analysis</li>
            </ul>
        </li>
        <li>SINTA</li>
        <li>Web of Science (WoS)</li>
    </ul>

</div>

<div class="footer">
    © <?php echo date("Y"); ?> Program Studi Informatika
</div>

</body>
</html>