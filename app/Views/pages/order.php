<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="/css/OrderStyle.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
  <link rel="icon" href="/gambar/plane.png">
  <title> SWINGS.com</title>

</head>
<?php
// dd($this->data);

?>

<body>
  <nav class="navbar">
    <div class="navbar-left">
      <div class="Judul"> <a class="Swing" href="HomeAccController" style="text-decoration: none;">SWINGS.com</a></div>
    </div>
    <div class="navbar-right">
      <ul>
        <li>
          <img src="/gambar/DetailPemesan/user.png" width="40px">
        </li>
      </ul>
    </div>
  </nav>
  <div class="grid-container">
    <div class="item1">
      <div class="detail">
        <span>
          <?= $this->data[0]['kode_bandara_asal'] ?>
        </span>
        <span><img src="/gambar/DetailPemesan/right-arrow.png" width="14px"></span>
        <span>
          <?= $this->data[0]['kode_bandara_tujuan'] ?>
        </span>
        <span><img src="/gambar/DetailPemesan/record.png" width="10px"></span>
        <span>
          <?php $tanggal = date_create($this->data[0]['waktu_berangkat']);
          echo date_format($tanggal, 'd M Y'); ?>
        </span>
        <span><img src="/gambar/DetailPemesan/record.png" width="10px"></span>
        <span>
          <?= $this->data[0]['kelas'] ?>
        </span>
      </div>
    </div>
    <div class="item2">
      <a href="Carimaskapi">Ubah Penelusuran</a>
    </div>
  </div>

  <!-- Body Pencarian Maskapai -->

  <div class="container">
    <?php foreach ($this->data as $index => $value) :
      $date1 = date_create($value['waktu_berangkat']);
      $date2 = date_create($value['waktu_sampai']);

      $interval = date_diff($date1, $date2, true);
    ?>
      <div class="card-penerbangan">
        <p class="kol6">
          <?= $value['nama'] ?>
        </p>
        <img src="<?= $value['lambang'] ?> " width="150px" outline="black" class="kol1">
        <div class="kol2">
          <p class="bold">
            <?php echo date_format($date1, 'H:i'); ?>
          </p>
          <p>
            <?= $value['kode_bandara_asal'] ?>
          </p>
        </div>
        <div class="kol3">
          <p style="border-bottom: 1pt solid" align="center">
            <?= $interval->format('%h jam %i menit'); ?>
          </p>
          <p align="center">Langsung</p>
        </div>
        <div class="kol4">
          <p class="bold">
            <?= date_format($date2, 'H:i'); ?>
          </p>
          <p>
            <?= $value['kode_bandara_tujuan'] ?>
          </p>
        </div>
        <div class="kol5">
          <span class="bold-blue">IDR</span>
          <span class="bold-blue">
            <?= $value['harga'] ?>
          </span>
          <span style="color:gray">/pax</span>
        </div>

        <form action="<?= base_url(); ?>/PDD" method="post">
          <input type="text" name="harga_id" id="id_harga" value="<?= $value['id_harga'] ?>" hidden>
          <button class="kol7" type="submit">Pilih</button>
        </form>
      </div>
    <?php endforeach; ?>

  </div>
  </div>
</body>

</html>