<?php
include('config/constants.php'); // Bao gồm file constants.php
include('config/login-check.php'); // Kiểm tra đăng nhập

// Kiểm tra nếu có session nào tồn tại
if (!empty($_SESSION)) {
      echo "<h1>Các session hiện tại:</h1>";
      echo "<pre>";
      echo($_SESSION); // In ra tất cả các session
      echo "</pre>";
} else {
      echo "<h1>Không có session nào tồn tại.</h1>";
}
