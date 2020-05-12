<?php
if(isset($_GET['id']))
  	$id=$_GET['id'];
  else
  	$id="7";

 include'view/layouts/database/database.php';
 $select7="select id, title, anhmattruoc, giabinhthuong, anhmatsau, giakhuyenmai, url from post where id=".$id;
		$query7= mysqli_query($connect,$select7);
 ?>
 <?php 
	   while ($r = mysqli_fetch_array($query7)) {
    ?>
<div class="contentctdh">
	<p class="tieudectdh">CHUẨN MỰC ĐỒNG HỒ NGỌC TÂN</p>
	<div class="content1">
		<div class="leftct">
			<div class="zoomImg">
					<img class="card-img-top"<?php echo" src=images/donghonam/".$r['anhmatsau']." style='width: 100%;height: 100%;'";?>>
			</div> <!-- ./zoomImg	 -->
			<p class="titlech"><?php echo $r['title'];?> Chính Hãng</p>
		</div>
		<div class="centerct">
			<p class="ct1">THÔNG TIN SẢN PHẨM</p>
			<span>Dòng sản phẩm</span><span class="ct2">Ngọc Tân</span><br>
			<span>Mã sản phẩm</span>&nbsp &nbsp &nbsp<span class="ct2">OG358.31AG42R-GL-X</span><br>
			<span>Xuất xứ</span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<span class="ct2">Thụy Sỹ (Swiss Made)</span><br>
			<span>Loại máy</span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<span class="ct2"> Automatic (Cơ)</span><br>
			<span>Kính</span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <span class="ct2">Sapphire</span><br>
			<span>Kiểu dáng</span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<span class="ct2">Đồng hồ nam</span><br>
      <span>Đường kính</span>&nbsp &nbsp &nbsp &nbsp<span class="ct2">42mm</span><br>
      <span>Chất liệu vỏ</span>&nbsp &nbsp &nbsp   <span class="ct2">Thép không gỉ 316L mạ vàng hồng PVD</span><br>
      <span>Chất liệu dây</span>&nbsp &nbsp  <span class="ct2">Dây da cao cấp</span><br>
      <span>Độ chịu nước</span>&nbsp &nbsp  <span class="ct2">50M</span><br>
      <span>Chức năng khác</span> <br>
      <span>Bảo hành máy</span> <span class="ct2">6 năm tiêu chuẩn Thụy Sỹ</span><br>
      <span>Bảo hành cơ</span>&nbsp &nbsp<span class="ct2">1 năm tiêu chuẩn đồng hồ chính hãng</span><br>
      <p class="tientien"><?php echo $r['giakhuyenmai']?></p>
      <br> <br> <br>
    <span><a href="/webbandongho/muahang.php?giatien=<?php echo $r['giakhuyenmai']?>&anh=<?php echo $r['anhmatsau']?>&tensp=<?php echo $r['title']?>"><img src="/webbandongho/images/chitiethinhanh/anh3.jpg" style="width: 170px;height: 53px;"></a>
    </span>  <span><img src="/webbandongho/images/chitiethinhanh/anh4.jpg" style="width: 170px;height: 50px;"></span>
    

		</div>
		<div class="rightct">
		<img src="/webbandongho/images/chitiethinhanh/anh1.jpg" alt="">
			<img src="/webbandongho/images/chitiethinhanh/anh2.jpg" alt="">
		</div>
	</div>
</div>
	<?php } ?>