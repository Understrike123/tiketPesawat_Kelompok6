<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
  <link rel="icon" href="/gambar/plane.png">
  <title>SWINGS.com</title>

</head>

<body>

  <nav class="navbar">
    <div class="navbar-left">
      <div class="Judul">
        <a href="/">SWINGS.com</a>
      </div>
    </div>
    <div class="navbar-right">
      <ul>
        <li>
          <a href="/LoginController/"><button>Sign In</button></a>
        </li>
      </ul>
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
        <img src="/gambar/booking.png" width="120">
        <img class="gambar2" src="/gambar/clipboard.png" width="120">

        <button class="sub-menu" onclick=" myFunction()">Pesan Tiket</button>
        <button class="sub-menu" onclick=" myFunction()">Pesanan Saya</button>
      </div>
    </div>
    <script>
      function myFunction() {
        alert("Login terlebih dahulu");
      }
    </script>
  </div>
</body>

</html>