<?php
$site = isset($_GET['site']) ? $_GET['site']: null;
$url = base64_decode($site);
header("Location:".$url);
?>
