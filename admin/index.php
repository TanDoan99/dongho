 
<?php
if(isset($_GET['p'])){
    $p=$_GET['p'];
}
else
  $p="";
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link rel="stylesheet" href="/webbandongho/css/css/style.css">
 	<link rel="stylesheet" href="/webbandongho/css/css/animate.min.css">
 	<link rel="stylesheet" href="/webbandongho/css/css/cssw3school.css">
 	<link rel="stylesheet" href="/webbandongho/css/css/font-awesome.min.css">
 	<link rel="stylesheet" href="/webbandongho/css/font-awesome.min.css">
 	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
 	<title>WEB Đồng Hồ</title>
 	<style>
 		.admin{
            height:65px;
            width: 100px;
            margin-left: 100px;
        }
 	</style>
</head>
<body>
<div class="menutop">
        <div class="logo">
            <span id="logo">NGOCTAN</span>
            <p class="logophu animated flash infinite">D O N G H O C H I N H H A N G</p>
        </div> 
        <div id="menu">
            <ul>
                <li><a href="/webbandongho/index.php">Trang Chủ</a></li>
                <li><a href="index.php?p=donghonam">Đồng Hồ Nam</a></li>    
              <li><a href="index.php?p=donghonu">Đồng Hồ Nữ</a></li>
              <li><a href="index.php?p=donghohot">Đồng Hồ Hót</a></li>
              <li><a href="index.php?p=cacdonhangcuakhach">Đơn Hàng</a></li>
               <li><a href="DangXuat.php" class="admin">Đăng Xuất</a></li>
            </ul>
        </div><!--Menu-->
    </div><!-- ./menutop -->
	<div class="contentadmin">
        <?php
        if($p=='donghohot')
       include'quanlydonghohot.php';
        elseif($p=='donghonu')
        include'quanlydonghonu.php';
        elseif($p=='cacdonhangcuakhach')
        include'cacdonhangcuakhach.php';
        else 
        include'quanlydonghonam.php';
        ?>
    </div>



</body>
</html>
