<?php
$data = ["PHP OOP (object oriented programming", "PHP Database", "PHP Web","PHP Composer","PHP Unit Test" ];

echo "materi selanjutnya adalah".PHP_EOL;
foreach ($data as $key){
    echo "$key".PHP_EOL;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<h1>materi selanjutnya</h1>

<p>
    alhamdulillah jika semua materi pada php dasar telah di pelajari maka selanjutnya
    bisa di pelajari

    <?php
    foreach ($data as $key) {
        echo "<li> $key </li>".PHP_EOL;
    }
    ?>
</p>
</head>
<body>
    
</body>
</html>

