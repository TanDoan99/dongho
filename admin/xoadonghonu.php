<?php
if(isset($_GET['id'])){
	$id=$_GET['id'];
}
else{
	$id="";
}
 $cn = mysqli_connect("localhost","root","","webbandongho");
        mysqli_set_charset($cn,'UTF8');
$sql="DELETE FROM post WHERE id=".$id ;
$query=mysqli_query($cn, $sql);
  if($query==true){
  	header('location:index.php?p=donghonu');
  }
  else{
  	echo"xóa thất bại";
  }
?>