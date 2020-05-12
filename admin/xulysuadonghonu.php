<?php
    if(isset($_POST['sub'])){
        $connect = mysqli_connect("localhost","root","","webtieuluanbandongho");
        mysqli_set_charset($connect,'UTF8');
    $select1="select id, title, anhmattruoc, giabinhthuong, anhmatsau, giakhuyenmai, url from post where title='Đồng Hồ Nữ'";
		$query1= mysqli_query($connect,$select1);
		$r1 = mysqli_fetch_array($query1);

    $file_path = $_FILES["anh1"]["tmp_name"];
    $file_name = $_FILES["anh1"]["name"];
    $new_path='../images/donghonam/'.$file_name;
    move_uploaded_file($file_path, $new_path);

		$file_path1 = $_FILES["anh2"]["tmp_name"];
		$file_name1 = $_FILES["anh2"]["name"];
		$new_path1 = "../images/donghonam/".$file_name1;
		move_uploaded_file($file_path1, $new_path1);

        if($file_name!=null){
           $n = $file_name;
        }
        else{
            $n = $r1['anhmattruoc'];
        } 


        if($file_name1!=null){
           $n1 = $file_name1;
        }
        else{
            $n1 = $r1['anhmatsau'];
        } 
        $sql =  "UPDATE post SET title='".$_POST['title']."',anhmattruoc='".$n."',giabinhthuong='".$_POST['giabinhthuong']."',anhmatsau='".$n1."',giakhuyenmai='".$_POST['giakhuyenmai']."',url='".$_POST['url']."' where id='".$_POST['id']."'";
        $query = mysqli_query($connect,$sql);
        header("location:index.php?p=donghonu");
    }
?>
