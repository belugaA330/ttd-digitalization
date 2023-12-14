<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form Pengiriman Surat</title>
</head>
<body>
  <form action="kirim-surat.php" method="post">
    <input type="text" name="id_surat" placeholder="ID Surat">
    <input type="text" name="no_surat" placeholder="Nomor Surat">
    <input type="date" name="tgl_surat" placeholder="Tanggal Surat">
    <input type="text" name="perihal_surat" placeholder="Perihal Surat">
    <input type="text" name="tujuan_surat" placeholder="Tujuan Surat">
    <input type="text" name="id_user" placeholder="ID User">
    <input type="text" name="id_pengajuan" placeholder="ID Pengajuan">
    <input type="submit" value="Kirim">
  </form>
</body>

<?php
// Buat koneksi ke database
$conn = new mysqli("localhost", "root", "", "web_qr_databases");

// Buat query INSERT
$query = "INSERT INTO surat (id_surat, no_surat, tgl_surat, perihal_surat, tujuan_surat, id_user, id_pengajuan) VALUES ('" . $id_surat . "', '" . $_POST['no_surat'] . "', '" . $_POST['tgl_surat'] . "', '" . $_POST['perihal_surat'] . "', '" . $_POST['tujuan_surat'] . "', '" . $_POST['id_user'] . "', '" . $_POST['id_pengajuan'] . "')";

// Isi parameter query INSERT dengan data dari form
$id_surat = $_POST['id_surat'];
$no_surat = $_POST['no_surat'];
$tgl_surat = $_POST['tgl_surat'];
$perihal_surat = $_POST['perihal_surat'];
$tujuan_surat = $_POST['tujuan_surat'];
$id_user = $_POST['id_user'];
$id_pengajuan = $_POST['id_pengajuan'];

// Jalankan query INSERT
$conn->query($query);

// Tutup koneksi ke database
$conn->close();

?>


</html>
