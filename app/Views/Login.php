<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <link rel="icon" href="/gambar/plane.png">
  <title>Sign In</title>
  <style>
  body {
    margin: 0;
    padding: 0;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    background-color: #E8F0FF;
    height: 100vh;
    overflow: hidden;
  }

  .center {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
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
    background-color: #FF9900;
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

  .Register {
    margin: 30px 0;
    text-align: center;
    font-size: 16px;
    color: #666666;
  }

  .Register a {
    color: #2691d9;
    text-decoration: none;
  }

  .Register a:hover {
    text-decoration: underline;
  }
  </style>
</head>

<body>
  <div class="center">
    <div class="kembali">
      <a href="/Home">
        <= Kembali</a>
    </div>
    <h1>Sign In</h1>
    <?php if (session()->getFlashdata('msg')) : ?>
    <div class="alert">
      <div class="tag">
        <?= session()->getFlashdata('msg') ?>

      </div>
    </div>
    <?php endif; ?>
    <form action="/loginController/auth" method="post">
      <div class="txtfilled">
        <input type="text" name="username" required class="form-control" id="username">
        <label for="username" class="form-label">
          <img src="/gambar/login/arroba.png" width="30px">
          Username</label>
      </div>
      <div class="txtfilled">
        <input type="password" required name="password" class="form-control" id="password">
        <label for="password" class="form-label">
          <img src="/gambar/login/padlock.png" width="30px">Password</label>
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
    <p>
    <div class="Register">Belum Punya akun ?
      <br></br>
      <a href="/RegisterController">Daftar</a>
    </div>
    </p>
    <div id="pwOut"></div>
  </div>
  <script>
  var pw = document.getElementById('password').value;
  document.getElementById('pwOut').innerHTML = pw;
  </script>
</body>

</html>