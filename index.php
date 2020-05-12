 <?php
  if(isset($_GET['p']))
  	$p=$_GET['p'];
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
 		
 	</style>
</head>
<body>
<?php
// <!-- menu  -->
	include 'view/layouts/menu.php';
	// <!-- ./ menu  -->
	// <!-- slide -->
	include 'view/layouts/slide.php';
	// <!-- ./ slide -->
//bản đồ
	if($p=="bando")
	include 'view/layouts/bando.php';
  else
  		include 'view/layouts/bandogia.php';
	
	// <!-- content -->
  if($p=="donghonam")
	include 'view/layouts/content1.php';
  elseif($p=="donghonu")
	include 'view/layouts/content2.php';
  elseif($p=="donghocap")
	include 'view/layouts/content3.php';
  elseif($p=="donghohot")
	include 'view/layouts/content4.php';
  else
  include 'view/layouts/content.php';
  // <!-- 	./content -->

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
<script>
	var myIndex = 0;
	carousel();

	function carousel() {
		var i;
		var x = document.getElementsByClassName("mySlides");
		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";  
		}
		myIndex++;
		if (myIndex > x.length) {myIndex = 1}    
			x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
  }
</script>
</body>
</html>
