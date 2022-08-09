<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/css/MetodeBayar.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="/plane.png">
    <title>SWINGS.com</title>
    <style>
        body {
            position: relative;
            width: auto;
            height: 600px;
            font-family: sans-serif;
            background: #e8f0ff;
            overflow: auto;
            font-size: auto;
        }

        h3 {
            border-bottom: 1pt solid black;
            margin: 5px;
        }

        .navbar {
            width: auto;
            height: 50px;
            background: rgb(9, 30, 68);
            border-radius: 2px;
        }

        .navbar-right {
            float: right;
            width: 290px;
            padding-right: 10px;
        }

        .navbar-left {
            float: left;
            width: 290px;
            padding-top: 10pt;
            padding-left: 10pt;
            font-family: sans-serif;
            color: white;
            font-size: 24px;
            font-weight: 500;
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
            float: right;
            list-style: none;
            margin: 0 20% 0 0;
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
            font-size: 24pt;
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

        /* 
        .item1 {
            grid-area: menu;
            width: auto;
            height: 25px;
            margin: 20px -150px 20px 100px;
            background: white;
            border: none;
            box-sizing: content-box;
            border-radius: 20px;
        }

        .item1 .detail {
            text-align: center;
            font-size: 14pt;
        }

        .item2 {
            grid-area: right;
        }

        .item2 button {
            background-color: #2196f3;
            border: none;
            color: white;
            padding: 12px 28px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 24px;
            margin-left: 20pt;
            border-radius: 20pt;
        }

        .grid-container {
            display: grid;
            grid-template-areas: "menu menu right";
            grid-gap: 0px;
            padding: 10px;
        }

        .grid-container>div {
            text-align: center;
            padding: 20px 0;
            font-size: 30px;
        } */
        .styling {
            width: auto;
            height: 50px;
            background-color: #B5CEFF;

        }

        .container {
            width: auto;
            margin: 10pt 20%;
            height: 500px;
            top: 1500px;
            background: #e8f0ff;

            box-sizing: content-box;


            display: grid;
            grid-template-areas:
                'info detail'
                'info none'
                'penumpang penumpang';
            grid-gap: 0px;
            padding: 5px;
        }

        .layout1 {
            grid-area: info;
            width: 50%;
            height: 200pt;
            margin-top: 5%;
            grid-gap: 5px;
            padding: 1px;
            background-color: white;
            text-align: center;
        }

        .layout p {
            padding: 20%;
            border: 1pt solid white;
        }

        .layout3 {
            grid-area: detail;
            width: 50%;
            background-color: white;
            padding: 1px;
            grid-gap: 1px;
            font-weight: bold;

            text-align: center;
            padding-top: 2%;
            background: #e8f0ff;
        }

        .kode-maskapai {
            font-size: large;
            color: blue;
        }

        .detail-penumpang {
            grid-area: penumpang;
            height: 100pt;
            background-color: white;
            width: 85%;
            padding: 5px;
            grid-gap: 1px;

        }

        .judul {
            width: auto;
            height: 60px;
            left: 0px;
            padding-top: 2px;
            padding-left: 20pt;
            background: #B5CEFF;
            border-radius: 0px 90px 0px 0px;
            margin: 23pt 20%;

        }

        .metode h2 {
            margin: 0 20px 20px 10px;
        }

        .h3 {
            font-size: small;
        }

        p {
            font-size: smaller;
        }

        input[type=submit] {
            font-size: 15px;
            margin-top: -300cm;
            margin-bottom: 50px;
            margin-left: 25cm;
            font-family: sans-serif;
            background: #22a4cf;
            color: white;
            border: white 3px solid;
            border-radius: 5px;
            padding: 11px 20px;
        }

        input[type=submit]:hover {
            opacity: 0.9;
        }

        table {
            width: auto;
            border: 0px;
            background-color: white;
        }

        .jam {
            font-size: large;
            text-align: left;
        }

        .hari {
            font-size: small;
            text-align: left;
        }

        .bandara-asal {
            font-size: larger;
            text-align: right;
        }

        .bandara-tujuan {
            font-size: larger;
            text-align: right;
        }

        .durasi {
            font-size: small;
            text-align: center;
            color: blue;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        table {
            width: 100%;
        }
    </style>
</head>
<?php  //$this->data[0]; 
$date1 = date_create($this->data['tampil'][0]['waktu_berangkat']);
$date2 = date_create($this->data['tampil'][0]['waktu_sampai']);

$interval = date_diff($date1, $date2, true);
?>

<body>
    <nav class="navbar-menu">
        <div class="navbar">
            <div class="navbar-left">
                SWINGS.com
            </div>

            <div class="navbar-right">
                <div class="logo">
                </div>
            </div>
        </div>
    </nav>
    <div class="styling"></div>
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

    </div>
    <a href="HomeAccController">
        <input type="submit" value="Back">
    </a>

</body>

</html>