<?php
	session_start();
 ?>

 <?php include "includes/headeradmin.php" ?>
<?php require_once("includes/connection.php");?>
<?php include("includes/permission.php");?>

<?php
	$sql = "SELECT * FROM posts";
	$query = mysqli_query($conn,$sql);
?>
<?php
	if (isset($_GET["id_delete"])) {
		$sql = "DELETE FROM posts WHERE id = ".$_GET["id_delete"];
		mysqli_query($conn,$sql);
	}

?>
<table border="1px;" align="center">
	<thead>
		<tr>
			<td bgcolor="#E6E6FA">ID</td>
			<td bgcolor="#E6E6FA">tiêu đề</td>
			<td bgcolor="#E6E6FA">giới thiệu</td>
			<td bgcolor="#E6E6FA">tài nguyên</td>
			<td bgcolor="#E6E6FA">Hành động</td>
		<tr>
	</thead>
	<tbody>
	<?php
		while ( $data = mysqli_fetch_array($query) ) {
			$i = $data['id'] ;
			$id = $data['id'];
	?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $data['title']; ?></td>
			<td><?php echo $data['content']; ?></td>
			<td>
					<a href="<?php echo $data['tai_nguyen'];?>"><?php echo $data['tai_nguyen'];?>"</a>
			</td>
			<td>
				<a href="them-thanh-vien-vao-khoa-hoc.php?id=<?php echo $id;?>">Thêm học viên</a>
				<a href="cac-khoa-hoc.php?id_delete=<?php echo $id;?>">Xóa</a>
			</td>
		</tr>
	<?php
			$i++;
		}
	?>
	</tbody>
</table>
