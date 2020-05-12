<?php
        session_start();

        if(isset($_SESSION['username'])&&isset($_SESSION['password'])) { 
            header("location:index.php");
        }
        else {
            
       
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
<link rel="stylesheet" href="/webbandongho/css/bootstrap-3.3.min.css">
<link rel="stylesheet" href="/webbandongho/css/css/style.css">
</head>
<body>
	<div class="contentdn">
		
	</style>
		<div class="formdn">
			<div class="formdn1">
				<h2 style="text-align:center;padding-top: 20px;">ĐĂNG NHẬP</h2>
			</div><br>
			<div class="formdn0">
				<div class="formdn2">
					<form action="XuLyDangNhap.php" method="post">
						Tên đăng nhập:<br>
						<input type="text" class="dntt" name="username" id="username" placeholder="Nhập tên đăng nhập" /><br><br><br>
						Mật Khẩu:<br>
						<input type="password" placeholder="Nhập mật khẩu" name="password" id="password"/><br><br><br>
						<div class="form-group text-center text-danger">
						</div>
						<input type="submit" value="Đăng Nhập" />
					</form>
				</div>
			</div>
		</div >

	</div>
</body>
</html>
<?php  } ?>