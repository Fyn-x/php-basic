<?php 
    require 'functions.php';

    if (isset($_POST["submit"])) {
      if (insert($_POST) > 0) {
        echo "
          <script>
            alert('berhasil');
            document.location.href = 'index.php';
          </script>
        ";
      }else {
        echo "
          <script>
            alert('gagal');
          </script>
        ";
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <h1>Halaman Insert Mahasiswa</h1>
    <form action="" method="post">
      <ul>
        <li>
          <label for="">NIM</label>
          <input type="text" name="nim" required />
        </li>
        <li>
          <label for="">Nama</label>
          <input type="text" name="nama" required/>
        </li>
        <li>
          <label for="">Jurusan</label>
          <input type="text" name="jurusan" required/>
        </li>
        <li>
          <label for="">Email</label>
          <input type="text" name="email" required/>
        </li>
        <button type="submit" name="submit">Submit</button>
      </ul>
    </form>
  </body>
</html>
