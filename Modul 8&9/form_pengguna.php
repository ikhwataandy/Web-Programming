<?php
    session_start();
    include "koneksi.php";
    if(!isset($_SESSION['username']) || $_SESSION['level'] != "pengguna"){
        echo "<script>alert('Maaf, Anda Belum Login'); history.back() </script>";
    }
?>

<html>
    <head>
        <title>Form Pengguna</title>
    </head>
    <body>
    
    <a href="aksilogin.php?op=out">Logout</a>
    
    <table border="0">
        <form action="aksi_penjualanbarang.php" method="POST">
            <table>
            <!--pembelian barang -->
                <p>Form Penjualan Barang </p>
                <tr>
                    <td>Nama Barang : </td>
                    <td>
                        <select name="id_barang">
                            <?php
                                $sql = "SELECT * FROM barang";
                                $a = $koneksi->query($sql);
                                while ($c = $a->fetch_array()) {
                                ?>
                                <option value="<?php echo $c['id_barang']; ?>">
                                <?php echo $c['nama_barang']; ?></option>
                                <?php		
                                }
                                ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Penjualan: </td>
                    <td><input type="date" name="tanggal_penjualan" size="27"></td>
                </tr>
                <tr>
                    <td>Jumlah Penjualan: </td>
                    <td><input type="text" name="jumlah" size="27"></td>
                </tr>
                <tr>
                    <td><input type="reset" value="Reset"></td>
                    <td><input type="submit" value="Submit"></td>
                </tr>
            </table>

        </form>
    </table>
    </form>
    </body>

</html>

