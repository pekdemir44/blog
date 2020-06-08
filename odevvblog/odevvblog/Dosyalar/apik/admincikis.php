<?php 
require_once('ust.php');
session_destroy();
echo '<script>alert("Yönetici Çıkış");</script>';
echo '<meta http-equiv="refresh" content="0; index.php"';
require_once('alt.php');
?>