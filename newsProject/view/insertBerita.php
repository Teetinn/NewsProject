<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita pasti bisa</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"/>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&family=Staatliches&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/main.css">
</head>
<body>
<div class="row ctr-container-header">
    <div class="container-logo col-3">
    </div>
    <div class="container-header col-6">
      <h1 class="header-berita">PEM-WEB NEWS</h1>
    </div>
    <div class="col-3">
    </div>
</div>

<div class="row">
<div class="col-4"></div>
<div class="col-4">
    <div class = "container insert-data-container">
    
                    <form class="insert-form" action="" method="POST" enctype="multipart/form-data">
                          <div class="col mb-3">
                              <label for="judul" class="form-label">Judul Berita</label>
                              <input type="text" class="form-control input-box" id="judul" name="judul" value="" placeholder="Insert Judul Berita" >
                          </div>
                  
                        <div class="mb-3">
                        <label for="kategori" class="form-label form-label-select">Kategori Berita</label>
                          <select id="kategori" class="form-select form-control" name="kategori">
                          <option value="" class="form-select-option" hidden selected></option>
                          <option value="national" class="form-select-option">National</option>
                          <option value="bisnis" class="form-select-option">Bisnis</option>
                          <option value="politik" class="form-select-option">Politik</option>
                          <option value="olahraga" class="form-select-option">Olahraga</option>
                          <option value="ekonomi" class="form-select-option">Ekonomi</option>
                          <option value="hiburan" class="form-select-option">Hiburan</option>
                        </select>
                        </div>

                        <div class="mb-3">
                            <label for="penulis" class="form-label">Penulis</label>
                            <input type="text" class="form-control input-box" id="penulis" name="penulis" placeholder="Penulis Berita" >
                        </div>

                        <div class="mb-3">
                            <label for="konten" class="form-label">Konten Berita</label>
                            <textarea type="text" class="form-control" id="konten" name="konten" placeholder="konten Berita" cols="40" rows="5"> </textarea>
                        </div>

                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal Publikasi</label>
                            <input type="date" class="form-control input-box" id="tanggal" name="tanggal" placeholder="tanggal Berita" >
                        </div>
                      
                        <div class="mb-3">
                          <label class="form-label" for="gambar">Gambar</label>
                          <input type="text" class="form-control input-box" id="gambar" name="gambar" placeholder="Link Gambar Berita" >
                        </div>
                          <button type="submit" name="upload" class="btn btn-primary upload-btn">Upload</button> 
                        </form>
                        
                        <form action="?view=admin" method="POST">
                          <button type="submit" name="back" class="btn btn-danger cancel-btn">Cancel</button>
                        </form>
             
         </div> 
</div>
<div class="col-4"></div>
</div>
</body>
</html>