<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <title>Register — </title>
</head>
<body>



<div class="container">
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <div class="card w-100">
          <div class="card-body">
            <h1 class="register-header text-center mb-4">Form Register</h1>
            <form method="POST" action="" class="row g-3" enctype="multipart/form-data">
              <div class="col-lg-6 input-container">
                <label class="form-label" for="namaDepan">Nama Depan</label>
                <input class="form-control" type="text" placeholder="First Name" name="namaDepan" id="namaDepan">
              </div>
              <div class="col-lg-6 input-container">
                <label class="form-label" for="namaBelakang">Nama Belakang</label>
                <input class="form-control" type="text" placeholder="Last Name" name="namaBelakang" id="namaBelakang">
              </div>

              <!--username & password-->
              <div class="col-lg-12 input-container">
                <label class="form-label" for="userName">Username</label>
                <input class="form-control" type="text" placeholder="Please input username" name="userName" id="userName">
              </div>
              <div class="col-lg-12 input-container">
                <label class="form-label" for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password" onkeyup='check();'>
              </div>
              <div class="col-lg-12 input-container">
                <label class="form-label" for="konfirmasiPassword">Konfirmasi Password</label>
                <input class="form-control" type="password" name="konfirmasiPassword" id="konfirmasiPassword" onkeyup='check();'>
                <span id="message"></span>
              </div>
              <!--cek password-->
              <script>
                    var check = function() {
                    if (document.getElementById('password').value ==
                        document.getElementById('konfirmasiPassword').value) {
                        document.getElementById('message').style.color = 'green';
                        document.getElementById('message').innerHTML = 'password match';
                    } else {
                        document.getElementById('message').style.color = 'red';
                        document.getElementById('message').innerHTML = 'not matching';
                    }
                    }
                    </script>

              <!--jenis kelamin-->
              <div class="col-lg-6 input-container">
                <label for="jenisKelamin" class="form-label form-label-select">Jenis Kelamin</label>
                <select id="jenisKelamin" class="form-select form-control" name="jenisKelamin">
                  <option value="" class="form-select-option" hidden selected></option>
                  <option value="pria" class="form-select-option">Pria</option>
                  <option value="wanita" class="form-select-option">Wanita</option>
                </select>
              </div>
              
              <!--tgl lahir-->
              <div class="col-lg-6 input-container">
                <label class="form-label" for="tgl_lahir">Tanggal Lahir</label>
                <input class="form-control" type="date" name="tgl_lahir" id="tgl_lahir">
              </div>
              <button type="submit" name="submit" class="btn btn-success float-right">Daftar</button>
            </form>
          </div>
          <a href="?view=login" class="btn btn-primary">Dah Punya akun?</a>
        </div>
      </div>
      <div class="col-lg-2"></div>
    </div>
  </div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>