<?php
// Willy Arisky
$site = isset($_GET['site']) ? $_GET['site']: null;
$go= base64_decode($site);
$domain = "http://localhost";
$title = "Link Decrypter";
?>