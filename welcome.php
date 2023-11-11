<?php
session_start(); // Bắt đầu phiên làm việc

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // Người dùng đã đăng nhập, hiển thị nội dung chào mừng ở đây
    echo "Chào mừng, bạn đã đăng nhập thành công!";
} else {
    header("Location: login.php"); // Nếu chưa đăng nhập, chuyển hướng người dùng đến trang đăng nhập
    exit();
}
?>
