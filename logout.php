<?php
define('LOGOUT', true);
include('config/constants.php'); // Bao gồm file constants.php

// Xóa toàn bộ session
session_unset(); // Xóa tất cả các biến session
session_destroy(); // Hủy session

// Xóa cookie của session
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
}

// Debug: Kiểm tra xem session đã bị hủy chưa
// echo "Session đã bị hủy.";
// exit();
// Chuyển hướng về trang đăng nhập
header('Location:'.SITEURL.'index_login.php');
exit();
?>