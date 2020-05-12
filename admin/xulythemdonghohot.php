<?php
    if(isset($_POST['sub'])){
        $cn = mysqli_connect("localhost","root","","webbandongho");
        mysqli_set_charset($cn,'UTF8');

        $file_path = $_FILES["anh1"]["tmp_name"];
        $file_name = $_FILES["anh1"]["name"];
        $new_path='../images/donghonam/'.$file_name;
        move_uploaded_file($file_path, $new_path);

		$file_path1 = $_FILES["anh2"]["tmp_name"];
		$file_name1 = $_FILES["anh2"]["name"];
		$new_path1 = "../images/donghonam/".$file_name1;
		move_uploaded_file($file_path1, $new_path1);

        $sql ="INSERT INTO post(title, anhmattruoc, giabinhthuong, anhmatsau, giakhuyenmai, url) VALUES ('".$_POST['title']."','".$file_name."','".$_POST['giabinhthuong']."','".$file_name1."','".$_POST['giakhuyenmai']."','".$_POST['url']."')";
        $query = mysqli_query($cn,$sql);
        header("location:index.php?p=donghohot");
       
    }
?>
