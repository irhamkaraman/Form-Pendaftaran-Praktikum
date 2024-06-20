# Formulir Pendaftaran Praktikum Pemrograman Web Semester 2

Selamat datang di repositori GitHub untuk Formulir Pendaftaran Praktikum Pemrograman Web Semester 2. Repositori ini berisi kode sumber untuk formulir pendaftaran praktikum yang dapat digunakan untuk mendaftar ke kegiatan praktikum pemrograman web.

## Tautan Repositori

[Form-Pendaftaran-Praktikum](https://github.com/irhamkaraman/Form-Pendaftaran-Praktikum.git)

## Deskripsi

Proyek ini adalah sebuah formulir pendaftaran yang dirancang untuk mengumpulkan informasi dari peserta yang ingin mengikuti praktikum pemrograman web. Formulir ini dibuat menggunakan HTML dan CSS, dengan beberapa elemen desain yang menarik untuk meningkatkan pengalaman pengguna.

## Fitur

- **Nama:** Input untuk mengumpulkan nama lengkap peserta.
- **Alamat:** Input untuk mengumpulkan alamat tempat tinggal peserta.
- **Nomor Telepon:** Input untuk mengumpulkan nomor telepon peserta.
- **Email:** Input untuk mengumpulkan alamat email peserta.
- **Asal Instansi:** Input untuk mengumpulkan informasi mengenai asal instansi peserta.

## Tampilan Formulir

Formulir ini menggunakan beberapa file CSS untuk memberikan gaya pada elemen-elemen input. Berikut adalah tampilan formulir:

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulir Pendaftaran Praktikum Pemrograman Web Semester 2</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="blob.css" />
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
          <input
            type="text"
            placeholder="Masukkan Nama Anda..."
            name="nama"
            class="input" />
        </div>
        <div class="coolinput">
          <label for="input" class="text">Alamat:</label>
          <input
            type="text"
            placeholder="Masukkan Alamat Anda..."
            name="alamat"
            class="input" />
        </div>
        <div class="coolinput">
          <label for="input" class="text">Nomor Telepon:</label>
          <input
            type="number"
            placeholder="Masukkan Nomor Telepon Anda..."
            name="telepon"
            class="input" />
        </div>
        <div class="coolinput">
          <label for="input" class="text">Email:</label>
          <input
            type="email"
            placeholder="Masukkan Email Anda..."
            name="email"
            class="input" />
        </div>
        <div class="coolinput">
          <label for="input" class="text">Asal Instansi:</label>
          <input
            type="text"
            placeholder="Masukkan Asal Intansi Anda..."
            name="instansi"
            class="input" />
        </div>
        <button>Kirim</button>
      </form>
    </div>
  </body>
</html>
```
