<?php


$id_kategori = $_POST['id_kategori'];
$kategori = $_POST['kategori'];
include "koneksi.php";
if (isset($_POST['ubah'])) {

    
    
    $update = mysqli_query($koneksi, "UPDATE kategori_buku SET kategori='$kategori' WHERE kategori_buku . id_kategori='$id_kategori'");

    if ($update) {
        echo "<script>
                alert('Data berhasil dieditkan !');
                document.location='../kategori.php';
              </script>";
    } else {
        echo "<script>
        alert('Data gagal dieditkan !');
        document.location='../kategori.php';
        </script>";
    }
}
?>