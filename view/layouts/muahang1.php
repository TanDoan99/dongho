<?php
if(isset($_GET['giatien']))
	$giatien=$_GET['giatien'];
if(isset($_GET['anh']))
	$anh=$_GET['anh'];
if(isset($_GET['tensp']))
	$tensp=$_GET['tensp'];
?>
<div class="contentmh">
	<br><br><br><br><br>
	<p class="pmh1">ĐƠN ĐẶT HÀNG ONLINE</p> <br><br>
	<div class="leftmh">
			<p class="pmh2">SẢN PHẨM</p>
			<span>	<img class="imgmh"<?php echo"src=images/donghonam/$anh ";?>>
			</span> &nbsp  &nbsp  &nbsp
			<span class="pmh3"><?php echo $tensp ;?></span> <br><br>
			<p class="pmh5">THÔNG TIN CHI TIẾT KHÁCH HÀNG</p>
			<form action="view/layouts/xulymuahang.php" method="post">
				&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp Họ Và Tên: <br>   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input style="width: 300px" type="text" name="hoten" id="hoten"> <br> <br>
				&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp Địa chỉ: <br> &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  <input style="width: 300px" type="text" name="diachi" id="diachi"> <br> <br>
				&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  Số Điện Thoại: <br>&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  <input style="width: 300px" type="text" name="sodienthoai" id="sodienthoai"> <br> <br>
				&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  Số lượng sản phẩm:<br>&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp   <input style="width: 300px"   type="text" name="soluong" id="soluong"> <br><br>
				&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  Tên sản phẩm: <br>&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  <input style="width: 300px" type="text" name="tensanpham" id="tensanpham"> <br> <br>
				 <input type="hidden" name="giatien" id="giatien" value='<?php echo $giatien;?>'> <br> <br>
				 <input style="width: 300px; background: #FFCC00;color: black;margin-left: 65px;" type="submit" name="sub" value="GỞI ĐƠN HÀNG">
			</form>
	</div>
	<div class="rightmh">
		<p class="pmh2">GIÁ BÁN</p>
		<p class="pmh4">Tổng Cộng:<?php echo $giatien ;?></p> <br> <br>
		<p class="pmh6">HÌNH THỨC THANH TOÁN</p> <br>
		<p class="pmh7">Thanh toán trực tiếp tại của hàng</p> <br> <br>
		<p class="pmh7">Thanh toán qua ngân hàng</p> <br> <br>
		<p class="pmh7">Thanh toán khi nhận hàng (COD)</p>
  
	</div>

	
</div>