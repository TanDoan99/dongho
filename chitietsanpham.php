<!--  <?php
  //if(isset($_GET['p']))
  //	$p=$_GET['p'];
  //else
  //	$p="";
 ?> -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link rel="stylesheet" href="/webbandongho/css/css/style.css">
 	<link rel="stylesheet" href="/webbandongho/css/css/animate.min.css">
 	<link rel="stylesheet" href="/webbandongho/css/css/cssw3school.css">
 	<link rel="stylesheet" href="/webbandongho/css/css/font-awesome.min.css">
 	<link rel="stylesheet" href="/webbandongho/css/css/photoswipe.css">
 	<link rel="stylesheet" href="/webbandongho/css/css/bootstrap.min.css">
 	<link rel="stylesheet" href="/webbandongho/css/css/default-skin.min.css">
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
	
//chitiesanphamcua từng đồng hồ
	include 'view/layouts/chitietsanphamcuatungdongho.php';
//chitiesanphamcua từng đồng hồ
	include 'view/layouts/divgia.php';
 include 'view/layouts/divgia1.php';
	include 'view/layouts/bando.php';
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
<script src="js/wow.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/photoswipe-ui-default.min.js"></script>
<script src="js/photoswipe.min.js"></script>

<!-- //zômhinhf -->
<script>
 		$(".zoomImg").zoom();
</script>
</body>
</html>
