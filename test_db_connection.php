<?php
// Thông tin kết nối cơ sở dữ liệu
$servername = "localhost"; // Hoặc địa chỉ IP của máy chủ
$username = "root"; // Tên người dùng MySQL (thường là 'root' trên XAMPP)
$password = ""; // Mật khẩu MySQL (thường để trống trên XAMPP)
$database = "quanlauchidan"; // Tên cơ sở dữ liệu của bạn

// Kết nối đến cơ sở dữ liệu
$conn = mysqli_connect($servername, $username, $password, $database);

// Kiểm tra kết nối
if (!$conn) {
      die("Kết nối thất bại: " . mysqli_connect_error());
} else {
      echo "Kết nối thành công đến cơ sở dữ liệu!";
}

// Đóng kết nối (không bắt buộc, nhưng nên làm)
mysqli_close($conn);
