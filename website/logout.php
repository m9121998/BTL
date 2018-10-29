<?php
session_start();

if(isset($_SESSION['us']) && $_SESSION['us'] != NULL){

   //kiểm tra nếu có session tên us thì xóa nó đi
    unset($_SESSION['us']);
    echo 'Bạn đã đăng xuất thành công.';
}

?>
