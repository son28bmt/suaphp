<?php
    if (isset($_SESSION['user_id'])) {
        // Người dùng đã đăng nhập, bạn có thể sử dụng $_SESSION['user_id'] để lấy ID người dùng
        $user_id = $_SESSION['user_id'];
        $username = $_SESSION['username'];
        // Thực hiện các hành động khi người dùng đã đăng nhập
    } else {
        // Người dùng chưa đăng nhập, thực hiện các hành động khi người dùng chưa đăng nhập
    }
    
?>
