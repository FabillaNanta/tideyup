 <?php
//menyertakan file program koneksi.php pada register
include ("koneksi.php");
//inisialisasi session
session_start();
 
$error = '';
$validate = '';
//mengecek apakah form registrasi di submit atau tidak
if(isset($_POST['submit']) ){
        // menghilangkan backshlases
        $username = stripslashes($_POST['username']);
        //cara sederhana mengamankan dari sql injection
        $username = mysqli_real_escape_string($con, $username);
        $kode_user = stripslashes($_POST['kode_user']);
        $kode_user = mysqli_real_escape_string($con, $kode_user);
        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $repass   = stripslashes($_POST['repassword']);
        $repass   = mysqli_real_escape_string($con, $repass);
        //cek apakah nilai yang diinputkan pada form ada yang kosong atau tidak
        if(!empty(trim($kode_user)) && !empty(trim($username)) && !empty(trim($password)) && !empty(trim($repass))){
            //mengecek apakah password yang diinputkan sama dengan re-password yang diinputkan kembali
            if($password == $repass){
                //memanggil method cek_nama untuk mengecek apakah user sudah terdaftar atau belum
                if( cek_nama($kode_user,$con) == 0 ){
                    //hashing password sebelum disimpan didatabase
                    $pass  = password_hash($password, PASSWORD_DEFAULT);
                    //insert data ke database
                    $query = "INSERT INTO user_login (username, password, kode_user) VALUES ('$username','$password','$kode_user')";
                    $result   = mysqli_query($con, $query);
                    //jika insert data berhasil maka akan diredirect ke halaman index.php serta menyimpan data username ke session
                    if ($result) {
                        $_SESSION['username'] = $username;
                        
                        header('Location: user/index.php');
                     
                    //jika gagal maka akan menampilkan pesan error
                    } else {
                        $error =  'Fail to register!';
                    }
                }else{
                        $error =  'Username exist!';
                }
            }else{
                $validate = 'Password did not match!!';
            }
             
        }else {
            $error =  'Data still empty!!';
        }
    } 
    //fungsi untuk mengecek username apakah sudah terdaftar atau belum
    function cek_nama($username,$con){
        $kode_user = mysqli_real_escape_string($con, $username);
        $query = "SELECT * FROM user_login WHERE username = '$kode_user'";
        if( $result = mysqli_query($con, $query) ) return mysqli_num_rows($result);
    }
?>
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
    background-image: url('imglogin/sesh.jpg');
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
    <?php if($error != ''){ ?>
                        <div class="alert alert-danger" role="alert"><?= $error; ?></div>
                    <?php } ?>
    <img class="mb-4" src="imglogin/logo.png" alt="" width="50%" height="50%">
    <p class="font-monospace">Sign up to @tideyup!

    <div class="form-floating">
      <input type="text" class="form-control" id="username" placeholder="username" name="username" value="">
      <label for="floatingInput">Username</label>
    </div>
    <br>
    <div class="form-floating">
      <input type="password" class="form-control" id="password" placeholder="Password" name="password">
      <?php if($validate != '') {?>
                            <p class="text-danger"><?= $validate; ?></p>
                        <?php }?>
      <label for="floatingPassword">Password</label>
    </div><br>
    <div class="form-floating">
      <input type="password" class="form-control" id="repassword" placeholder="Password" name="repassword">
      <label for="floatingPassword">Confirm Password</label>
    </div>
    <br><hr>
    <div class="form-floating">
      <input type="password" class="form-control" id="kode_user" placeholder="Password" name="kode_user">
      <label for="floatingPassword">Please input your user code</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit" value="">Register</button>
    <p class="mt-5 mb-3 text-dark">&copy; 2021. Fabilla & Ita</p>
  </form>
</main>
    </div>

<div class="container col-xxl-8 px-4 py-5">
    <div class="d-grid gap-2">
        <a href="index.php" class="btn btn-light font-monospace" type="button">back</a>
      </div>
    </html>