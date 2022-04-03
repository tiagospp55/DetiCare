<?php  

session_start();
session_destroy();
header('Location: csv_upload.php');
exit;

?>