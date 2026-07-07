<?php

    require 'fungsi.php';

    $id = $_GET["id"];

    if(deletedata($id) > 0)
    {
        echo "<script>
                    alert('Data berhasil dihapus!');
                    window.location.href = 'data mahasiswa.php';
                </script>";
    }
     else


?>