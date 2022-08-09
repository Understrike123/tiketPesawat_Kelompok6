<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="/gambar/plane.png">
  <title>Pembatalan Tiket</title>
  <style>
    * {
      box-sizing: border-box;
      font-family: Arial, Helvetica, sans-serif;
    }

    body {
      background: #e8f0ff;
    }

    .navbar-menu {
      width: auto;
    }

    .navbar {
      width: auto;
      height: 70px;
      background: rgb(9, 30, 68);
      border-radius: 5px;
    }

    .logo {
      width: 50px;
      margin: 7px 190px;
      height: 50px;
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
      color: #FFFFFF;
      font-weight: bold;
      font-size: xx-large;
      margin: 10px 10px;
      letter-spacing: 2px;
    }

    .navbar-right {
      float: right;
      width: 290px;
      padding-right: 10px;
    }

    .top-container {
      width: auto;
      height: 180px;
      background-color: #FFFFFF;
      border: 1px solid 091E44;
      border-radius: 5px;
      margin-top: 10px;
      margin-left: 20px;
      margin-right: 20px;
      padding: 10px;
    }

    .top-container .top-right {
      float: right;
      height: auto;
      font-style: normal;
      font-weight: bold;
      font-size: 15px;
      line-height: 40px;

      color: #377EFF;
    }

    .top-container .top-left {
      float: left;
      height: auto;
      font-style: normal;
      font-weight: bold;
      font-size: 25px;
      line-height: 48px;

      color: rgba(9, 30, 68, 0.8);
    }

    .top-right img {
      width: 15px;
      height: 15px;
    }

    .top-right {
      margin-right: 30px;
    }

    .top-left {
      margin-left: 30px;
    }

    .top-bottom {
      margin-top: 70px;
      margin-left: 30px;
      border-bottom: 1px solid rgba(9, 30, 68, 0.2);
    }

    .top-bottom img {
      width: 20px;
    }

    .top-bottom span {
      color: #005BFF;
      font-weight: bold;
      border-bottom: 2px solid #377EFF;
    }

    .sorting-by {
      float: right;
      margin-top: 20px;
      margin-right: 80px;
      font-size: 15px;
      color: rgba(9, 30, 68, 0.6);
    }

    .sorting-by select {
      width: 200px;
      height: 30px;
      font-size: 15px;
    }

    .sorting-by button {
      font-size: 15px;
      font-weight: bold;
      background-color: white;
      border: 0px;
      color: #377EFF;
    }

    .list-pesanan {
      width: auto;
      height: 250px;
      background-color: #FFFFFF;
      border: 1px solid 091E44;
      border-radius: 5px;
      margin-top: 10px;
      margin-left: 20px;
      margin-right: 20px;
      padding: 10px;
    }

    .list-pesanan .top-right {
      float: right;
      margin-right: 30px;
      margin-top: 30px;
      overflow: hidden;
    }

    .list-pesanan .top-left {
      float: left;
      margin-left: 30px;
      margin-top: 20px;
      font-size: 30px;
    }

    .list-pesanan .top-left img {
      width: 35px;
    }

    .top-list-pesanan {
      width: auto;
      height: 80px;
      border-bottom: 1px solid rgba(9, 30, 68, 0.1);
    }

    .order-id {
      margin-left: 30px;
      margin-top: 20px;
    }

    .resume-rute {
      margin-left: 30px;
      margin-top: 10px;
      font-weight: bold;
    }

    .keberangkatan {
      margin-left: 30px;
      margin-top: 10px;
    }

    .row-bottom button {
      margin-top: 10px;
      font-size: 10px;
    }

    .e-ticket {
      margin-left: 30px;
    }

    .refund {
      margin-left: 20px;
    }

    .lihat-detail,
    .to-refund {
      float: right;
      font-size: 17px;
      font-weight: bolder;
      border: none;
      background-color: #FFFFFF;
      color: #005BFF;
      text-decoration: none;
      margin-top: 10px;
      margin-bottom: 10px;
      margin-right: 30px;
    }

    .to-refund {
      width: 80px;
      height: 18px;
      background-color: red;
      color: #FFFFFF;
      font-size: 15px;
      text-align: center;
      border-radius: 20px;
    }

    .Judul a {
      text-decoration: none;
      color: white;
      font-weight: bold;
      margin-left: 10px;
    }
  </style>
</head>

<body>
  <nav class="navbar-menu">
    <div class="navbar">
      <div class="navbar-left">
        <div class="Judul">
          <a href="HomeAccController">SWINGS.com</a>
        </div>
      </div>

      <div class="navbar-right">
        <div class="logo">
        </div>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="top-container">
      <div class="top-left">
        Pesanan Saya
      </div>
      <!-- <div class="top-right">
        <img src="img/bills.png"><span> Riwayat Transaksi </span>

      </div> -->
      <div class="top-bottom">
        <img src="/gambar/homePembatalan/plane.png"><span> Pesawat </span>
      </div>
      <div class="sorting-by">
        Sort by
        <select name="sort">
          <option value=""></option>
          <option value="Terbaru">Terbaru</option>
          <option value="Terlama">Terlama</option>
        </select>
        <button>RESET</button>
      </div>
    </div>

    <?php
    // dd($this->data); 
    ?>

  <?php
  foreach ($this->data as $index => $value) :
  $date1 = date_create($value['waktu_berangkat']);
  $date2 = date_create($value['waktu_sampai']);

    $interval = date_diff($date1, $date2, true);
    ?>
    <div class="list-pesanan">
      <div class="top-list-pesanan">
        <div class="top-right">
          <form action="<?= base_url(); ?>/getRefund" method="post">
            <input type="text" name="id_transaksi" value="<?= $value['id_transaksi']; ?>" hidden>
            <button class="to-refund">Refund</button>
          </form>
        </div>
        <div class="top-left">
          <img src="/gambar/homePembatalan/plane.png"><span> Pesawat </span>
        </div>
      </div>
      <div class="top-border"></div>
      <div class="middle-list-pesanan">
        <div class="order-id">
          <table>
            <tr>
              <td>Order ID : </td>
              <td>
                <?= $value['idtransaksidetail'] ?>
              </td>
            </tr>
          </table>
        </div>
        <div class="resume-rute">
          <table>
            <tr>
              <td>
                <?= date_format($date1, 'H:i'); ?>
              </td>
              <td><img src="/gambar/DetailPemesan/right-arrow.png" width="10px"></td>
              <td>
                <?= date_format($date2, 'H:i'); ?>
              </td>
            </tr>
          </table>
        </div>
        <div class="keberangkatan">
          <table>
            <tr>
              <td> Dewasa</td>
              <td><img src="/gambar/homePembatalan/line.png" width="18px"></td>
              <td>
                <?= date_format($date1, 'l,d F Y'); ?>
              </td>
              <td><img src="/gambar/DetailPemesan/record.png" width="5px"></td>
            </tr>
          </table>
        </div>
        <div class="row-bottom">
          <div class="info-batal-tiket">
            <a href="EtiketController"> <button class="refund">E-ticket sudah terbit</button></a>
          </div>
        </div>
      </div>
    </div>

    <?php 
  endforeach; ?>
  </div>
</body>

</html>