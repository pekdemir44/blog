<?php  require_once('ust.php');
if(isset($_SESSION['admin'])){
?>
<?php require_once('../ayar/fonksiyon.php');?>
<?php 
$alt_kategori_baslik = trim($_POST['alt_kategori_baslik']);
$ana_kategori_baslik = $_POST['ana_kategori_baslik'];
$alt_kategori_url =  seo($alt_kategori_baslik);



$sql = $db->prepare('INSERT INTO alt_kategori (alt_kategori_baslik,alt_kategori_url,ana_kategori_baslik) VALUES (?,?,?)');
$ekle = $sql->execute(array($alt_kategori_baslik,$alt_kategori_url,$ana_kategori_baslik));
	 echo "<script>alert('Kategori Eklendi')</script>";
	 echo '<meta http-equiv="refresh" content="0; URL=altkategoriekle.php"';
?>

<?php
}else { echo "Yetkilendirme Hatası"; }
require_once('alt.php'); 
?>