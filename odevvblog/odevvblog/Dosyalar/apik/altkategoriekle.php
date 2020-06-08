<?php  require_once('ust.php');
if(isset($_SESSION['admin'])){
?>

<div style="margin:15px;"></div>
<div class="row">
<div class="container">
	<div class="col l12 z-depth-1">
    <form action="altkategorikaydet.php" method="post">
    
    	  <label>Ana Kategori Seçin</label>
          <select class="browser-default" name="ana_kategori_baslik">
		   <?php $sql = $db->prepare("SELECT * FROM ana_kategori");
			$sql->execute();
			while($row=$sql->fetch(PDO::FETCH_ASSOC)) {		
			?>
 
            <option value="<?php echo $row['ana_kategori_url']; ?>"><?php echo $row['ana_kategori_baslik']; ?></option>
            <?php } ?>
          </select>
    
        <div class="input-field col l12">
            <i class="mdi-communication-contacts prefix"></i>
            <input id="alt_kategori_baslik" type="text" class="validate" name="alt_kategori_baslik" placeholder="Kategori Başlığı">
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
<?php $sql = $db->prepare("SELECT * FROM alt_kategori");
	$sql->execute();
	while($row=$sql->fetch(PDO::FETCH_ASSOC)) {		
?>
	<div class="col l12 z-depth-1"><p><?php echo $row['alt_kategori_baslik'];  ?> <strong>( <?php echo $row['ana_kategori_baslik'];  ?> )</strong>
    <a class="right" href="altkategorisil.php?sil=<?php echo $row['alt_kategori_id']; ?>">Sil</a></p></div>
<?php } ?>
</div>
</div>


<?php
}else { echo "Yetkilendirme Hatası"; }
require_once('alt.php'); 
?>
