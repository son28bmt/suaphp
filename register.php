<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ biểu mẫu
    $user = $_POST['loginUser'];
    $email = $_POST['email'];
    $password = $_POST['pass1']; // Đảm bảo rằng bạn đã sử dụng trường pass1 cho mật khẩu

    // Thực hiện kết nối đến cơ sở dữ liệu (sử dụng thông tin kết nối của bạn)
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "ten_database";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
    }

    // Thực hiện truy vấn để chèn thông tin người dùng vào cơ sở dữ liệu
    $sql = "INSERT INTO users (username, email, password) VALUES ('$user', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Đăng ký thành công!";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }

    // Đóng kết nối cơ sở dữ liệu
    $conn->close();
}
?>
