<?php
   if(isset($_POST['sub'])){
        $cn12 = mysqli_connect("localhost","root","","webbandongho");
        mysqli_set_charset($cn12,'UTF8');

        $sql13 ="insert into thongtinkhachhang(hotenkh,diachi,sdt,soluong,tensp,giatien)values ('".$_POST['hoten']."','".$_POST['diachi']."','".$_POST['sodienthoai']."','".$_POST['soluong']."','".$_POST['tensanpham']."','".$_POST['giatien']."')";
        $query12 = mysqli_query($cn12,$sql13);
        header("location:../../index.php");
       
    }

?>

