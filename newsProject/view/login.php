<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - newsProject</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
</head>
<body>
    <!--NavBar-->
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Berita Pasti Bisa</span>
  </div>
</nav>
    <!--form login-->
    <div class="container">
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6 card-container">
        <div class="card w-100">
          <div class="card-body">
            <form method="POST" action="" id="loginForm">
              <div class="">
                <label class="form-label mt-4" for="userName">Username</label>
                <input class="form-control" type="text" placeholder="please enter your username" name="userName"
                  id="userName">
              </div>
              <div class="">
                <label class="form-label mt-4" for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password">
              </div>
              <button name="submit" type="submit" class="btn btn-primary mt-4">Login</button>
            </form>
          </div>
          <a href="register.php" class="link">Belum punya akun?</a>
        </div>
      </div>
      <div class="col-lg-3"></div>
    </div>

  </div>
</body>
</html>