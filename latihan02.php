<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?='latihan02'?></title>
</head>
<body>
    
<?php
    echo "<h3>Sedang belajar php</h3>";

    echo "<ul>";
    echo "<li>Sedang membuat Script sederhana</li>";
    echo "<li>Menyisipkan Script php dengan html</li>";
    echo "<li>Menyusipkan External script php pada dokumen HTML</li>";
    echo "<li>Ternyata bikinnya begini ea</li>";
    echo "</ul>";

    #cara memunculkan file external ke latihan01 ke latihan02 diweb
    include("latihan01.php");
    require("latihan01.php");
?>

</body>
</html>