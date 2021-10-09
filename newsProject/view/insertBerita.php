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
</head>
<body>
<div class = "container">
        <div class="row justify-content-sm">
            <div class="col-sm-4">
                <form action="" method="POST" enctype="multipart/form-data">
                      <div class="col">
                          <label for="judul" class="form-label">Judul Berita</label>
                          <input type="text" class="form-control" id="judul" name="judul" value="" placeholder="Please Insert Judul Berita" >
                      </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori Berita</label>
                        <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori" >
                    </div>
                    <div class="mb-3">
                        <label for="penulis" class="form-label">Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Penulis Berita" >
                    </div>
                    <div class="mb-3">
                        <label for="konten" class="form-label">Konten Berita</label>
                        <input type="text" class="form-control" id="konten" name="konten" placeholder="konten Berita" >
                    </div>
                      <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal Publikasi</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="tanggal Berita" >
                    </div>
                   
                    <div class="mb-3">
                      <label class="form-label" for="gambar">Gambar</label>
                      <input type="text" class="form-control" id="gambar" name="gambar" placeholder="Link Gambar Berita" >
                    </div>
                      <button type="submit" name="upload" class="btn btn-primary float-right">Upload</button> 
                </form>
                <form action="?view=admin" method="POST">
                  <button type="submit" name="back" class="btn btn-danger">Cancel</button>
                </form>
           </div>
        </div>
</div> 
</body>
</html>