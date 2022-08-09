<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="/css/cariTiketStyle.css">
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
        <a href="HomeAccController">SWINGS.com</a>
      </div>
    </div>
    <div class="navbar-right">
      <div class="logo">

      </div>
    </div>
  </nav>
  <div class="container">
    <h1>Beli Tiket</h1>
    <form action="/search" method="POST">
      <div class="txtfield">
        <div class="input-box">
          <label>Dari</label><br>
          <label for="departure">
            <img src="/gambar/Cari/departures.png"></label>
          <select name="departure" id="departure">
            <option disabled selected>-Silahkan isi kota asal-</option>
            <option value="ACHC">Banda Aceh</option>
            <option value="DPSC">Bali</option>
            <option value="JKTC">Jakarta</option>
            <option value="JOGC">Yogyakarta</option>
            <option value="KUPC">Kupang</option>
            <option value="MESC">Medan</option>
            <option value="MKSC">Makassar</option>
            <option value="PDGC">Padang</option>
            <option value="PLGC">Palembang</option>
            <option value="SRIC">Samarinda</option>
            <option value="SUBC">Surabaya</option>
          </select>
        </div>

        <div class="label2">
          <label>Ke</label><br>
          <label for="arrival">
            <img src="/gambar/Cari/arrivals.png" margin-right="5px" width="20px"></label>
          <select name="arrival" id="arrival">
            <option disabled selected>-Silahkan isi kota tujuan-</option>
            <option value="ACHC">Banda Aceh</option>
            <option value="DPSC">Bali</option>
            <option value="JKTC">Jakarta</option>
            <option value="JOGC">Yogyakarta</option>
            <option value="KUPC">Kupang</option>
            <option value="MESC">Medan</option>
            <option value="MKSC">Makassar</option>
            <option value="PDGC">Padang</option>
            <option value="PLGC">Palembang</option>
            <option value="SRIC">Samarinda</option>
            <option value="SUBC">Surabaya</option>
          </select>
        </div>

            </div>
            <span></span>
            <br>
            <div class="tanggalberangkat">
                <label for="date">Berangkat</label><br>
                <input type="date" name="tanggalberangkat" required>
            </div>
            <span></span><br><br>
            <label>Jumlah Penumpang</label>
            <div class="penumpang " >
                <label class="grid-1">Dewasa</label>
                <input type="number" name="Dewasa" id="Dewasa" min="0" max="1" required >

                <label class="grid-2">Anak-Anak</label>
                <input type="number" name="anak-anakk" id="anak-anakk" min="0" value=0 disable>

                <label class="grid-3">Bayi</label>
                <input type="number" name="bayi" id="bayi" min="0" value=0 disable>

            </div>
            <br><br>
            <span>Kelas Kabin</span>
            <div class="kabin">
                <label for="kelaskabin">
                    <img src="/gambar/Cari/cabin.png" width="30px"></label>
                <select name="kelas">
                    <option >-Pilih Kelas-</option>
                    <option value="Ekonomi">Ekonomi</option>
                    <option value="Bisnis">Bisnis</option>
                </select>
            </div>
            <br><br>
        <div class="cari">
            <a href="Ordertiket">
                <button class="sub-menu" type="submit">
                    <img src="/gambar/Cari/search.png" width="20px" margin-top="2px">Cari Penerbangan
                </button>
            </a>
        </div>
        </form> 
    </div>
</body>

</html>