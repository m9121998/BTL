<?php
    //kết nối vói database
    $connect = mysqli_connect("localhost", "root", "", "baitaplon");
    if(! $connect){
      echo " Kết nối không thành công!";
    }
    else {
      mysqli_set_charset($connect,'utf8');
    }

    if (isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT,array('min_range'=>1)))
    {
      $id = $_GET['id'];
      $query = "DELETE FROM sinhvien WHERE MaSV = {$id}";
      $result = mysqli_query($connect,$query)
        or die("Query {$query} \n <br/> MySQL error:".mysqli_error($connect));

      //khi xóa xong sẽ trở vê trang đầu
      header('Location: DS_sinhvien.php');
    }
    else {
      header('Location: DS_sinhvien.php');
    }
?>
