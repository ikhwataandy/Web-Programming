<html>
<head>
<title>Koneksi Database</title>
</head>
<body>
    <h1>Demo koneksi database</h1>
    <?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "db_akademik";
        $koneksi = mysqli_connect($host,$username,$password,$database);
        if($koneksi){
            echo "OKEE bisa";
        }else{
            echo "Gagal Koneksi";
        }
    ?>
</body>
</html>