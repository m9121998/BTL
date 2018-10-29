<?php
    include('functions.php');

    if (!isAdmin()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: dangnhap.php');
    }

?>

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
         <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success" >
                <h3>
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php">QUẢN TRỊ HỆ THỐNG</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">


            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                     <?php  if (isset($_SESSION['user'])) : ?>
                    <i class="fa fa-user"></i>
                    <strong><?php echo $_SESSION['user']['username']; ?></strong> <b class="caret"></b>
                    <small>
                        <i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>

                    </small>

                <?php endif ?>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    <li>
                        <a href="create_user.php"><i class="fa fa-fw fa-gear"></i>+ add user</a>
                    </li>

                    <li>
                        <a href="home.php?logout='1'" ><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>


          <?php include"includes/backend/menu.php" ?>
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                           <h1 class="page-header"> <a href="DS_sinhvien.php">Danh sách</a></h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>

            <?php
              //kết nối vói database
              $connect = mysqli_connect("localhost", "root", "", "website");
              if(! $connect)
              {
                echo "<p class='required'>Kết nối không thành công!</p>";
              }
              else {
                mysqli_set_charset($connect,'utf8');
              }


              if($_SERVER['REQUEST_METHOD']=='POST')
              {
                //kiểm tra lỗi khi nhập dữ liệu

                    //kiểm tra mã sinh viên
                $errors = array();
                if(empty($_POST['MaSV']))
                {
                  $errors[]='MaSV';
                }
                else {
                  $MaSV[]= $_POST['MaSV'];
                }

                    //kiểm tra tên sinh viên
                if(empty($_POST['TenSV']))
                {
                  $errors[] = 'TenSV';
                }
                else {
                  $TenSV[] = $_POST['TenSV'];
                }

                  //kiểm tra mã lớp học của sinh viên
                if(empty($_POST['MaLop']))
                {
                  $errors[] = 'MaLop';
                }
                else
                {
                  $MaLop[] = $_POST['MaLop'];
                }

                 //kiểm tra điểm
                if(empty($_POST['Diem']))
                {
                  $errors[] = 'Diem';
                }
                else {
                  $Diem[] = $_POST['Diem'];
              }

                $MaSV = $_POST['MaSV'];
                $TenSV = $_POST['TenSV'];

                $MaLop = $_POST['MaLop'];
                $Diem = $_POST['Diem'];

                if(empty($errors))
                {
                  $query = "INSERT INTO sinhvien(MaSV,TenSV,MaLop,Diem)
                                    VALUES('{$MaSV}','{$TenSV}','{$MaLop}','{$Diem}')";
                  $result = mysqli_query($connect, $query)
                      or die ("Query {$query} \n <br/>
                      Mysqlerrors:" .mysqli_error($connect));

                  if (mysqli_affected_rows($connect)==1){
                    echo "<p style='color:green;'>Thêm mới thành công!</p>";
                  }
                  else {
                    echo "<p class='required'>Thêm mới không thành công!</p>";
                  }
                }
                else {
                  $message ="<p class='required'>Bạn hãy nhập đầy đủ thông tin!</p>";
                }
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
                            <h3 style='color:green;'>THÊM MỚI SINH VIÊN</h3>
                            <label for="">Nhập mã sinh viên</label> <br>
                            <input type="text" name="MaSV" value="<?php if(isset($_POST['MaSV'])){echo $_POST['MaSV'];} ?>"  class="form-control" placeholder="Nhập mã sinh viên">
                            <?php
                                  if(isset($errors) && in_array('MaSV',$errors))
                                  {
                                    echo "<p class='required'>Bạn chưa nhập mã sinh viên!</p>";
                                  }
                                ?>
                                <br>
                        </div>

                        <div class="from-group">
                            <label for="">Nhập tên sinh viên</label> <br>
                            <input type="text" name="TenSV" value="<?php if(isset($_POST['TenSV'])){echo $_POST['TenSV'];} ?>" class="form-control" placeholder="Nhập tên sinh viên">
                                 <?php
                                  if(isset($errors) && in_array('TenSV',$errors))
                                  {
                                    echo "<p class='required'>Bạn chưa nhập tên sinh viên!</p>";
                                  }
                                ?>
                                <br>
                        </div>

                        <div class="from-group">
                            <label for="">Nhập mã lớp học của sinh viên</label> <br>
                            <input type="text" name="MaLop" value="<?php if(isset($_POST['MaLop'])){echo $_POST['MaLop'];} ?>" class="form-control" placeholder="Nhập mã lóp học">
                            <?php
                                  if(isset($errors) && in_array('MaLop',$errors))
                                  {
                                    echo "<p class='required'>Bạn chưa nhập mã lớp học!</p>";
                                  }
                                ?>
                                <br>
                        </div>

                        <div class="from-group">
                            <label for="">Nhập điểm của sinh viên</label> <br>
                            <input type="text" name="Diem" value="<?php if(isset($_POST['Diem'])){echo $_POST['Diem'];} ?>" class="form-control" placeholder="Nhập điểm">
                            <?php
                                  if(isset($errors) && in_array('Diem',$errors))
                                  {
                                    echo "<p class='required'>Bạn chưa nhập điểm!</p>";
                                  }
                                ?>
                                <br>
                        </div>

                        <div class="from-group">
                          <input type="submit" name="submit" class="btn btn-primary" value="Thêm mới">
                        </div>
                    </from>

                    </div>
                </div>
            </div>
        </div>
      <?php include "includes/backend/footer.php" ?>
    </div>

</body>
</html>
