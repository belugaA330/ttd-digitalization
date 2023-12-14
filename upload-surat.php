<?php
// Buat koneksi ke database
$conn = new mysqli("localhost", "root", "", "web_qr_databases");

// Buat query INSERT
$query = "INSERT INTO surat (id_surat, no_surat, tgl_surat, perihal_surat, tujuan_surat, id_user, id_pengajuan) VALUES ('" . $_POST['no_surat'] . "', '" . $_POST['tgl_surat'] . "', '" . $_POST['perihal_surat'] . "', '" . $_POST['tujuan_surat'] . "', '" . $_POST['id_user'] . "', '" . $_POST['id_pengajuan'] . "')";

// Isi parameter query INSERT dengan data dari form
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