<?php  require_once('ust.php');
if(isset($_SESSION['admin'])){
?>












<?php
}else { echo "Yetkilendirme Hatası"; }
require_once('alt.php'); 
?>