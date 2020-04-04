<?php
    session_start();
    include "koneksi.php";
    if (!isset($_SESSION['username']) && $_SESSION['level'] == "admin") {
		die("Anda belum login");
	} else {
?>

<html>
<head>
    <title>Form Admin</title>
</head>
<body>
    <a href="aksilogin.php?op=out">Logout</a>
    <!-- membuat table -->
    <table border="0">
        
        <tr>
            <td width="500px">
                <form action="aksi_tambahbarang.php" method="POST">
                    <!-- form barang baru -->
                    <table>
                        <p>Form Barang Baru</p>
                        <tr>
                            <td>Nama Barang</td>
                            <td><input type="text" name="nama_barang"></td>
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td><input type="text" name="stok"></td>
                        </tr>
                        <tr>
                            <td>Harga Satuan</td>
                            <td><input type="text" name="harga"></td>
                        </tr>
                        <tr>
                            <td><input type="reset" value="Reset"></td>
                            <td><input type="submit" value="Submit"></td>
                        </tr>
                    </table>

                </form>
            </td>
            <td>
                <!-- Form pembelian -->
                <form action="aksi_pembelianbarang.php" method="POST">
                    <table>
                        <p>Form Pembelian Barang </p>
                        <tr>
                            <td>Pilih Barang</td>
                            <td>
                            <select name="id_barang">
                            <!-- menampilkan tulisan pilih barang -->
                                <option selected disabled>-Pilih Barang-</option>
                                <?php
											include "koneksi.php";
											$sql = "SELECT * FROM barang";
											$a = $koneksi->query($sql);
											while ($c = $a->fetch_array()) {
										?>
											<option value="<?php echo $c['id_barang']; ?>"><?php echo $c['nama_barang']; ?></option>
										<?php		
										}
										?>
                            </td>
                        </tr>
                        <tr>
                            <td>Jumlah Stok</td>
                            <td><input type="text" name="stok" size="27"></td>
                        </tr>
                        <tr>
                            <td><input type="reset" value="Reset"></td>
                            <td><input type="submit" value="Submit"></td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
    <!-- table view -->
    <table border="0">
        <tr>
        <!-- membuat komponen diatas/sejajar -->
            <td valign="top">
            <!-- view data barang -->
                <p>Data Barang</p>
                <table border="1">
                    <tr>
                        <td>Nama Barang</td>
                        <td>Stok</td>
                        <td>Harga Satuan</td>
                    </tr>
                        <?php
                            include "koneksi.php";
                            $a = "SELECT * FROM barang";
                            $b = mysqli_query($koneksi, $a);
                            while ($c = mysqli_fetch_array($b)) { 
                        ?>
                    <tr>
                            <td><?php echo $c['nama_barang']; ?></td>
                            <td><?php echo $c['stok']; ?></td>
                            <td><?php echo $c['harga']; ?></td>
                    </tr>
                        <?php
                        }
                        ?>
                </table>
            </td>
            <td valign="top">
            <!-- view data pembelian -->
                <p>Data Pembelian</p>
                <table border="1">
                    <tr>
                        <td>Nama Barang</td>
                        <td>Jumlah </td>  
                    </tr>
                        <?php
                            include "koneksi.php";
                            $a = "SELECT nama_barang, jumlah FROM barang NATURAL JOIN jualbeli where jualbeli.jenis='beli'";
                      
                            $b = mysqli_query($koneksi, $a);
                            while ($c = mysqli_fetch_array($b)) { 
                        ?>
                    <tr>
                            <td><?php echo $c['nama_barang']; ?></td>
                            <td><?php echo $c['jumlah']; ?></td>    
                    </tr>
                        <?php
                        }
                        ?>
                </table>
            </td>
            <td valign="top">
            <!-- view data penjualan -->
                <p>Data Penjualan</p>
                <table border="1">
                    <tr>
                        <td>Nama Barang</td>
                        <td>Stok</td>
                    </tr>
                        <?php
                           
                            include "koneksi.php";
                            $a = "SELECT nama_barang, jumlah FROM barang NATURAL JOIN jualbeli where jualbeli.jenis='jual'";
                            $b = mysqli_query($koneksi, $a);
                            while ($c = mysqli_fetch_array($b)) { 
                        ?>
                    <tr>
                         
                            <td><?php echo $c['nama_barang']; ?></td>
                            <td><?php echo $c['jumlah']; ?></td>
            
                    </tr>
                        <?php
                        }
                        ?>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
<?php
    }
?>