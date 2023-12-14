<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Upload Surat</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="request-surat.css">
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
                <a href="dashboard-user.php">
                    <i class='bx bx-bar-chart-square' ></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="profile.php">
                    <i class='bx bx-user' ></i>
                    <span class="link_name">User</span>
                </a>
                <span class="tooltip">User</span>
            </li>
            <li>
                <a href="request-surat.php">
                    <i class='bx bx-chat' ></i>
                    <span class="link_name">Upload Surat</span>
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

<div class="content">
<br>
<center> <h1> Form Pengajuan Surat </h1>  </center>
<br>
    <div class="container">
        <form action="action_page.php">
          <div class="row">
            <div class="col-25">
              <label for="fname">Nama Lengkap</label>
            </div>
            <div class="col-75">
              <input type="text" autocomplete="off" id="fname" name="firstname" placeholder="Nama Anda..">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="lname">NIM</label>
            </div>
            <div class="col-75">
              <input type="text" autocomplete="off" id="lname" name="lastname" placeholder="NIM..">
            </div>
          </div>
          <div class="row">
          </div>
          <div class="row">
            <div class="col-25">
              <label for="subject">Subject</label>
            </div>
            <div class="col-75">
                <input type="text" autocomplete="off" id="lname" name="lastname" placeholder="Subject...">
            </div>
          </div>
          
          <label for="myFile">Upload Surat Anda</label>
          <form action="proses.php">
            <input type="file" id="myFile" name="filename">
          </form>
          <br>
          <div class="row">
            <input type="submit" value="Submit">
          </div>
        </form>
      </div>
    </div>
</body>
</html>
