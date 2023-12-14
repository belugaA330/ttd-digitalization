<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="request-verif.css">
  <link rel="stylesheet" href="sidebar.css">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <title>Daftar Surat</title>
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
                <a href="dashboard-admin.php">
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
                <span class="tooltip">Upload Surat</span>
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



<div class="content_request_verifikasi">
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
          <tr>
            <td>SM002</td>
            <td>2023-10-20</td>
            <td>John Smith</td>
            <td>Permohonan Izin</td>
            <td><a href="surat-viewer.php" target="_blank">Buka</a></td>
          </tr>
          <!-- Data surat akan ditampilkan di sini -->
        </tbody>
      </table>
    </div>
  </div>
</div>
</body>
</html>
