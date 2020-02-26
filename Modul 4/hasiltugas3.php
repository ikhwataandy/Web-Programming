<?php
    if($_POST['submit']){
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['jk'];
        $email = $_POST['email'];
        $jawab = $_POST['jawab'];
    }
?>
<html>
    <head>
        <title>Hasil No.3</title>
    </head>
    <body>
    <?php
		if ($jawab != 20) {
			echo '<script>window.alert("Jawaban Anda Salah !");</script>';
		} else {
			echo '<table border="1">
			<tr>
				<thead>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Email</th>
					<th>Jenis Kelamin</th>
					<th>Jawaban</th>
				</thead>
			</tr>
			<tr>
				<tbody>
					<th>' . $nama . '</th>
					<th>' . $alamat . '</th>
					<th>' . $email . '</th>
					<th>' . $jk . '</th>
					<th>Benar</th>
				</tbody>
			</tr>
		</table>';
		}
	?>
    </body>
</html>
