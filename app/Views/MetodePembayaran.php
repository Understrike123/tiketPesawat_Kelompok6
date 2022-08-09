<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="/css/MetodeBayar.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
  <link rel="icon" href="/gambar/plane.png">
  <title>SWINGS.com</title>

</head>

<body>
  <nav class="navbar-menu">
    <div class="navbar">
      <div class="navbar-left">
        <a href="HomeAccController">SWINGS.com</a>
      </div>

      <div class="navbar-right">
        <div class="logo">
        </div>
      </div>
    </div>
  </nav>
  <div class="grid-container">
  </div>
  </div>
  <div class="item2">
  </div>
  </div>
  <div class="container">
    <div class="kolom">
      <div class="metode">
        <h2>Metode pembayaran</h2>
      </div>
      <div class="id">
        <div class="lokasi">
          <table>
            <tr>
              
              <td><?= $this->data['tampil'][0]['kode_bandara_asal'] ?></td>
              <td><img src="/gambar/DetailPemesan/right-arrow.png" width="10px"></td>
              <td><?= $this->data['tampil'][0]['kode_bandara_tujuan'] ?></td>
            </tr>
          </table>
        </div>
        <div class="order_id">
          <table>
            <tr>
              <td>Order ID : </td>
              <td><?= $this->data['tampil'][0]['id_transaksi'] ?></td>
            </tr>
          </table>
        </div>

      </div>
      <div class="detail_harga">
        <div class="harga">
          <h3>Detail harga </h3>
        </div>
        <div class="total">
          <p>Total pembayaran <?= $this->data['tampil'][0]['harga'] ?></p>
        </div>


      </div>
      <div class="virtual">
        <div class="virtual_content">
          <div class="virtual_acc">
            <h1>Virtual Account</h1>
            <small>Anda bisa membayar dengan transfer melalui ATM, Internet Banking & Mobile Banking</small>
          </div>

          <div class="BCA" onclick="menuToggleBCA();">
            <span>BCA Virtual Account</span>
            <span><a class="choose"><img src="/gambar/BCA.jpeg" width="50px"></a></span>

            <div class="menu-bca">
              <ul>
                <li>
                  <p>Virtual Account</p>
                </li>
                <li>
                  <h4>7800 1010 0559 1862</h4>
                </li>
                <li>
                  <p>Order</p>
                </li>
                <li>
                  <h4> <?= $this->data['tampil'][0]['id_transaksi'] ?></h4>
                </li>
                <li>
                  <p>Total Pembayaran</p>
                </li>
                <li>
                  <h4>IDR <?= $this->data['tampil'][0]['harga'] ?></h4>
                </li>
                <li>
                <form action="<?= base_url(); ?>/Informasibayar" method="post">
                      <div class="submit"> 
                        <input type="text" name="metodebayar" value="<?= $this->data['tampil'][0]['id_metode_pembayaran'] ?>" hidden>
                        <input type="text" name="status" value="<?= $this->data['tampil'][0]['status_pembayaran']='Pembayaran berhasil' ?>" hidden>
                        <input type="text" name="id_harga" value="<?= $this->data['tampil'][0]['id_harga'] ?>" hidden>
                      <a href="EtiketController"><button>SAYA SUDAH MEMBAYAR</button></a>
                      </div>
                </form>
                </li>
              </ul>
            </div>
          </div>


          <div class="BRI" onclick="menuToggleBRI();">
            <span>BRI Virtual Account</span>
            <span><a class="choose"><img src="/gambar/BRI.jpeg" width="50px"></a></span>

            <div class="menu-bri">
              <ul>
                <li>
                  <p>Virtual Account</p>
                </li>
                <li>
                  <h4>8878 8000 0899 7599</h4>
                </li>
                <li>
                  <p>Order</p>
                </li>
                <li>
                  <h4> <?= $this->data['tampil'][0]['id_transaksi'] ?></h4>
                </li>
                <li>
                  <p>Total Pembayaran</p>
                </li>
                <li>
                  <h4>IDR <?= $this->data['tampil'][0]['harga'] ?></h4>
                </li>
                <li>
                <form action="<?= base_url(); ?>/Informasibayar" method="post">
                      <div class="submit">
                      <input type="text" name="metodebayar" value="<?= $this->data['tampil'][0]['id_metode_pembayaran']='BRI' ?>" hidden>
                      <input type="text" name="status" value="<?= $this->data['tampil'][0]['status_pembayaran']='Pembayaran berhasil' ?>" hidden>
                      <input type="text" name="id_harga" value="<?= $this->data['tampil'][0]['id_harga'] ?>" hidden>
                      <a href="EtiketController"><button>SAYA SUDAH MEMBAYAR</button></a>
                      </div>
                </form>
                </li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <script>
    function menuToggleBCA() {
      const toggleMenu = document.querySelector('.menu-bca');
      toggleMenu.classList.toggle('active')
    }

    function menuToggleBRI() {
      const toggleMenu = document.querySelector('.menu-bri');
      toggleMenu.classList.toggle('active')
    }
  </script>
</body>

</html>