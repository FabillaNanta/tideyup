<!DOCTYPE html>
<html lang="en">
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<head>
  <title>TIDEYUP</title>

  <style>
    html {
      height: 100%;
    }

    body {
      background-color: white;
      background-image: url('imglogin/image.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
  </style>
</head>

<body>

  <br>
  <center>
    <img class="img-fluid" src="imglogin/logo.png" width="20%" height="20%" class="d-inline-block align-top-center" alt="">
  </center>
  <!-- notifikasi -->
  <center>
    <?php
    if (isset($_GET['pesan'])) {
      if ($_GET['pesan'] == "gagal") {
        echo "Login Failed! Wrong Username/Password!";
      } else if ($_GET['pesan'] == "logout") {
        echo "Successfully Logout";
      } else if ($_GET['pesan'] == "belum_login") {
        echo "You have to login to proceed!";
      }
    }
    ?>
  </center>


  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <form method="post" action="cek_login.php">
          <div class="mb-3 font-monospace">
            <label for="text" class="form-label">Your User Code</label>
            <input type="text" name="kode_user" class="form-control" id="kode_user" aria-describedby="text">
          </div>
          <div class="mb-3 font-monospace">
            <label for="text" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="text" aria-describedby="text">
            <div id="text" class="form-text">Make sure the spelling is correct..</div>
          </div>
          <div class="mb-3 font-monospace">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3 form-check font-monospace">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember me</label>
          </div>
          <button type="submit" value="LOGIN" class="btn btn-primary font-monospace">Login</button>
        </form>
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3 font-monospace">tideyup</h1>
        <p class="lead text-white font-monospace">Your personal digital recording exclusively for ocean waves observation. To keep every data of yours tidy and structured.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a href="index.php" class="btn btn-primary btn-lg px-4 me-md-2 font-monospace">Login</a>
          <a class="btn btn-outline-warning btn-lg px-4 font-monospace" href="register.php">Register</a>
          <a class="btn btn-outline-secondary btn-lg px-4 font-monospace" href="homeall.html">Learn More!</a>
        </div>
      </div>
    </div>
  </div>

</body>

</html>

</body>

</html>