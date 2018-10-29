<?php
	session_start();
 ?>
<?php require_once("includes/connection.php");?>
<?php include("includes/permission.php");?>
<?php include ("includes/headeradmin.php"); ?>
<?php
	if (isset($_POST["btn_submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$title = $_POST["title"];
		$content = $_POST["post_content"];
		$tai_nguyen = $_POST["tai_nguyen"];
		$is_public = 0;
		if (isset($_POST["is_public"])) {
			$is_public = $_POST["is_public"];
		}

		$user_id = $_SESSION["user_id"];

		$sql = "INSERT INTO posts(title, content, user_id, is_public, tai_nguyen , createdate, updatedate ) VALUES ( '$title', '$content', '$user_id', '$is_public', '$tai_nguyen', now(), now())";
		// thực thi câu $sql với biến conn lấy từ file connection.php
		mysqli_query($conn,$sql);
		echo "Bài viết đã thêm thành công";
	}

?>

<form action="them-bai-viet-ck.php" method="post">
	<table align="center">
		<tr>
			<td colspan="2"><h3>Thêm khóa học mới</h3></td>
		</tr>
		<tr>
			<td nowrap="nowrap">Tiêu đề bài viết :</td>
			<td><input type="text" id="title" name="title"></td>
		</tr>
		<tr>
			<td nowrap="nowrap">Nội dung :</td>
			<td><textarea name="post_content" id="post_content" rows="10" cols="150"></textarea></td>
		</tr>
		<tr>
			<td nowrap="nowrap">tài nguyên :</td>
			<td><textarea type="text" name="tai_nguyen" id="tai_nguyen" rows="10" cols="150"></textarea></td>
		</tr>
		<tr>
			<td nowrap="nowrap">Public bài viết ? :</td>
			<td><input type="checkbox" id="is_public" name="is_public" value="1"> public</td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="btn_submit" value="Thêm bài viết"></td>
		</tr>

	</table>

</form>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'post_content' );
</script>
<?php include "includes/footer.php" ?>
