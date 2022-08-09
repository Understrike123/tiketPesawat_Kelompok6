<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/css/Refund.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="/gambar/plane.png">
    <title>SWINGS.com</title>

</head>

<body>
    <nav class="navbar">
        <div class="navbar-left">
            <div class="Judul">SWINGS.com</div>
        </div>
        <div class="navbar-right">
            <ul>
                <li>
                    <img src="https://cdn-icons.flaticon.com/png/128/2102/premium/2102633.png?token=exp=1641823828~hmac=0ea66dd49c4f772b4e2993d861f32230" width="40px">
                </li>
            </ul>
        </div>
    </nav>
<?php $date1 = date_create($this->data['tampil'][0]['waktu_berangkat']);
      $date2 = date_create($this->data['tampil'][0]['waktu_sampai']);

      $interval = date_diff($date1, $date2, true);
?>
    <div class="container">
        <div class="atas1">
            <div class="atas">
                <p class="kol16">Kode Boking</p>
            </div>
            <div class="atas">
                <p class="kol66"><?= $this->data['tampil'][0]['id_transaksi'] ?></p>
            </div>
        </div>
        <div class="card-penerbangan">
            <img src="<?= $this->data['tampil'][0]['lambang'] ?>" width="150px" outline="black" class="kol1"><br>
            <p class="kol6"><?= $this->data['tampil'][0]['nama'] ?></p>
            <div class="kol2">
                <p><?= $this->data['tampil'][0]['kode_bandara_asal'] ?></p>
            </div>
            <div class="kol3">
                <p>></p>
            </div>
            <div class="kol4">
                <p><?= $this->data['tampil'][0]['kode_bandara_tujuan'] ?></p>
            </div>
            <div class="kol11">
                <p>|</p>
            </div>
            <div class="kol12">
                <p><?= date_format($date1, 'l,d F Y'); ?></p>
            </div>
            <div class="kol13">
                <p><?= date_format($date1, 'H:i'); ?></p>
            </div>
        </div> 
        <form action="<?= base_url(); ?>/del" method="post">
            <input type="text" name="hasil" value="<?= $this->data['tampil'][0]['idtransaksidetail']; ?>" hidden>
            <input type="text" name="transaksi" value="<?= $this->data['tampil'][0]['id_transaksi']; ?>" hidden>
                <a href="HomeAccController"> <button class="kol7" name="refund" onclick="myFunction()">Refund &raquo;</button> </a>
        </form>
        
    </div>
    <script>
        function myFunction() {
            var r=confirm("Anda Yakin?  ");
            if (r==true)
            {
                x="You pressed OK!";
                alert("Database Berhasil diperbarui");
            }
            else    
            {
                x="You pressed Cancel!";
            }
        }
    </script>
</body>

</html>