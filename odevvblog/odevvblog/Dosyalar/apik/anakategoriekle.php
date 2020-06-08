<?php  require_once('ust.php');
if(isset($_SESSION['admin'])){
?>
<div style="margin:15px;"></div>
<div class="row">
  <div class="container">
    <div class="col l12 z-depth-1">
    <form action="anakategorikaydet.php" method="post">
      <div class="input-field col l12"> <i class="mdi-communication-contacts prefix"></i>
        <input id="ana_kategori_baslik" type="text" class="validate" name="ana_kategori_baslik" placeholder="Ana Kategori Başlığı">
      </div>
      <div class="col l12">
        <button class="btn waves-effect waves-button-input right" style="margin-top:10px">Kaydet</button>
      </div>
      </div>
    </form>
  </div>
</div>
<div class="row">
  <div class="container">
    <?php $sql = $db->prepare("SELECT * FROM ana_kategori");
	$sql->execute();
	while($row=$sql->fetch(PDO::FETCH_ASSOC)) {		
?>
    <div class="col l12 z-depth-1">
      <p><?php echo $row['ana_kategori_baslik']; ?> <a class="right" href="anakategorisil.php?sil=<?php echo $row['ana_kategori_id']; ?>">Sil</a></p>
    </div>
    <?php } ?>
  </div>
</div>
<?php
}else { echo "Yetkilendirme Hatası"; }
require_once('alt.php'); 
?>
