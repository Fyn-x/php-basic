<?php 
  require 'functions.php';
  $mahasiswa = read("SELECT * FROM mahasiswa");

  if (isset($_POST["search"])) {
    $mahasiswa = search($_POST["keyword"]);
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Admin</title>
  </head>
  <body>
    <h1>DATA MAHASISWA</h1>
    <a href="insert.php">tambah data</a>

    <form action="" method="post">
      <input type="text" name="keyword" placeholder="Masukan Keyword">
      <button name="search" type="submit">Cari</button>
    </form>

    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>Nim</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
      <?php foreach ($mahasiswa as $mhs):?>
        
      <tr>
        <td><?php echo $mhs["nim"] ?></td>
        <td><?php echo $mhs["nama"] ?></td>
        <td><?php echo $mhs["jurusan"] ?></td>
        <td><?php echo $mhs["email"] ?></td>
        <td>
          <a href="update.php?nim=<?php echo $mhs['nim'] ?>">Edit</a>
          |
          <a href="delete.php?nim=<?php echo $mhs['nim'] ?>" onclick="return confirm('Yakin')">Delete</a>
        </td>
      </tr>
      <?php endforeach ?>      
    </table>
  </body>
</html>
