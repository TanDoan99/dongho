<?php 
 include'view/layouts/database/database.php';
 ?>
<div class="contenttt">
	<br><br><br> <br> <br> <br>
	<p class="p111">TIN TỨC NỔI BẬT</p> <br> <br>

	<div class="lefttt">
		<?php 
	   while ($r = mysqli_fetch_array($query8)) {
    ?>
		<div class="baoquanhanh">	
		<img class="anhtintuc"<?php echo "src='images/tintuc/".$r['hinhanh']."' ";?> >
    </div>
		<?php } ?>
	</div>
	<div class="centertt">
		<?php 
	   while ($r = mysqli_fetch_array($query9)) {
    ?>
		<div class="contertttitle">
	<a href="tintucnoibat.php?tintuc=tinkhuyenmai" style="text-decoration: none">	<span class="spantt1"><?php echo $r['title']; ?></span></a> <br>
		<span class="spantt2"><?php echo $r['tomtat'];?></span>
	  </div>
	  <?php } ?>
</div>
	
	<div class="righttt">
		<img src="/webbandongho/images/chitiethinhanh/anh1.jpg">
		<img src="/webbandongho/images/chitiethinhanh/anh2.jpg">
		<div style="margin-left: 30px;">
			<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d983807.9288689794!2d107.92343134506937!3d15.591663710097121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zc2hvcCDEkeG7k25nIGjhu5M!5e0!3m2!1svi!2s!4v1543061751161" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</div>