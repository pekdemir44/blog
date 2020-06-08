<?php  require_once('ust.php');
if(isset($_SESSION['admin'])){
?>
<?php require_once('../ayar/fonksiyon.php');?>
<?php 
$ana_kategori_baslik = trim($_POST['ana_kategori_baslik']);
$ana_kategori_url =  seo($ana_kategori_baslik);

$sql = $db->prepare('INSERT INTO ana_kategori (ana_kategori_baslik,ana_kategori_url) VALUES (?,?)');
$ekle = $sql->execute(array($ana_kategori_baslik,$ana_kategori_url));
	 echo "<script>alert('Kategori Eklendi')</script>";
	 echo '<meta http-equiv="refresh" content="0; URL=anakategoriekle.php"';
	 
?>
<?php
}else { echo "Yetkilendirme Hatası"; }
require_once('alt.php'); 
?>