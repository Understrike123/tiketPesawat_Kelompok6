<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
  <link rel="icon" href="/gambar/plane.png">
  <title href="HomeAccController">SWINGS.com</title>

</head>

<body>
  <style>
    * {
      font-family: sans-serif;
    }

    body {
      background: #e8f0ff;
    }

    .logo {
      width: 40px;
      margin: 0px 190px;
      height: 40px;
      background-size: 40px 40px;
      border: solid 2px #666;
      border-radius: 50px;
      background-color: #fff;
    }

    .navbar-left {
      float: left;
      width: 290px;
      padding-top: 10pt;
      padding-left: 10pt;
    }

    .Judul a {
      color: white;
      font-size: 24px;
      font-weight: 500;
      outline: none;
    }

    .Judul a:link {
      text-decoration: none;
    }

    .Judul a:visited {
      text-decoration: none;
    }

    .Judul a:hover {
      text-decoration: none;
    }

    .Judul a:active {
      text-decoration: none;
    }

    .navbar-right {
      float: right;
      width: 290px;
      padding-right: 10px;
    }

    .navbar {
      width: auto;
      height: 50px;
      background: rgb(9, 30, 68);
      border-radius: 2px;
    }

    .navbar ul {
      float: left;
      margin-top: 5px;
      padding: 0;
      width: 300px;
      margin-right: 0px;
    }

    .navbar li {
      float: left;
      list-style: none;
      margin: 0;
    }

    .navbar button {
      display: block;
      height: 5px;
      margin-top: 5px;
      border: 1px solid blue;
      font-weight: bold;
      color: white;
      height: 30px;
      width: 90px;
      border-radius: 20px;
      margin-right: 10px;
      background-color: blue;
      cursor: pointer;
    }

    .navbar li a,
    .navbar li a:link {
      text-decoration: none;
      width: 0px;
      height: 30px;
    }

    .navbar li a button:hover {
      background: white;
      color: #444;
    }

    .main {
      width: auto;
      height: 100px;
    }

    .text-intro {
      margin-top: 135px;
    }

    .text-intro h2,
    p {
      text-align: left;
      margin-left: 50px;
    }

    .content-top img {
      width: 12px;
    }

    .content-top {
      width: 150px;
      height: 20px;
      margin-top: 30px;
      margin-left: 142px;
      border: 1px solid black;
      border-radius: 2px;
    }

    .main-content {
      width: auto;
      margin: 0 auto;
      height: 450px;
    }

    .sub-menu:hover a {
      opacity: 0.9;
    }


    .kembali a {
      text-decoration: none;
      display: block;
      margin-top: 10px;
      margin-left: 5px;
      color: rgb(224, 73, 35);
    }

    .menu {
      position: relative;
      width: 1250px;
      height: 360px;
      left: 142px;
      top: 0px;

      background: rgba(181, 206, 255, 0.21);
      border: 1px solid #000000;
      box-sizing: border-box;
      box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
      border-radius: 5px;
    }

    .sub-menu {
      position: relative;
      left: 100px;
      width: 180px;
      height: 50px;
      margin-bottom: 50px;
      margin-top: 200px;
      margin-right: 60px;
      margin-left: 60px;
      padding: 12px 24px;
      display: inline-block;
      opacity: 0.8;
      border: none;
      border-radius: 4px;
      background: #b5ceff;
      box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
      font-weight: bold;

    }


    .profile {
      color: #fff;
    }

    .alert {
      margin-left: 30px;
      background-color: rgb(192, 65, 56);
      height: 60px;
      width: 350px;
      color: white;
      box-sizing: border-box;
      border: 0px solid black;
      border-radius: 10px;
      align-items: center;
    }

    .tag {
      position: relative;
      top: 20px;
      margin-left: 10px;
    }

    .intro {
      margin-top: 5px;
      background-image: url("/gambar/pesawat2.jpg");
      background-size: cover;
      height: 300px;
      background-repeat: no-repeat;
      background-position: center;
    }

    .intro img {
      margin-top: 5px;
      width: 900px;
      background-size: cover;
      height: 300px;
      background-repeat: no-repeat;
      background-position: center;
    }

    .menu img:first-child {
      position: relative;
      height: 125px;
      width: 115px;
      left: 425px;
      bottom: 50px;
    }

    .gambar2 {
      position: relative;
      height: 125px;
      width: 115px;
      left: 620px;
      bottom: 52px;
    }

    .profile {
      position: relative;
      right: 150px;
      width: 350px;
    }

    .profile_detail {
      display: flex;
      align-items: center;

    }

    .nama {
      display: inline-block;
      z-index: 5;


    }

    .select_profile {
      position: absolute;
      top: 20px;
      left: -80px;
      box-sizing: border-box;
      border: 1px solid black;
      border-radius: 0;
      z-index: 5;

    }

    .select_profile select {
      box-sizing: border-box;
      border: 0px solid black;
      border-radius: 10px;


    }

    .select_profile option:last-child {
      background-color: red;
    }

    .select_profile option:last-child:hover {
      background-color: red;
    }

    .navbar-left nav {
      position: absolute;
      float: left;
      top: 25px;
      left: 100px;

    }

    .navbar-left a {
      text-decoration: none;
      font-size: 20px;
      font-family: sans-serif;
      padding: 13px 10px;
    }

    ul {
      padding: 15px;
      position: absolute;
      top: 18px;
      left: 110px;
    }

    li {
      list-style: none;
      display: inline;
    }

    li a {
      background: rgb(9, 30, 68);
      color: #d4d4d4;
    }

    li a:hover {
      background: #4da4ff;
      color: #fff;
      padding: 13px 10px;
    }

    .menu a {
      cursor: pointer;
    }

    .menu b {
      cursor: pointer;
      display: flex;
      margin-top: -7.9cm;
      top: 100%;
      margin-left: 14.4cm;
      top: -5cm;
    }

    .menu button.sub-menu2 {
      position: relative;
      left: 100px;
      width: 180px;
      height: 50px;
      margin-bottom: 50px;
      margin-top: 200px;
      margin-right: 60px;
      margin-left: 60px;
      padding: 12px 24px;
      display: inline-block;
      opacity: 0.8;
      border: none;
      border-radius: 4px;
      background: #b5ceff;
      box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
      font-weight: bold;
    }
  </style>

  <nav class="navbar">
    <div class="navbar-left">
      <!-- <div class="logo"></div> -->
      <div class="Judul">
        <a href="HomeAccController">SWINGS.com</a>
      </div>

    </div>

    <div class="navbar-right">
      <div class="profile">
        <div class="profile_detail">

          <div class="nama_profile">
            <div class="nama">
              <h4>Selamat Datang <?= $nama_lengkap ?></h4>
              <div class="select_profile">
                <select class="select" nama="pilihprofile" onchange="location = this.value;">
                  <option selected value="#">-Menu-</option>
                  <option value="/HomeAccController/profile">Profile</option>
                  <option value="/LoginController/logout">Sign Out</option>

                </select>

              </div>

            </div>
          </div>
        </div>

      </div>

    </div>
  </nav>
  <div class="main">
    <div class="intro">
      <br>


      <div class="text-intro">
        <h2>SWINGS.com</h2>
        <p>Pesan tiket domestik pesawat tanpa antre, harga murah dan proses sangat mudah</p>
        <p>Ayo pesan tiket perjalanan kamu sekarang!</p>
      </div>
    </div>
    <div class="content-top">
      <img src="/gambar/plane.png"><span> Tiket Pesawat </span>
    </div>
    <div class="main-content">
      <div class="menu">
        <img src="/gambar/booking.png" width="120" width="120">
        <input class="gambar2" type="image" src="/gambar/clipboard.png" onClick="window.location.href='/Homepembatalan'" alt="submit">
        
        <input type="text" name="username" id="username" value="<?= $username ?>" hidden>
        <a href="Carimaskapi"> <button class="sub-menu">Pesan Tiket</button></a>
        
        <form action="<?= base_url(); ?>/getUsername" method="post">
          <input type="text" name="username" id="username" value="<?= $username ?>" hidden>
          <b href="Homepembatalan/tampil"><button class="sub-menu2">pesanan saya</button></b>
        </form>
      </div>

    </div>
  </div>
</body>

</html>