<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "includes/backend/head.php" ?>

    <style media="screen">
      .required{
        color: red;
      }
    </style>

</head>

<body>

    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <?php include "includes/backend/top_header.php" ?>

          <?php include"includes/backend/menu.php" ?>
        </nav>

        <div id="page-wrapper">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <h1 class="page-header"> <a href="DS_sinhvien.php">Danh sách</a></h1>
                  <ol class="breadcrumb">
                   <li class="active">
                      <i class="fa fa-dashboard"></i> Dashboard
                    </li>
                  </ol>


                  <div class="content">
                    <?php
                      //kết nối vói database
                      $connect = mysqli_connect("localhost", "root", "", "baitaplon");
                      if(! $connect)
                      {
                        echo "<p class='required'>Kết nối không thành công!</p>";
                      }
                      else {
                        mysqli_set_charset($connect,'utf8');
                      }
                      //kiểm tra ID có phải là int hay k?
                      if (isset($_GET['id']) && filter_var($_GET['id'],FILTER_VALIDATE_INT,array('min_range'=>1)))
                      {
                        $id = $_GET['id'];
                      }
                      else {
                        header('Location : DS_sinhvien.php');
                        exit();
                      }

                      if($_SERVER['REQUEST_METHOD']=='POST')
                      {
                        //kiểm tra lỗi khi nhập dữ liệu
                        $errors = array();
                            //mã sinh viên
                        if(empty($_POST['MaSV']))
                        {
                          $errors[]='MaSV';
                        }
                        else {
                          $MaSV = $_POST['MaSV'];
                        }
                            //tên sinh viên
                        if(empty($_POST['TenSV']))
                        {
                          $errors[] = 'TenSV';
                        }
                        else {
                          $TenSV[] = $_POST['TenSV'];
                        }

                          //mã lớp học
                        if(empty($_POST['MaLop']))
                        {
                          $errors[]='MaLop';
                        }
                        else {
                          $MaLop = $_POST['MaLop'];
                        }

                        
                        $MaSV= $_POST['MaSV'];
                        $TenSV = $_POST['TenSV'];
                        $MaLop= $_POST['MaLop'];
                        $Diem= $_POST['Diem'];
                       
                        if(empty($errors))
                        {
                          $query = "UPDATE sinhvien
                                    SET MaSV = '{$MaSV}',
                                        TenSV ='{$TenSV}',
                                        MaLop ='{$MaLop}',
                                        Diem = '{$Diem}'
                                        
                                    WHERE
                                        MaSV={$id} ";

                          $result = mysqli_query($connect, $query)
                              or die ("Quyery {$query} \n <br/>
                              Mysqlerrors:" .mysqli_error($connect));

                          if (mysqli_affected_rows($connect)==1){
                            echo "<p style='color:green;'>Sửa thành công!</p>";
                          }
                          else {
                            echo "<p class='required'>Sửa không thành công!</p>";
                          }
                        }
                        else {
                          $message ="<p class='required'>Bạn hãy nhập đầy đủ thông tin!</p>";
                        }
                      }

                      $query_id = " SELECT MaSV,TenSV,MaLop,Diem FROM sinhvien WHERE MaSV={$id}";
                      $result_id = mysqli_query($connect,$query_id)
                            or die("Query {$query} \n <br/> MySQL error:".mysqli_error($connect));

                            //kiểm tra ID có tồn tại hay k?
                      if(mysqli_num_rows($result_id)==1)
                      {
                        list($MaSV,$TenSV,$MaLop,$Diem)=mysqli_fetch_array($result_id,MYSQLI_NUM);
                      }
                      else {
                        echo $message="<p class='required'>Mã sinh viên không tồn tại!</p>";
                      }
                     ?>
                     <from name ="frmadd_sinhvien" method="POST">
                       <?php
                          if (isset($message)) {
                            echo $message;
                          }
                        ?>
                    <form name="frmadd_sinhvien" method="POST">
                      <div class="from-group">
                        <h3 style='color:green;'>Sửa sinh viên: <?php if(isset($MaSV)){echo $MaSV;} ?></h3>
                        <label for="">Mã sinh viên</label> <br>
                        <input type="text" name="MaSV" value="<?php if(isset($MaSV)){echo $MaSV;} ?>"class="form-control" placeholder="Mã sinh viên"><br>
                        <?php
                          if(isset($errors) && in_array('MaSV',$errors))
                          {
                            echo "<p class='required'>Bạn chưa nhập mã sinh viên!</p>";
                          }
                         ?>
                      </div>
                      <div class="from-group">
                        <label for="">Tên sinh viên</label> <br>
                        <input type="text" name="TenSV" value="<?php if(isset($TenSV)){echo $TenSV;} ?>"class="form-control" placeholder="Tên sinh viên"><br>
                        <?php
                          if(isset($errors) && in_array('TenSV',$errors))
                          {
                            echo "<p class='required'>Bạn chưa nhập tên sinh viên!</p>";
                          }
                         ?>
                      </div>
                      
                      <div class="from-group">
                        <label for="">Mã lớp</label> <br>
                        <input type="text" name="MaLop" value="<?php if(isset($MaLop)){echo $MaLop;} ?>"class="form-control" placeholder="Mã lớp học"><br>
                        <?php
                          if(isset($errors) && in_array('MaLop',$errors))
                          {
                            echo "<p class='required'>Bạn chưa nhập mã lớp học!</p>";
                          }
                         ?>
                      </div>

                      <div class="from-group">
                        <label for="">Điểm</label> <br>
                        <input type="text" name="Diem" value="<?php if(isset($Diem)){echo $Diem;} ?>"class="form-control" placeholder="Điểm"><br>
                        <?php
                          if(isset($errors) && in_array('Diem',$errors))
                          {
                            echo "<p class='required'>Bạn chưa nhập điểm!</p>";
                          }
                         ?>
                      </div>
                        <div class="from-group">
                          <input type="submit" name="submit" class="btn btn-primary" value="Sửa sinh viên">
                        </div>
                    </form>
                
        
              </div>
            </div>
          </div>
            <?php include "includes/backend/footer.php" ?>
         </div>
      </div>

</body>
</html>




