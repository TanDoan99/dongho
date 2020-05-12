<?php 
 include'view/layouts/database/database.php';
?>

<div class="giatinnoibat">	</div>
	<div class="tinnoibat">
		<div class="chutinnoibat">	OGIVAL – CHUẨN MỰC ĐỒNG HỒ THỤY SỸ</div>
		<?php
	   while ($r = mysqli_fetch_array($query6)) {
    ?>
		<div class="tinnoibat1">
			<img <?php echo "src='images/tinmoinhat/".$r['hinhanh']."' ";?> >  
			<p>	<?php echo $r['title']; ?></p> 	 	
			<span>	<?php echo $r['tomtat']; ?></span>
			<a style="text-decoration: none" <?php echo "href='tintucnoibat.php?tintuc=".$r['id']."'"?>><p class="xemthem">	XEM THÊM </p></a>
		</div>
		<?php } ?>
	</div>
	