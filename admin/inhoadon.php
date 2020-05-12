<?php 
if(isset($_GET['id'])){
	$id=$_GET['id'];
}
else
{
	$id="";
}
   $connect= mysqli_connect("localhost","root","","webbandongho");
    mysqli_set_charset($connect,'UTF8');
		$select15="select id, hotenkh, diachi, sdt, soluong, tensp, giatien from thongtinkhachhang where  id=".$id;
		
		$query15= mysqli_query($connect,$select15);
		 $r = mysqli_fetch_array($query15);
		 
 ?>
<style>
	.content{
		
    border: 1px double black;
		width: 30%;
		height: 560px;
		margin:10px auto;
		border-radius: 10px;
	}
	.p1{
		text-align: center;
		font-size: 22px;
		color: blue;
		font-weight: bold;
	}
	.p2{
		text-align: center;
		font-size: 15px;
		font-weight: bold;
		line-height: 5px;
	}
	.p3{
		text-align: center;
		font-weight: bold;
		font-size: 30px;
		color: red;
	}
	.p4{
    margin-left: 50px;
    font-size: 20px;
    line-height: 15px;
    font-weight: bold;
	}
	.p5{
		text-align: center;
		font-weight: bold;
		font-size: 20px;
   line-height: 5px;
	}
</style>

<div class="content">
	  <p class="p1">ĐỒNG HỒ CHÍNH HÃNG NGỌC TÂN</p>
	  <p class="p2">Địa chỉ: 23 Trần Nguyên Hãn - Tam Kỳ - Quảng Nam</p> 
		<p class="p2">Điện Thoai: 01669835839 Fax: 01235894755</p> 
		<p class="p2">Websize: http://donghochinhhangductai.com.vn</p>
		<p class="p3">HÓA ĐƠN BÁN HÀNG</p> 
		<p class="p4">Tên Khách Hàng: <?php echo $r['hotenkh'];?></p>
		<p class="p4">Địa Chỉ: <?php echo $r['diachi'];?></p>
		<p class="p4">Số Điện Thoại: <?php echo $r['sdt'];?></p>
		<p class="p4">Số Lượng:<?php echo $r['soluong'];?> Chiếc</p>
		<p class="p4">Tên Sản Phẩm: <?php echo $r['tensp'];?></p>
		<p class="p4">Thành Tiền: <?php echo $r['giatien'];?></p> <br>
		<p class=p5>Cảm ơn quý khách đã tin tưởng lựa chọn </p>
		        <p class=p5>sản phẩm của chúng tôi</p>
		
	

</div>