<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST["nama"];
  $alamat = $_POST["alamat"];
  $telepon = $_POST["telepon"];
  $email = $_POST["email"];
  $instansi = $_POST["instansi"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Input Data Yang Dimasukkan</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="blob.css">
</head>

<body>
  <div class="blob blob1"></div>
  <div class="blob blob2"></div>
  <div class="blob blob3"></div>
  <div class="tampung">
    <div class="card-tampung">
      <h2>Selamat Datang!</h2>
      <p>Terima Kasih Telah Mengisi Formulir Pendaftaran</p>
      <div class="tombol">
        <a href="index.php"><button>Kembali</button></a>
      </div>
      <table style="width:100%">
        <tr>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Nomor Telepon</th>
          <th>Email</th>
          <th>Asal Instansi</th>
        </tr>
        <tr>
          <td><?php echo $nama; ?></td>
          <td><?php echo $alamat; ?></td>
          <td><?php echo $telepon; ?></td>
          <td><?php echo $email; ?></td>
          <td><?php echo $instansi; ?></td>
        </tr>
      </table>
    </div>
  </div>

</body>

</html>