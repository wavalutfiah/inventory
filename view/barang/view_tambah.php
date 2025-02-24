<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Data Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <h1>Halaman Tambah Data Barang</h1>
    <form action="proses_tambah.php"method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID_BARANG</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_barang">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">ID_JENIS</label>
    <br>
    <input type="text" class="form-control" id="exampleInputPassword"name="id_jenis">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">HARGA</label>
    <br>
    <input type="text" class="form-control" id="exampleInputPassword"name="harga">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">STOK</label>
    <br>
    <input type="text" class="form-control" id="exampleInputPassword"name="stok">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">NAMA_BARANG</label>
    <br>
    <input type="text" class="form-control" id="exampleInputPassword"name="nama_barang">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>