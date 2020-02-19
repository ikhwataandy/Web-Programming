<?php
// if ($_POST['hasil']) {               
//     $bilangan = $_POST['bilangan'];  
//     $luas = $bilangan * 3.14;      
// }   
$bilangan = $_POST['bilangan']; 
$phi = 3.14; 
$keliling = $phi * 2 * $bilangan;   
?>
<html>
    <head>
        <title>Hasil</title>
    </head>
    <body>
        <table border = "1">
            <tr>
                <thead>
                    <th>Nilai</th>
                    <th>Hasil</th>
                </thead>
            </tr>
            <tr>
                <tbody>
                    <th><?php echo $bilangan;?></th>
                    <th><?php echo $keliling;?></th>
                </tbody>
            </tr>
        </table>
    </body>
</html>