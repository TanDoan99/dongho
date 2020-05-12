<?php 
session_start();

$cn = mysqli_connect('localhost','root','','webbandongho');
$sql = "select * from user where username='".$_POST['username']."' and password='".$_POST['password']."'";
$query = mysqli_query($cn,$sql);
$count = mysqli_num_rows($query);

if($count>0){
	$_SESSION['username']=$_POST['username'];
	$_SESSION['password']=$_POST['password'];
    header('location:index.php');
}
else{
     header('location:dangnhap.php');
	}
 ?>
