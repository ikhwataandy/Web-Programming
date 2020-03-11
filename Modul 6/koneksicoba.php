<html>
<head>
<title>Koneksi Database</title>
</head>
<body>
    <?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "prakweb";
        $koneksi = mysqli_connect($host,$username,$password,$database);
        if($koneksi){
            echo "OKEE bisa";
        }else{
            echo "Gagal Koneksi";
        }
    ?>
</body>
</html>