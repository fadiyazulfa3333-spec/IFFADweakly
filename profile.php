<?php
$judul = "Profile Saya";

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
            width:70%;
            margin:40px auto;
            background:white;
            padding:30px;
            border-radius:15px;
            box-shadow:0 5px 15px rgba(0,0,0,0.1);
        }

        h2{
            text-align:center;
            margin-bottom:25px;
            color:#2563eb;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        td{
            border:1px solid #ddd;
            padding:12px;
        }

        td:first-child{
            font-weight:bold;
            width:35%;
            background:#f8f9fa;
        }

        p{
            margin-top:25px;
            text-align:justify;
            line-height:1.8;
            color:#555;
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
</div>

<div class="navbar">
    <?php
    foreach($menu as $nama => $link){
        echo "<a href='$link'>$nama</a>";
    }
    ?>
</div>

<div class="container">

    <h2>Biodata Mahasiswa</h2>

    <table>
        <tr>
            <td>Nama</td>
            <td>Fadiyah Zulfa</td>
        </tr>

        <tr>
            <td>NIM</td>
            <td>13182420024</td>
        </tr>

        <tr>
            <td>Program Studi</td>
            <td>Informatika</td>
        </tr>

        <tr>
            <td>Fakultas</td>
            <td>Fakultas Ilmu Komputer & Teknologi Digital</td>
        </tr>

        <tr>
            <td>Universitas</td>
            <td>Universitas Muhammadiyah Semarang</td>
        </tr>

        <tr>
            <td>Hobi</td>
            <td>Rebahan</td>
        </tr>
    </table>

</div>

<div class="footer">
    © <?php echo date("Y"); ?> Informatika
</div>

</body>
</html>