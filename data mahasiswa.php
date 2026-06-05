<?php

$koneksi = mysqli_connect(
    "localhost",
    "root",
    "",
    "iffadweakly"
);

if (!$koneksi) {
    die("Koneksi database gagal!");
}

$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($koneksi, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>

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
            width:90%;
            margin:40px auto;
            background:white;
            padding:30px;
            border-radius:15px;
            box-shadow:0 5px 15px rgba(0,0,0,0.1);
        }

        h2{
            text-align:center;
            color:#2563eb;
            margin-bottom:20px;
        }

        .btn{
            display:inline-block;
            background:#2563eb;
            color:white;
            text-decoration:none;
            padding:10px 15px;
            border-radius:8px;
            margin-bottom:20px;
        }

        .btn:hover{
            background:#1d4ed8;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        table th{
            background:#2563eb;
            color:white;
        }

        table th,
        table td{
            border:1px solid #ddd;
            padding:10px;
            text-align:center;
        }

        img{
            border-radius:8px;
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
    <h1>DATA MAHASISWA</h1>
</div>

<div class="navbar">
    <a href="index.php">Home</a>
    <a href="profile.php">Profile</a>
    <a href="Contact.php">Contact</a>
    <a href="data mahasiswa.php">Data Mahasiswa</a>
</div>

<div class="container">

    <h2>Daftar Mahasiswa</h2>

    <a href="inputdata.php" class="btn">
        + Tambah Data Mahasiswa
    </a>

    <table>

        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>No HP</th>
            <th>Foto</th>
        </tr>

        <?php
        $no = 1;

        while($mhs = mysqli_fetch_assoc($result)){
        ?>

        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $mhs['nama']; ?></td>
            <td><?php echo $mhs['nim']; ?></td>
            <td><?php echo $mhs['jurusan']; ?></td>
            <td><?php echo $mhs['email']; ?></td>
            <td><?php echo $mhs['no_hp']; ?></td>
            <td>
                <img src="assets/images/<?php echo $mhs['foto']; ?>" width="90">
            </td>
        </tr>

        <?php
        }
        ?>

    </table>

</div>

<div class="footer">
    © <?php echo date("Y"); ?> Program Studi Informatika
</div>

</body>
</html>