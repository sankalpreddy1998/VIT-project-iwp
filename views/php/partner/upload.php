<?php
echo '<pre>';
print_r($_FILES);
echo '</pre>';
if (!empty($_FILES)) {
    if (is_uploaded_file($_FILES['video']['tmp_name'][0])) {
        $srcPath=$_FILES['video']['tmp_name'][0];
        $trgPath="/var/www/html/E-Commerce/videos/".$_FILES['video']['name'][0];
        move_uploaded_file($srcPath,$trgPath);
    }
}
?>