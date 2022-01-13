<?php 
    $connection = mysqli_connect('localhost', 'root', '', 'phpdasar');
    
    function read($query){
        global $connection;
        $data_mhs = mysqli_query($connection, $query);

        $dataset = [];

        while ($data = mysqli_fetch_assoc($data_mhs)) {
            $dataset[] = $data;
        }
        return $dataset;
    }

    function insert($data){
        global $connection;

        $nim = htmlspecialchars($data["nim"]);
        $nama = htmlspecialchars($data["nama"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $email = htmlspecialchars($data["email"]);

        $query = "INSERT INTO mahasiswa VALUES
                ('$nim', '$nama', '$jurusan', '$email')";
        
        mysqli_query($connection, $query);
        
        return mysqli_affected_rows($connection);
    }
    function update($data){
        global $connection;

        $nim = htmlspecialchars($data["nim"]);
        $nama = htmlspecialchars($data["nama"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $email = htmlspecialchars($data["email"]);

        $query = "UPDATE  mahasiswa SET                
                nama = '$nama',
                jurusan = '$jurusan',
                email = '$email' WHERE nim = $nim
            ";
        
        mysqli_query($connection, $query);
        
        return mysqli_affected_rows($connection);
    }

    function delete($data){
        global $connection;
        $query = "DELETE FROM mahasiswa WHERE nim = $data";
        mysqli_query($connection, $query);

        return mysqli_affected_rows($connection);
    }

    function search ($keyword){
        $query = "SELECT * FROM mahasiswa WHERE 
            nim LIKE '%$keyword%' OR
            nama LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%' OR
            email LIKE '%$keyword%'"           
            ;

        return read($query);
    }
 ?>