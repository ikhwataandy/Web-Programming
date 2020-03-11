<html>
    <head>
        <title>Insert Jadwal</title>
    </head>
    <body>
        <form action="aksijadwal.php" method="POST">
            <table>
                <tr>
                    <td>Hari: </td>
                    <td>
                        <select name="hari">
                        <option value="senin">Senin</option>
                        <option value="selasa">Selasa</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jam: </td>
                    <td><input type="text" name="jam"></td>
                </tr>
                <tr>
                    <td>Ruang :</td>
                    <td><input type="text" name="ruang"></td>
                </tr>
                <tr>
                    <td>Mata Kuliah :</td>
                    <td>
                        <select name="matkul">
                            <?php
                            include "koneksicoba.php";
                            $a = "select * from mahasiswa";
                            $b = $koneksi->query($a);
                            while($c=$b->fetch_array()){
                                ?>
                                    <option value="<?php echo $c['id_matkul']; ?>">
                                        <?php echo $c['matkul']; ?>
                                    </option>
                                <?php
                                
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit"></td>
                    <td><input type="reset" name="reset"></td>
                </tr>
            </table>
        </form>
    </body>
</html>