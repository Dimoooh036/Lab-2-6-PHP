<?php

$dir = 'image/';
$files = scandir($dir);

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Gallery</title>
<style>
img {
    width:150px;
    margin:5px;
}
</style>
</head>
<body>

<h2>Image Gallery</h2>

<?php
if ($files !== false) {
    foreach ($files as $file) {

        if ($file !== "." && $file !== "..") {
            $path = $dir . $file;

            echo "<img src='$path'>";
        }
    }
}
?>

</body>
</html>