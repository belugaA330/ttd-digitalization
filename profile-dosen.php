<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profil Dosen</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="request-surat.css">
  <link rel="stylesheet" href="profile-dosen.css">
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
                <a href="dashboard-admin.html">
                    <i class='bx bx-bar-chart-square' ></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="profile-dosen.html">
                    <i class='bx bx-user' ></i>
                    <span class="link_name">User</span>
                </a>
                <span class="tooltip">User</span>
            </li>
            <li>
                <a href="request-verif.html">
                    <i class='bx bx-chat' ></i>
                    <span class="link_name">Verifikasi Surat</span>
                </a>
                <span class="tooltip">Verifikasi Surat</span>
            </li>
            <li>
                <a href="index.html">
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

<div class="content_profile">

    
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
<div class="col-xl-6 col-md-12">
                                                <div class="card user-card-full">
                                                    <div class="row m-l-0 m-r-0">
                                                        <div class="col-sm-4 bg-c-lite-green user-profile">
                                                            <div class="card-block text-center text-white">
                                                                <center>
                                                                <div class="m-b-25">
                                                                    <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image">
                                                                </div>
                                                                <h6 class="f-w-600">Nama User</h6>
                                                                <p>Universitas Nusa Putra</p>
                                                                <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                                                </center>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="card-block">
                                                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">NIP</p>
                                                                        <h7 class="text-muted f-w-400">20210000000</h7>
                                                                    </div>
                                                                    <br>
                                                                    <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Major</p>
                                                                        <h7 class="text-muted f-w-400">Information System</h7>
                                                                    </div>
                                                                </div>
                                        
                                                                <ul class="social-link list-unstyled m-t-40 m-b-10">
                                                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             </div>
                                                </div>
                                            </div>


</div>
</body>
</html>
