<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);


    // Thực hiện kiểm tra thông tin đăng nhập ở đây
    if (empty($username) || empty($password)) {
        echo "Tên đăng nhập và mật khẩu không được để trống";
    } else {
        // Kết nối đến cơ sở dữ liệu (thay đổi thông số kết nối dựa trên cấu hình của bạn)
        $servername = "localhost";
        $db_username = "root";
        $db_password = ""; // Thay "your_db_password" bằng mật khẩu của tài khoản MySQL
        $dbname = "register";

        $conn = new mysqli($servername, $db_username, $db_password, $dbname);

        if ($conn->connect_error) {
            echo "Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error;
        } else {
            // Kiểm tra thông tin đăng nhập
            $stmt = $conn->prepare("SELECT * FROM user WHERE username = ?");
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                $stored_password = $row['password'];
                

                if ($password==$stored_password) {
                    
                    // Đăng nhập thành công
                    $_SESSION['logged_in'] = true;
                    echo "success";
                    

                } else {
                    
                    echo "Mật khẩu không đúng";
                }
            } else {
                echo "Tên đăng nhập hoặc mật khẩu không đúng";
            }

            $stmt->close();
            $conn->close();
        }
    }
}
?>
