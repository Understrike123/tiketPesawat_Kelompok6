<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
  <link rel="icon" href="/gambar/plane.png">
    <title>Register</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            background-color: #E8F0FF;
            height: 1000px;
            overflow: auto;
        }

        .center {
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 600px;
            background: white;
            border: 1pt solid black;
            border-radius: 1px;

        }

        .center h1 {
            text-align: center;
            padding: 0 0 20px 0;
        }

        .center form {
            padding: 0 40px;
            box-sizing: border-box;
        }

        form .txtfilled {
            position: relative;
            margin: 30px 0;
        }

        .txtfilled input {
            width: 100%;
            padding: 0 5px;
            height: 40px;
            font-size: 16px;
            background-color: #d9e3f8e9;
            outline: none;
        }

        .txtfilled label {
            position: absolute;
            top: 50%;
            left: 5px;
            color: #adadad;
            transform: translateY(-50%);
            font-size: 16px;
            pointer-events: none;
            transition: .5s;
        }

        .txtfilled span::before {
            content: '';
            position: absolute;
            top: 40px;
            left: 0;
            width: 0%;
            height: 2px;
            background-color: #2691d9;

        }

        .txtfilled input:focus~label,
        .txtfilled input:valid~label {
            top: -15px;
            color: #2691d9;
        }

        .txtfilled input:focus~span::before,
        .txtfilled input:valid~span::before {
            width: 100%;
        }

        .forgotpass {
            margin: -5px 0 20px 5px;
            color: #a6a6a6;
            cursor: pointer;
        }

        .forgotpass:hover {
            text-decoration: underline;
        }

        button[type="submit"] {
            width: 100%;
            height: 50px;
            border: 1px solid;
            background-color: #2FD12C;
            border-radius: 30px;
            font-size: 16px;
            color: white;
            font-weight: 700;
            cursor: pointer;
            outline: none;
        }

        button [type="submit"] {
            border-color: #2691d9;
            transition: .5s;
        }

        .ketentuan {
            text-align: center;
        }

        small {
            color: black;
            font-weight: 500;
            font-family: arial;
            font-size: 9pt;
        }
    </style>
</head>

<body>
    <div class="center">
        <h1>Register</h1>
        <form action="/RegisterController/save" method="post">
            <div class="txtfilled">
                <input type="text" required name="Fname" class="input-data" id="InputFname">
                <label for="InputFname" class="label-data">Masukkan nama depan: </label>
            </div>
            <div class="txtfilled">
                <input type="text" name="Bname" required class="input-data" id="InputBname">
                <label for="InputBname" class="label-data">Masukkan nama belakang: </label>
                <small>Jika tidak ada, isi dengan nama depan</small>
            </div>
            <div class="txtfilled">
                <input type="email" name="email" required class="input-data" id="email">
                <label for="InputEmail" class="label-data">Masukkan Email: </label>

            </div>
            <div class="txtfilled">
                <input type="text" name="username" required class="input-data" id="username">
                <label for="InputUsername" class="label-data">Username: </label>

            </div>
            <div class="txtfilled">
                <input type="password" required name="password" class="input-data" id="password">
                <label for="InputPassword" class="label-data">Masukkan password: </label>
                <small>Minimal 8 karakter</small>
            </div>
            <div class="txtfilled">
                <input type="password" required name="confpassword" class="input-data" id="confpassword">
                <label for="Inputconfpassword" class="label-data">Konfirmasi password: </label>

            </div>
            <div class="txtfilled">
                <input type="number" required name="no_telepon" class="input-data" id="no_telepon">
                <label for="InputnoTelepon" class="label-data">Masukkan nomor telepon: </label>
            </div>
            <div class="validasi">
                <?php if (isset($validation)) : ?>
                    <div class="alert"><?= $validation->listErrors() ?></div>
                <?php endif; ?>
            </div>
            <button type="submit" class="button">Register</button>
            <br></br>
            <div class="ketentuan">
                <small>Dengan mendaftar kamu menyetujui</small><br>
                <small>Kebijakan Privasi dan Ketentuan & Syarat kami.</small>
                <center><br>
                    <small>Masuk jika sudah punya akun</small>
                </center>
                <br><a href="/LoginController/">Masuk</a> </br>
                <br></br>
            </div>
        </form>
    </div>

    </div>




</body>

</html>