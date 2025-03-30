<?php
include(__DIR__ . '/constants.php');  // Bao gồm file constants.php

// Kiểm tra nếu người dùng chưa đăng nhập
if (!isset($_SESSION['user_name'])) {
    // Chuyển hướng về trang đăng nhập
    header('Location: ' . SITEURL . 'index_login.php');
    exit(); // Dừng thực thi mã PHP sau khi chuyển hướng
}
?>