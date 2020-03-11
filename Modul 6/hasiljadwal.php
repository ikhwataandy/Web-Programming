<html>
<head>
<title>Hasil Buku Tamu</title>
</head>
<body>
    [<a href='formjadwal.php'>tambah</a>];
    <table border ="1">
    <tr>
        <thead>
        <td>No.</td>
        <td>Mata Kuliah</td>
        <td>Hari</td>
        <td>Jam</td>
        <td>Ruangan</td>
        </thead>
    </tr>
    <tbody>
    <?php
    $no = 1;
    include "koneksicoba.php";
    $a = "SELECT * from jadwal NATURAL JOIN mahasiswa";
    $b = $koneksi->query($a);
    while($c=$b->fetch_array()){
        ?>
        <tr>
            <th><?php echo $no++ ?></th>
            <th><?php echo $c['matkul']; ?></th>
            <th><?php echo $c['hari']; ?></th>
            <th><?php echo $c['jam']; ?></th>
            <th><?php echo $c['ruang']; ?></th>
        </tr>
        <?php
        
    }
    ?>

    </tbody>
    </table>
</body>
</html>