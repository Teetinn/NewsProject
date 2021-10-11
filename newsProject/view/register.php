<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="assets/register.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <title>Register — </title>
</head>
<body>

  <section class="vh-100 bg-image" style="background-image: url('assets/reg-img.jpg'); background-size:contain;">
    <div class="mask d-flex align-items-center h-100 ">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                <form method="POST" action="" enctype="multipart/form-data">

                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2">
                      <div class="form-outline">
                        <input type="text" name="namaDepan" class="form-control form-control-lg" placeholder="Nama Depan"/>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4 pb-2">
                      <div class="form-outline">
                        <input type="text" name="namaBelakang" class="form-control form-control-lg" placeholder="Nama Belakang"/>
                      </div>
                    </div>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" name="userName" class="form-control form-control-lg" placeholder="Username" />
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" />
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="konfirmasiPassword" class="form-control form-control-lg" placeholder="Konfirmasi Password" />
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


                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2">
                      <div class="form-outline">
                        <label class="form-label" for="jenisKelamin">Gender</label>
                        <select id="jenisKelamin" class="form-select form-control" name="jenisKelamin">
                          <option value="" class="form-select-option" hidden selected></option>
                          <option value="pria" class="form-select-option">Pria</option>
                          <option value="wanita" class="form-select-option">Wanita</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4 pb-2">
                      <div class="form-outline">
                        <label class="form-label" for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control form-control-lg" placeholder="Nama Depan"/>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-12 input-container">
                <label class="form-label" for="foto">Profil Foto</label>
                <input class="form-control form-control-file" type="file" name="foto" id="foto">
              </div>

                  <div class="d-flex justify-content-center" style="padding:1rem;">
                    <button type="submit" name="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                  </div>

                  <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="?view=login" class="fw-bold text-body"><u>Login here</u></a></p>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>