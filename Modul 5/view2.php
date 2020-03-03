<html>
<head>
<title></title>
</head>
<body>
    
    <table border ="1">
    <tr>
        <thead>
        <td>NO.</td>
        <td>Nama Matkul</td>
        </thead>
    </tr>
    <tbody>
    <?php
    $no = 1;
    include "koneksicoba.php";
    $a = "SELECT * from mahasiswa";
    $b = $koneksi->query($a);
    while($c=$b->fetch_row()){
        ?>
        <tr>
            <th><?php echo $no++ ?></th>
            <th><?php echo $c[1]; ?></th>
        </tr>
        <?php
        
    }
    ?>

    </tbody>
    </table>
</body>
</html>