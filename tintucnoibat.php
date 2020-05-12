 <?php
if(isset($_GET['tintuc'])){
	$tintuc=$_GET['tintuc'];
}
else {
	$tintuc="";
}
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
 		
 	</style>
</head>
<body>
<?php
// <!-- menu  -->
	include 'view/layouts/menu.php';
	// <!-- ./ menu  -->
	

	// <!-- tin  bat -->
if($tintuc=='tintucnoibat')
    include 'view/layouts/chitiettintuc.php';
elseif($tintuc=='tinkhuyenmai')
	  include 'view/layouts/tinkhuyenmai.php';
	elseif($tintuc=='sukiennoibat')
	  include 'view/layouts/sukiennoibat.php';
	elseif($tintuc=='gioithieu')
	  include 'view/layouts/gioithieu.php';
	elseif($tintuc=='1')
	  include 'view/layouts/chitietdongho1.php';
	elseif($tintuc=='2')
	  include 'view/layouts/chitietdongho2.php';
	elseif($tintuc=='3')
	  include 'view/layouts/chitietdongho3.php';
  // <!--  ./ tin  bật -->


  // <!-- tin noi bat -->
  include 'view/layouts/tinnoibat.php';
  // <!--  ./ tin nổi bật -->

  // <!-- footer -->
  include 'view/layouts/footer.php';
  // <!-- ./footer -->
  ?>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
	
</script>

</body>
</html>
