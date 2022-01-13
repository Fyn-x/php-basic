<?php 
    require 'functions.php';

    $nim = $_GET['nim'];
    $mhs = read("SELECT * FROM  mahasiswa WHERE nim = $nim");

    if (isset($_POST["update"])) {
      if (update($_POST) > 0) {
        echo "
          <script>
            alert('data berhasil diubah');
            document.location.href = 'index.php';
          </script>
        ";
      }else {
        echo "
          <script>
            alert('data gagal diubah');
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
    <h1>Halaman Update Mahasiswa</h1>
    <form action="" method="post">
      <ul>
          <input type="hidden" name="nim" value= "<?php echo $mhs[0]['nim'] ?>"/>
        <li>
          <label for="">Nama</label>
          <input type="text" name="nama" value= "<?php echo $mhs[0]['nama'] ?>" required/>
        </li>
        <li>
          <label for="">Jurusan</label>
          <input type="text" name="jurusan" value= "<?php echo $mhs[0]['jurusan'] ?>" required/>
        </li>
        <li>
          <label for="">Email</label>
          <input type="text" name="email" value= "<?php echo $mhs[0]['email'] ?>" required/>
        </li>
        <button type="submit" name="update">Update</button>
      </ul>
    </form>
  </body>
</html>
