<?php  require_once('ust.php');
if(isset($_SESSION['admin'])){
?>

<?php 

$ana_kategori_id = $_GET['sil'];

$del = $db->prepare("DELETE FROM ana_kategori WHERE ana_kategori_id = ?");
$del->execute(array($ana_kategori_id));

if($del){
	 echo "<script>alert('Kategori Silindi..')</script>";
	 echo '<meta http-equiv="refresh" content="0; URL=anakategoriekle.php"';
}else{
	 echo "<script>alert('Üzgünüm.. Kategori Silinmedi..')</script>";
	 echo '<meta http-equiv="refresh" content="0; URL=anakategoriekle.php"';
	}
?>
<?php
}else { echo "Yetkilendirme Hatası"; }
require_once('alt.php'); 
?>