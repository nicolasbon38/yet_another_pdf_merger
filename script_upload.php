<?php
$uploaddir = '/opt/lampp/htdocs/uploads/';
$uploadfile = $uploaddir . basename($_FILES['fileToUpload']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
    header("Location:./pages/upload.php");
} else {
    echo "Possible file upload attack!\n";
}
?>
