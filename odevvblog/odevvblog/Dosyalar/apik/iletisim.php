<?php  require_once('ust.php');
if(isset($_SESSION['admin'])){
?>

<div class="row">
        <div class="col l12 z-depth-1">
              <ul class="collection white">
              <?php
                $sql = $db->prepare("SELECT * FROM mesajlar");
                $sql->execute();
             
                while($row=$sql->fetch(PDO::FETCH_ASSOC)) {
                 
             ?>
                <li class="collection-item light-blue white-text" style="overflow:hidden">
               
                <span>Ad :<?php echo $row['iletisim_ad']; ?><br>Soyad : <?php echo $row['iletisim_soyad']; ?></span><br>
                
                <span>E-Mail :<?php echo $row['iletisim_email']; ?></span><br>
               
                <span>Konu :<?php echo $row['iletisim_konu']; ?></span>
                
                <p class="collection-item black-text" >
				<?php echo $row['iletisim_mesaj']; ?><br>
                </p>
             <?php } ?>
              </ul>
        </div>
</div>
<?php
}else { echo "Yetkilendirme Hatası"; }
require_once('alt.php'); 
?>