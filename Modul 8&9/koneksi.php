<html>
<head>
<title>Koneksi Database</title>
</head>
<body>
    <?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "coba";
        $koneksi = mysqli_connect($host,$username,$password,$database);
        if($koneksi){
            echo "";
        }else{
            echo "Gagal Koneksi";
        }
    ?>
</body>
</html>