<?php 
 include'view/layouts/database/database.php';
 ?>
<div class="content">
		<div class="title"><br><br>
			<h3 class="block-title"><span>Đồng Hồ Nữ</span></h3>
		</div>


		<div class="product0">

	<?php 
	   while ($r = mysqli_fetch_array($query3)) {
    ?>
    
			<div class="product111">
			<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
					<div class="flipper">
						<div class="front">

							<img <?php echo "src='images/donghonam/".$r['anhmattruoc']."' ";?> >
							<span><i class="fa fa-shopping-cart icon dathang"></i>&nbsp &nbsp<a href="#" style="text-decoration: none;"><?php echo $r['title']; ?> </a> </span> <br>
							<span><span>Giá gốc: </span><a href="#" class="animated flash infinite"style="text-decoration: none;color: red;font-weight: both;background: yellow"><?php echo $r['giabinhthuong']; ?></a></span> <br>
							

						</div>  <!-- ./front -->
						<div class="back">
							<a <?php echo "href='chitietsanpham.php?id=".$r['id']."'"?> >
							<img <?php echo "src='images/donghonam/".$r['anhmatsau']."' ";?> style="width:100%;height: 70%;">
						</a>
							<span><i class="fa fa-shopping-cart icon dathang"></i>&nbsp &nbsp<a href="#" style="text-decoration: none;"><?php echo $r['title']; ?> </a> </span> <br>
							<span><span>Khuyến mãi: </span><a href="#" class="animated flash infinite"style="text-decoration: none;color: red;font-weight: both;background: yellow"><?php echo $r['giakhuyenmai']; ?></a></span> <br>
						</div>

					</div>
				</div>
			</div> <!-- ./product111 -->
			<?php } ?>
			

		</div>  <!-- product0 -->

	</div> <!-- ./content -->