<?php
    session_start();

    if(!isset($_SESSION["login"])){
        header("Location: login.php");
        exit;
    }

    require "fungsi.php";
    $qmahasiswa = "SELECT * FROM mahasiswa";/// karena query ke tabel mahasiswa
    $mahasiswas = tampildata($qmahasiswa); /// menghasilkan data mahasiswa dalam lemari
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

            .btn-hapus{
        background:#dc3545;
        color:white;
        padding:8px 12px;
        border-radius:5px;
        text-decoration:none;
        font-size:14px;
        }

        .btn-hapus:hover{
            background:#b02a37;
        }

        .btn-edit{
            background:#198754;
            color:white;
            padding:8px 12px;
            border-radius:5px;
            text-decoration:none;
            margin-right:5px;
        }

        .btn-edit:hover{
            background:#146c43;
        }

        .btn-hapus{
            background:#dc3545;
            color:white;
            padding:8px 12px;
            border-radius:5px;
            text-decoration:none;
        }

        .btn-hapus:hover{
            background:#b02a37;
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
    <a href="logout.php" onclick="return confirm('Yakin ingin logout?')">Logout</a>
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
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($mahasiswas as $mhs)
            {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $mhs[1] ?></td>
            <td><?php echo $mhs[2] ?></td>
            <td><?php echo $mhs[3] ?></td>
            <td><?php echo $mhs[4] ?></td>
            <td><?php echo $mhs[5] ?></td>
            <td>
                <img src="assets/images/<?php echo $mhs[6] ?>" width="90">
            </td>

            <td>
                 <a class="btn-edit" href="editdata.php?id=<?php echo $mhs[0]; ?>">Edit</a>

                <a class="btn-hapus"
                href="hapusdata.php?id=<?php echo $mhs[0]; ?>"
                onclick="return confirm('Yakin ingin menghapus data ini?')">
                    Hapus
                </a>
            </td>
        </tr>
        <?php
        $no++;
            }
        ?>
    </table>
</div>
<div class="footer">
    © <?php echo date("Y"); ?> Program Studi Informatika
</div>
</body>
</html>