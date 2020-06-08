<?php  require_once('ust.php');
if(isset($_SESSION['admin'])){
?>
<?php 

$alt_kategori_id = $_GET['sil'];

$del = $db->prepare("DELETE FROM alt_kategori WHERE alt_kategori_id = ?");
$del->execute(array($alt_kategori_id));

if($del){
	 echo "<script>alert('Alt Kategori Silindi..')</script>";
	 echo '<meta http-equiv="refresh" content="0; URL=altkategoriekle.php"';
}else{
	 echo "<script>alert('Üzgünüm.. Alt Kategori Silinmedi..')</script>";
	 echo '<meta http-equiv="refresh" content="0; URL=altkategoriekle.php"';
	}
?>
<?php
}else { echo "Yetkilendirme Hatası"; }
require_once('alt.php'); 
?>