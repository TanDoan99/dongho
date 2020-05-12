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
		$select10="select id, title, anhmattruoc, giabinhthuong, anhmatsau, giakhuyenmai, url from post where id=".$id;
		
		$query10= mysqli_query($connect,$select10);
		 $r = mysqli_fetch_array($query10);
		 
 ?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="/webbandongho/css/css/style.css">

</head>
<body>
<div class="formdk">
	<div class="formdk1">
		<h2>ĐỒNG HỒ NỮ</h2>
	</div>

	<div class="formdk2">
		<form  action="xulysuadonghonu.php" method="post" enctype="multipart/form-data" >
		<br>
			<input type="hidden" name="id" id="id" <?php echo "value='".$id."'";?>>
	 <span><i>Title:<br></i></span>
			<input type="text" placeholder="nhập title vào" name="title" id="title" 
			<?php echo 'value="'.$r["title"].'"';?>> <br><br>
			<span><i>Ảnh mặt trước:<br></i></span>
			<input type="file"name="anh1" id="anh1"/><img style="width: 30px;height: 30px"<?php echo "src='/webbandongho/images/donghonam/".$r['anhmattruoc']."' ";?> ></span> <br><br>
			 <span><i>Giá bình thường:<br></i></span>
			<input type="text" placeholder="nhập giá vào" name="giabinhthuong" id="giabinhthuong"<?php echo "value=".$r['giabinhthuong'];?>>  <br><br>
			<span><i>Ảnh mặt sau:<br></i></span>
			<input type="file" name="anh2" id="anh2"/> <span><img style="width: 30px;height: 30px"<?php echo "src='/webbandongho/images/donghonam/".$r['anhmatsau']."' ";?> ></span><br><br>
			 <span><i>Giá khuyến mãi:<br></i></span>
			<input type="text" placeholder="nhập giá vào" name="giakhuyenmai" id="giakhuyenmai"<?php echo "value=".$r['giakhuyenmai'];?>>  <br><br>
			 <span><i>url:<br></i></span>
			<input type="text" placeholder="nhập url vào" name="url" id="url"<?php echo "value=".$r['url'];?>>  <br><br>
			<input type="submit" value="Lưu Lại" name="sub"><br><br>
			
		</form>

	</div>
</div>


</body>
</html>