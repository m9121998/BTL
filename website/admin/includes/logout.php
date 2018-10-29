<?php
session_start();

if(isset($_SESSION['username'])){
    unset($_SESSION['username']);
    header('location: ../../dang-nhap.php');
  }else{
    header('location: ../../dang-nhap.php');
}
?>
