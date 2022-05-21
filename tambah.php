<?php
  include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Halaman Tambah data</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>

  <section class="row">
    <div class="col-md-6 offset-md-3 align-self-center"> 
      <h1 class="text-center mt-4">Form Tambah Data</h1>
      <form method="POST">
        <div class="mb-3">
          <label for="inputNis" class="form-label">Nomor</label>
          <input type="number" class="form-control" id="inputNis" name="nomor" placeholder="Masukan Nomor Surat">
        </div>
        <div class="mb-3">
          <label for="inputNama" class="form-label">Tanggal</label>
          <input type="date" class="form-control" id="inputNama" name="tanggal" placeholder="Masukan Tanggal Surat">
        </div>
        <div class="mb-3">
          <label for="inputKelas" class="form-label">Judul</label>
          <input type="text" class="form-control" id="inputKelas" name="judul" placeholder="Masukan Judul Surat">
        </div>
        <input name="daftar" type="submit" class="btn btn-primary" value="Tambah">
        <a href="index.php" type="button" class="btn btn-info text-white">Kembali</a>
      </form>
    </div>
  </section>

  <?php
    
    // Buat kondisi jika tombol data di klik
    if(isset($_POST['daftar'])){
      // Membuat variable setiap field inputan agar kodingan lebih rapi.
      $nomor = $_POST['nomor'];
      $tanggal = $_POST['tanggal'];
      $judul = $_POST['judul'];

      // Membuat Query
      $query = "INSERT INTO tb_suratkeluar (nomor, tanggal, judul) VALUES('".$nomor."', '".$tanggal."', '".$judul."')";

      $result = mysqli_query($koneksi, $query);

      if($result){
        header("location: index.php");
      } else {
        echo "<script>alert('Data Gagal di tambahkan!')</script>";
      }

    }    

  ?>

</body>
</html>