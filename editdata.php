<?php
require "fungsi.php";

$id = $_GET["id"];

$data = tampildata("SELECT * FROM mahasiswa WHERE id=$id")[0];

if(isset($_POST["update"])){

    if(editdata($_POST) > 0){
        echo "<script>
                alert('Data berhasil diubah');
                document.location.href='data mahasiswa.php';
              </script>";
    }else{
        echo "<script>
                alert('Data gagal diubah');
              </script>";
    }

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mahasiswa</title>
</head>
<body>

<h2>Edit Data Mahasiswa</h2>

<form action="" method="post" enctype="multipart/form-data">

<input type="hidden" name="id" value="<?= $data[0]; ?>">
<input type="hidden" name="fotoLama" value="<?= $data[6]; ?>">

<p>Nama</p>
<input type="text" name="nama" value="<?= $data[1]; ?>">

<p>NIM</p>
<input type="text" name="nim" value="<?= $data[2]; ?>">

<p>Jurusan</p>
<input type="text" name="jurusan" value="<?= $data[3]; ?>">

<p>Email</p>
<input type="email" name="email" value="<?= $data[4]; ?>">

<p>No HP</p>
<input type="text" name="nohp" value="<?= $data[5]; ?>">

<p>Foto Lama</p>
<img src="assets/images/<?= $data[6]; ?>" width="120"><br><br>

<input type="file" name="foto">

<br><br>

<button type="submit" name="update">
    Update Data
</button>

</form>

</body>
</html>