<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard Dosen</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="request-surat.css">
  <link rel="stylesheet" href="request-verif.css">
  <link rel="stylesheet" href="sidebar.css">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>


  <body>
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <i class='bx bxs-heart'></i>
                <div class="logo_name">Sistem Digitalisasi TTD</div>
            </div>
            <i class='bx bx-menu' id='btn'></i>
        </div>
        <ul class="nav">
            <li>
                <a href="#">
                    <i class='bx bx-bar-chart-square' ></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="profile-dosen.php">
                    <i class='bx bx-user' ></i>
                    <span class="link_name">User</span>
                </a>
                <span class="tooltip">User</span>
            </li>
            <li>
                <a href="request-verif.php">
                    <i class='bx bx-chat' ></i>
                    <span class="link_name">Verifikasi Surat</span>
                </a>
                <span class="tooltip">Verifikasi Surat</span>
            </li>
            <li>
                <a href="index.php">
                    <i class='bx bx-log-out' ></i>
                    <span class="link_name">Logout</span>
                </a>
                <span class="tooltip">Logout</span>
            </li>
            
        </ul>
    </div>

    <!-- <div class="home_content">
        <div class="text">Home Content</div>
    </div> -->

    <script>
        let btn = document.querySelector('#btn');
        let sidebar = document.querySelector('.sidebar');
        let srcBtn = document.querySelector('.bx-search');

        btn.onclick = function(){
            sidebar.classList.toggle('active');
        }
        srcBtn.onclick = function(){
            sidebar.classList.toggle('active');
        }
    </script>

<div class="content_dashboard_admin">
<br>
<h9> Selamat Datang ! </h9>
</div>

<div class="content_tanggal">
<p><b>Today is</b> <span id="tanggalwaktu"></span></p>
<script>
var tw = new Date();
if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
else (a=tw.getTime());
tw.setTime(a);
var tahun= tw.getFullYear ();
var hari= tw.getDay ();
var bulan= tw.getMonth ();
var tanggal= tw.getDate ();
var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
</script>
</div>
<br>
<br>
<br>
    <div class="content_isi_user">
    <h9> Daftar Ajuan Surat : </h9>
    <br>
    <br>
    </div>


    <div class="content_request_verifikasi_dashboard">
        <div class="container">
          <h2>Daftar Surat</h2>
          
          <div class="table-container">
            <table>
              <thead>
                <tr>
                  <th>Nomor Surat</th>
                  <th>Tanggal Surat</th>
                  <th>Pengirim</th>
                  <th>Perihal</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>SM001</td>
                  <td>2023-10-15</td>
                  <td>Jane Doe</td>
                  <td>Undangan Rapat</td>
                  <td><a href="surat-viewer.php" target="_blank">Buka</a></td>
                </tr>
                
                <p> Cek Lainnya <a href="request-verif.php"> Disini </a></p>
                
    
</body>
</html>
