<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulir Pendaftaran Praktikum Pemrograman Web Semester 2</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="blob.css">
</head>

<body>
  <div class="blob blob1"></div>
  <div class="blob blob2"></div>
  <div class="blob blob3"></div>
  <div class="container">
    <h2>Formulir Pendaftaran Praktikum Pemrograman Web Semester 2</h2>
    <form action="proses.php" method="POST">
      <div class="coolinput">
        <label for="input" class="text">Nama:</label>
        <input type="text" placeholder="Masukkan Nama Anda..." name="nama" class="input" />
      </div>
      <div class="coolinput">
        <label for="input" class="text">Alamat:</label>
        <input type="text" placeholder="Masukkan Alamat Anda..." name="alamat" class="input" />
      </div>
      <div class="coolinput">
        <label for="input" class="text">Nomor Telepon:</label>
        <input type="number" placeholder="Masukkan Nomor Telepon Anda..." name="telepon" class="input" />
      </div>
      <div class="coolinput">
        <label for="input" class="text">Email:</label>
        <input type="email" placeholder="Masukkan Email Anda..." name="email" class="input" />
      </div>
      <div class="coolinput">
        <label for="input" class="text">Asal Instansi:</label>
        <input type="text" placeholder="Masukkan Asal Intansi Anda..." name="instansi" class="input" />
      </div>
      <button>Kirim</button>
    </form>
  </div>
</body>

</html>