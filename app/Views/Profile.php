<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="/css/profile.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">

  <link rel="icon" href="/gambar/plane.png">
  <title>Profile</title>

</head>

<body>
  <nav class="navbar">
    <div class="navbar-left">
      <div class="logo"></div>
      <ul>
        <li><a href="/HomeAccController">Home</a></li>
      </ul>
    </div>  
  </nav>
  <div class="wrapper">
    <div class="left">
      <img src="/gambar/white.jpg" alt="user" width="100" height="150">
      <h4><?= $nama_lengkap ?></h4>
      <p><?= session()->get('username') ?></p>
    </div>
    <div class="right">
      <div class="info">
        <h3>Information</h3>
        <div class="info_data">
          <div class="data">
            <h4>Email</h4>
            <p><?= session()->get('email') ?></p>
          </div>
          <div class="data">
            <h4>Phone</h4>
            <p><?= session()->get('no_telepon') ?></p>
          </div>
        </div>
      </div>

      <div class="projects">
        <h3>Status</h3>
        <div class="projects_data">
          <div class="data">
            
            <p>Lorem ipsum dolor sit amet.dolor sit amet.</p>
          </div>
          
        </div>
      </div>

      
    </div>
  </div>
  </div>

</body>

</html>