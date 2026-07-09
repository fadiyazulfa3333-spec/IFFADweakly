<?php
$koneksi = mysqli_connect("localhost", "root", "", "iffadweakly");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
function tampildata($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_row($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function tambahdata($data)
{
    global $koneksi;
    $nama     = htmlspecialchars($data['nama']);
    $nim      = htmlspecialchars($data['nim']);
    $jurusan  = htmlspecialchars($data['jurusan']);
    $email    = htmlspecialchars($data['email']);
    $nohp     = htmlspecialchars($data['nohp']);
    $foto = upload();
    if ($foto == false) {
        return false;
    }
    // PERBAIKAN: nama kolom database adalah no_hp
    $query = "INSERT INTO mahasiswa
              (nama, nim, jurusan, email, no_hp, foto)
              VALUES
              ('$nama','$nim','$jurusan','$email','$nohp','$foto')";

    mysqli_query($koneksi, $query);
    
    // Jika query gagal tampilkan penyebabnya
    if (mysqli_error($koneksi)) {
        die("Error MySQL : " . mysqli_error($koneksi));
    }
    return mysqli_affected_rows($koneksi);
}
function editdata($data)
{
    global $koneksi;

    $id       = $data['id'];
    $nama     = htmlspecialchars($data['nama']);
    $nim      = htmlspecialchars($data['nim']);
    $jurusan  = htmlspecialchars($data['jurusan']);
    $email    = htmlspecialchars($data['email']);
    $nohp     = htmlspecialchars($data['nohp']);

    if($_FILES['foto']['error'] === 4){
        $foto = $data['fotoLama'];
    }else{
        $foto = upload();
    }

    $query = "UPDATE mahasiswa SET
                nama='$nama',
                nim='$nim',
                jurusan='$jurusan',
                email='$email',
                no_hp='$nohp',
                foto='$foto'
              WHERE id=$id";

    mysqli_query($koneksi,$query);

    return mysqli_affected_rows($koneksi);
}
function deletedata($id)
{
    global $koneksi;
    // PERBAIKAN: nama tabel mahasiswa
    $query = "DELETE FROM mahasiswa WHERE id='$id'";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}
function upload()
{
    if (!isset($_FILES['foto'])) {
        return false;
    }
    $namaFile = $_FILES['foto']['name'];
    $error    = $_FILES['foto']['error'];
    $tmpName  = $_FILES['foto']['tmp_name'];
    // Tidak ada file dipilih
    if ($error == 4) {
        echo "<script>alert('Pilih foto terlebih dahulu!');</script>";
        return false;
    }
    // Validasi ekstensi
    $ekstensiValid = ['jpg', 'jpeg', 'png'];
    $ekstensiFile = strtolower(pathinfo($namaFile, PATHINFO_EXTENSION));
    if (!in_array($ekstensiFile, $ekstensiValid)) {
        echo "<script>alert('Format gambar harus JPG, JPEG, atau PNG!');</script>";
        return false;
    }
    // Nama file baru
    $namaFileBaru = uniqid() . "." . $ekstensiFile;
    move_uploaded_file($tmpName, "assets/images/" . $namaFileBaru);
    return $namaFileBaru;
}
function register($data)
{
    global $koneksi;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

    // Cek username sudah ada atau belum
    $cek = mysqli_query($koneksi, "SELECT username FROM user WHERE username='$username'");

    if(mysqli_fetch_assoc($cek)){
        echo "<script>alert('Username sudah digunakan!');</script>";
        return false;
    }

    // Cek konfirmasi password
    if($password !== $password2){
        echo "<script>alert('Konfirmasi password tidak sesuai!');</script>";
        return false;
    }

    // Enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($koneksi, "INSERT INTO user (username, password) VALUES ('$username', '$password')");

    return mysqli_affected_rows($koneksi);
}
?>