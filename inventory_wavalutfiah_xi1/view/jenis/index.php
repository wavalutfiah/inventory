<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../barang/index.php">barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../jenis/index.php">jenis</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<h1>Data Jenis</h1>
<a href="view_tambah.php" class="btn btn-info"> <i class="fa-solid fa-plus"></i>Tambah jenis baru</a>
<br></br>
<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th class= "table-danger" scope="col">no</th>
      <th class= "table-danger" scope="col">id_jenis</th>
      <th class= "table-danger" scope="col">nama_jenis</th>
      <th class= "table-danger" scope="col">aksi</th>
    </tr>
  </thead>
<?php 

use LDAP\Result;
include '../../config/koneksi.php';
$query =mysqli_query($conn, "SELECT * FROM jenis");
$no=1;
if(mysqli_num_rows(result: $query)){
while($result=mysqli_fetch_assoc(result: $query)){
?>
<tr>
    <td><?php echo $no;?></td>
    <td><?php echo $result['id_jenis']?></td>
    <td><?php echo $result['nama_jenis']?></td>
  <td>
        <a href= "view_edit.php?id_jenis=<?php echo $result['id_jenis']?>" class="btn btn-primary" ><i class="fa-solid fa-pen-to-square"></i>edit</a>
        </td>
    </tr>
    <?php 
    $no++;

}
}else{
    echo "data kosong";
}
?>
</form>
</table>
</div>
</body>
</html>