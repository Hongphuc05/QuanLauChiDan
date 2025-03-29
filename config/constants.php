<?php
// Chỉ khởi tạo session nếu chưa được khởi tạo
if (session_status() == PHP_SESSION_NONE && !defined('LOGOUT')) {
      session_start();
}

// Tạo các hằng số
if (!defined('SITEURL')) define('SITEURL', 'http://localhost/frontend/');
if (!defined('LOCALHOST')) define('LOCALHOST', 'localhost');
if (!defined('DB_USERNAME')) define('DB_USERNAME', 'root');
if (!defined('DB_PASSWORD')) define('DB_PASSWORD', '');
if (!defined('DB_NAME')) define('DB_NAME', 'quanlauchidan');

// Kết nối cơ sở dữ liệu
$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_connect_error());
$db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_connect_error());
