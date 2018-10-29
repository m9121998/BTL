<?php

session_start();


if(isset($_POST['btnSend'])){
    //nếu có sự kiện click vào nút đăng nhập thì xử lý

    $username = $_POST['uName'];
    //uName là tên của input người dùng nhập vào

    $password = $_POST['pWord'];
    //pWord là tên của input người dùng nhập vào

    if($username == 'admin' && $password == '123456'){
        echo 'Bạn đã đăng nhập thành công';
        $_SESSION['us'] = $username;
    }else{
        echo 'Đăng nhập thất bại, tài khoản hoặc mật khẩu chưa chính xác.';
    }
}
?>
