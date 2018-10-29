<?php session_start() ?>

 <?php include "includes/headeradmin.php" ?>
<?php require_once("includes/connection.php");?>
<?php include("includes/permission.php");?>
<?php
	if (isset($_POST["btn_submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$id = $_POST["id"];
		$name = $_POST["fullname"];

		if ($id == "" || $name == "" ) {
			echo "Bạn cần điền đầy đủ thông tin !";
		}else{
			// Viết câu lệnh lấy thông tin người dùng
			$sql = "INSERT INTO users (id ,username, password, fullname, email, permision, is_block, createdate) VALUES ('$id''$username', '$password', '$name', '$email', '$permission', '$is_block', now())";
			// thực thi câu $sql với biến conn lấy từ file connection.php
			mysqli_query($conn,$sql);
			echo "Chuyển sinh viên thành công";
		}
	}

?>
	<!DOCTYPE html>
	<html lang="en" dir="ltr">
		<head>
			<meta charset="utf-8">
			<title>Thêm thành viên vào lớp học</title>
		</head>
		<body>
			<form action="them-thanh-vien.php" method="post" align="center">
				<table align="center" border="1px" style="color:blue;">
					<tr>
						<td colspan="2">
							<h3>Thêm học viên</h3>
						</td>
					</tr>
					<tr>
						<td nowrap="nowrap">ID :</td>
						<td><input type="text" name="ID" id="id" value="" ></td>
					</tr>
					<tr>
						<td nowrap="nowrap">Họ tên :</td>
						<td><input type="text" name="fullname" id="name" value="" ></td>
					</tr>
						<tr>
						<td colspan="2" align="center"><input type="submit" name="btn_submit" value="Thêm thành viên"></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><a href="cac-khoa-hoc.php">Quay về trang khóa học</td>
					</tr>
				</table>
			</form>
			<table border="1px;" align="center">
				<thead>
					<tr>
						<td bgcolor="#E6E6FA">ID</td>
						<td bgcolor="#E6E6FA">Username</td>
						<td bgcolor="#E6E6FA">Email</td>
						<td bgcolor="#E6E6FA">Điểm số</td>
						<td bgcolor="#E6E6FA">Hành động</td>
					<tr>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $data['username']; ?></td>
							<td><?php echo $data['email']; ?></td>
							<td><?php echo $data['diem_so']; ?></td>
							<td>
								<a href="chinh-sua-thanh-vien.php?id=<?php echo $id;?>">Sửa</a>
								<a href="quan-ly-thanh-vien.php?id_delete=<?php echo $id;?>">Xóa</a>
							</td>
						</tr>
				</thead>
			</body>
	</html>
