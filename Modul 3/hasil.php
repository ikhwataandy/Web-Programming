<?php
// if($_POST['submit']){
//     $a = $_POST['nilai1'];
//     $b = $_POST['nilai2'];
//     $hasil = $a + $b;
// }
$a = $_POST['nilai1'];
$b = $_POST['nilai2'];
$hasil = $a % $b;
?>
<html>
    <head>
        <title>Hasil</title>
    </head>
    <body>
        <table border="1">
            <tr>
                <thead>
                    <th>Nilai 1</th>
                    <th>Nilai 2</th>
                    <th>Hasil</th>
                </thead>
            </tr>
            <tr>
                <tbody>
                    <th><?php echo $a;?></th>
                    <th><?php echo $b;?></th>
                    <th><?php echo $hasil;?></th>
                </tbody>
            </tr>
        </table>
    </body>
</html>
