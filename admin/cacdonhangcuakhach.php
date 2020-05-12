 <?php 
 include'database.php';
 ?>
 
<div class="contentadmin">
	<br><br> <br><br><br><br>
	<p class="cladminchung">QUẢN LÝ ĐƠN HÀNG</p> <br>
	<div class="tableadmin">
		<table border="1" class="tableadmin1">
			<tr>
				<th>id</th>
				<th>Họ Tên Khách Hàng</th>
				<th>Địa Chỉ </th>
				<th>Số Điện Thoại</th>
				<th>Số Lượng</th>
				<th>Tên Sản Phẩm</th>
				<th>Giá Tiền</th>
				<th colspan="2">chỉnh sửa</th>
			</tr>
			<?php 
	   while ($r = mysqli_fetch_array($query11)) {
      ?>
			<tr>
				<td><?php echo $r['id']; ?></td>
				<td><?php echo $r['hotenkh']; ?></td>
				<td><?php echo $r['diachi']; ?></td>
				<td><?php echo $r['sdt']; ?></td>
				<td><?php echo $r['soluong']; ?></td>
				<td><?php echo $r['tensp']; ?></td>
				<td><?php echo $r['giatien']; ?></td>
				<td style="width: 120px"><a style="background: red;border-radius: 3px;padding: 6px ; " target="_blank" <?php echo "href='inhoadon.php?&id=".$r['id']."'"; ?>>in hóa đơn</a></td>
				<td><a style="background: red;border-radius: 3px;padding: 6px" <?php echo "href='xoadonhang.php?&id=".$r['id']."'"; ?>>Xóa</a></td>
			</tr>

		<?php }?>
		</table>
	</div>
</div>

