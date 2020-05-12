 <?php 
 include'database.php';
 ?>
 
<div class="contentadmin">
	<br><br> <br><br><br><br>
	<p class="cladminchung">QUẢN LÝ ĐỒNG HỒ NỮ</p> <br>
	<a href="themdonghonu.php"><p class="themspadmin">Thêm Sản Phẩm</p></a>
	<div class="tableadmin">
		<table border="1" class="tableadmin1">
			<tr>
				<th>id</th>
				<th>title</th>
				<th>anhmattruoc</th>
				<th>giabinhthuong</th>
				<th>anhmatsau</th>
				<th>giakhuyenmai</th>
				<th>url</th>
				<th colspan="2">chỉnh sửa</th>
			</tr>
			<?php 
	   while ($r = mysqli_fetch_array($query3)) {
      ?>
			<tr>
				<td><?php echo $r['id']; ?></td>
				<td><?php echo $r['title']; ?></td>
				<td><img style="width: 100px;height: 100px"<?php echo "src='/webbandongho/images/donghonam/".$r['anhmattruoc']."' ";?> ></td>
				<td><?php echo $r['giabinhthuong']; ?></td>
				<td><img style="width: 100px;height: 100px"<?php echo "src='/webbandongho/images/donghonam/".$r['anhmattruoc']."' ";?> ></td>
				<td><?php echo $r['giakhuyenmai']; ?></td>
				<td><?php echo $r['url']; ?></td>
				<td><a <?php echo "href='suadonghonu.php?action=suadonghonu&id=".$r['id']."'"; ?>>Sửa</a></td>
				<td><a <?php echo "href='xoadonghonu.php?action=xoadonghonu&id=".$r['id']."'"; ?>>Xóa</a></td>
			</tr>

		<?php }?>
		</table>
	</div>
</div>

