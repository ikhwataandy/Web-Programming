<html>

<head>
    <title>Tugas 3</title>
</head>

<body>
    <form action="hasiltugas3.php" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jk" value="Cowok">
                    <label for="Cowok">Cowok</label>
                    <input type="radio" name="jk" value="Cewek">
                    <label for="Cewek">Cewek</label>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Hitung</td>
				<?php
					// $angka1 = 4;
					// $angka2 = 5;

					// setcookie("angka1", $angka1);
					// setcookie("angka2", $angka2);
				?>
				<td>4 * 5</td>
            </tr>
            <tr>
				<td>Jawab</td>
				<td><input type="text" name="jawab"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="Simpan">
					<input type="reset" name="reset" value="batal">
				</td>
			</tr>
        </table>
    </form>
</body>

</html>