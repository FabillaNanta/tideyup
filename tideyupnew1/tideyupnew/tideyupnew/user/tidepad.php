
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tidepad</title>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="datepicker/js/bootstrap-datepicker.js"></script>
  <link rel="stylesheet" href="datepicker/css/datepicker.css">

  <nav class="navbar sticky-top navbar-light bg-light">
    <a class="navbar-brand mx-auto" align="center" href="index.php">
      <img src="img/logo.png" width="70%" height="70%" class="d-inline-block align-top" alt="">
    </a>
  </nav>
</head>

<body>
  <style>
    html {
      height: 100%;
    }

    body {
      background-color: #393644;
      background-image: url('img/tidepad.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
  </style>
  
  <form action="proses_insert.php" method="POST">
    <div class="container col-md px-4 py-5">
      <div class="card font-monospace">
        <div class="card-header">
          fill in your observation data below..
        </div>
        <div class="card-body">
          <div class="row g-3 align-items-center">
            <div class="col-auto">
              <label for="date" class="col-form-label">Date</label>
            </div>
            <div class="col-md">
              <input type="date" id="text" class="form-control" aria-describedby="text" name="date" value="">
            </div>
            <div class="col-auto">
              <label for="date" class="col-form-label">Your Data ID</label>
            </div>
            <div class="col-md">
              <input type="number" id="text" class="form-control" aria-describedby="text" name="id_data" value="">
            </div>
            <div class="col-auto">
              <label for="date" class="col-form-label">Time</label>
            </div>
            <div class="col-md">
              <input type="time" id="text" class="form-control" aria-describedby="text" name="time" value="">
            </div>
          </div><br>
          <div class="col-auto">
            <label for="date" class="col-form-label">Location</label>
          </div>
          <div class="col-md">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="location" value=""></textarea>
          </div>
          <hr><br>
          <div class="col-auto">
            <label for="date" class="col-form-label">Beach Orientation</label>
          </div>
          <div class="col-md">
            <input type="text" id="text" class="form-control" aria-describedby="text" name="beach_orientation" value="">
          </div>
          <br>
          <div class="col-auto">
            <label for="date" class="col-form-label">Incoming Wave Angle</label>
          </div>
          <div class="col-md">
            <input type="text" id="text" class="form-control" aria-describedby="text" name="incoming_wave_angle" value="">
          </div>
          <br>
          <div class="col-auto">
            <label for="date" class="col-form-label">Depth</label>
          </div>
          <div class="col-md">
            <input type="text" id="text" class="form-control" aria-describedby="text" name="depth" value="">
          </div><br>
          <div class="col-auto">
            <label for="date" class="col-form-label">Tidal Condition</label>
          </div>
          <div class="col-md">
            <input type="text" id="text" class="form-control" aria-describedby="text" name="tidal_condition" value="">
          </div>
          <br>
          <div class="col-auto">
            <label for="date" class="col-form-label">Wind Condition</label>
          </div>
          <div class="col-md">
            <input type="text" id="text" class="form-control" aria-describedby="text" name="wind_condition" value="">
          </div>
          <br>
          <hr>
          <div class="col-auto">
            <label for="date" class="col-form-label">notes</label>
          </div>
          <div class="col-md">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="notes" value=""></textarea>
          </div>

        </div>
      </div>
      <br>
      <div class="card text-center bg-warning text-white font-monospace">
        <div class="card-header">
          warning!
        </div>
        <div class="card-body">
          <h5 class="card-title">please kindly re-check your observation data before submitting</h5>
          <input type="submit" class="btn btn-success" value="submit" name="submit">
        </div>
        <div class="card-footer text-white font-monospace">
          you can view your data on the <a href="reviewdata.php"><em>review session</em></a> feature
        </div>
  </form>
  </div>
  <br>
  <div class="d-grid gap-2">
    <a href="index.php" class="btn btn-light font-monospace" type="button">home</a>
  </div>
  </div>