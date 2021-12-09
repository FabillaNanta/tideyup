
    <?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <!-- Bootstrap core CSS -->
    <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
  html {
    height: 100%;
        }
  body {
    background-color: white;
    background-image: url('imglogin/register.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;  
    background-size: cover;
        }

</style>
<head>
    <title>Register</title>
        <br>
        <br>
        <br>
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">

  <div class="container col-sm-3 px-4 py-5">
<main class="form-signin">
  <form action="register.php" method="POST">
  <?php include('errors.php'); ?>
    <img class="mb-4" src="imglogin/logo.png" alt="" width="50%" height="50%">
    <p class="font-monospace">Sign up to @tideyup!</p>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="username" name="username" value="<?php echo $username; ?>">
      <label for="floatingInput">Username</label>
    </div>
    <br>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password_2">
      <label for="floatingPassword">Confirm Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="register" value="register">Register</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021. Fabilla & Ita</p>
  </form>
</main>
    </div>

<div class="container col-xxl-8 px-4 py-5">
    <div class="d-grid gap-2">
        <a href="index.php" class="btn btn-light font-monospace" type="button">back</a>
      </div>
    </html>