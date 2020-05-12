
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="/webbandongho/css/css/style.css">

</head>
<body>
<div class="formdk">
	<div class="formdk1">
		<h2>ĐỒNG HỒ HÓT</h2>
	</div>
	<div class="formdk2">
		<form  action="xulythemdonghohot.php" method="post" enctype="multipart/form-data" >
		<br>
	 <span><i>Title:<br></i></span>
			<input type="text" placeholder="nhập title vào"/ name="title" id="title"> <br><br>
			<span><i>Ảnh mặt trước:<br></i></span>
			<input type="file"name="anh1" id="anh1"/> <br><br>
			 <span><i>Giá bình thường:<br></i></span>
			<input type="text" placeholder="nhập giá vào" name="giabinhthuong" id="giabinhthuong"/> <br><br>
			<span><i>Ảnh mặt sau:<br></i></span>
			<input type="file" name="anh2" id="anh2"/> <br><br>
			 <span><i>Giá khuyến mãi:<br></i></span>
			<input type="text" placeholder="nhập giá vào" name="giakhuyenmai" id="giakhuyenmai"/> <br><br>
			 <span><i>url:<br></i></span>
			<input type="text" placeholder="nhập url vào" name="url" id="url"/> <br><br>
			<input type="submit" value="Lưu Lại" name="sub"><br><br>
			
		</form>

	</div>
</div>


</body>
</html>