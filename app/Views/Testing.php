<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Data Mahasiswa </h2>
    
<div class="judul">
        <h2>E-Ticket</h2>
    </div>
    <div class="container">
        <div class="layout1">
            <img src="<?= $this->data['tampil'][0]['lambang']; ?>" width="150px">
            <div class="class-maskapai">
                <p><?= $this->data['tampil'][0]['kelas']; ?></p>
            </div>
            <tr>
                <br>
                <h4>Kode Booking</h4>
                <div class="kode-maskapai">
                    <h2><?= $this->data['tampil'][0]['id_transaksi']; ?></h2>
            </tr>
        </div>
    </div>
    <div class="layout3">

        <div class="jam">
            <p> <?= date_format($date1, 'H:i'); ?></p>
        </div>
        <div class="bandara-asal">
            <p> <?= $this->data['tampil'][0]['kode_bandara_asal'] ?></p>
        </div>
        <div class="durasi">
            <br>|<br>|<br>|<br><?= $interval->format('%h jam %i menit'); ?><br>|<br>|<br>|<br>v<br>
        </div>
        <div class="bandara-tujuan">
            <p> <?= $this->data['tampil'][0]['kode_bandara_tujuan'] ?></p>
        </div>
        <div class="jam">
            <p> <?= date_format($date2, 'H:i'); ?></p>
        </div>
    </div>
    <div class="detail-penumpang">
        <h3>Penumpang</h3>
        <div class='table-penumpang'>
            <table>
                <tr>
                    <div class="no">
                        <th>No</th>
                    </div>
                    <div class="nama-penumpang">
                        <th>Nama Penumpang</th>
                    </div>
                    <div class="tipe-tiket">
                        <th>Tipe Tiket</th>
                    </div>
                    <div class="no-tiket">
                        <th>No Tiket</th>
                    </div>
                    <div class="no-penerbangan">
                        <th>No Penerbangan</th>
                    </div>
                    <div class="bagasi">
                        <th>Bagasi</th>
                    </div>
                </tr>
                <tr>
                    <td>1</td>
                    <td><?= $this->data['tampil'][0]['nama_penumpang']; ?></td>
                    <td><?= $this->data['tampil'][0]['kelompok_penumpang']; ?></td>
                    <td><?= $this->data['tampil'][0]['title']; ?></td>
                    <td><?= $this->data['tampil'][0]['id_transaksi']; ?></td>
                    <td>20Kg</td>
                </tr>
        </div>
    </div>
    </table>
</body>
</html>