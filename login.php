<?php
session_start();

        if (isset($_SESSION['registration_success'])) {
            echo '<div class="success-message">' . $_SESSION['registration_success'] . '</div>';
            unset($_SESSION['registration_success']); // Xóa thông báo sau khi hiển thị
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];
        
            // Kết nối đến cơ sở dữ liệu
            $servername = "localhost";
            $db_username = "root";
            $db_password = ""; // Thay "your_db_password" bằng mật khẩu của tài khoản MySQL
            $dbname = "register";
        
            $conn = new mysqli($servername, $db_username, $db_password, $dbname);
        
            if ($conn->connect_error) {
                die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
            }
        
            if (empty($username) || empty($password)) {
                echo '<script>document.getElementById("error-message").innerText = "Tên đăng nhập và mật khẩu không được để trống";</script>';
            } else {
                // Kiểm tra thông tin đăng nhập
                $stmt = $conn->prepare("SELECT * FROM user WHERE username = ?");
                $stmt->bind_param("s", $username);
                $stmt->execute();
                $result = $stmt->get_result();
        
                if ($result->num_rows == 1) {
                    $row = $result->fetch_assoc();
                    $stored_password = $row['password'];
        
                    if (password_verify($password, $stored_password)) {
                        // Người dùng đã đăng nhập thành công
                        $_SESSION['logged_in'] = true;
                        echo '<script>alert("Đăng Nhập thành công");</script>';
                        echo '<script>window.location.href = "user.php";</script>';
                    } else {
                        echo '<script>document.getElementById("error-message").innerText = "Mật khẩu không đúng";</script>';
                    }
                } else {
                    echo '<script>document.getElementById("error-message").innerText = "Tên đăng nhập hoặc mật khẩu không đúng";</script>';
                }
                $stmt->close();
            }
            $conn->close();
        }

        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/login.css">
    <title>Sữa tươi</title>
</head>
<body>
<header>
    <div id="loginForm" class="login-form-container">
        <!-- Your login form HTML goes here -->
        <!-- Example: -->
        <h1>Thông Tin Đăng Nhập</h1>
        <div class="login-form">
            <form action="login.php" method="post" onsubmit="return false;">
                <label for="user"><b>Username</b></label><br>
                <input autocomplete="off" type="text" name="username" id="username" placeholder="Tên đăng nhập" style="width: 333px; height: 30px; padding-left: 5px; border-radius: 5px;"><br>
                <label for="pass1"><b>Mật Khẩu</b></label><br>
                <input autocomplete="off" type="password" name="password" id="password" placeholder="Mật khẩu" style="width: 333px; height: 30px; padding-left: 5px; border-radius: 5px;"><br>
                <input class="footer" type="submit" value="Đăng nhập" id="loginButton">
            </form>
            <div id="error-message" class="error-message" style="color: red; font-size: 18px;"></div>
            <div id="success-message" class="success-message" style="color: blue; font-size: 18px;"></div>
        </div>
        <!-- <script>
            function loginUser() {
            // Lấy giá trị tên đăng nhập và mật khẩu từ các trường input
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            // Thực hiện kiểm tra thông tin đăng nhập ở đây
            if (username === "your_username" && password === "your_password") {
                // Đăng nhập thành công, thực hiện các hành động sau khi đăng nhập
                alert("Đăng nhập thành công");
                // Chuyển hướng đến trang "user.php" hoặc thực hiện hành động khác
            } else {
                // Đăng nhập không thành công, hiển thị thông báo lỗi
                document.getElementById("error-message").innerText = "Lỗi: Tên đăng nhập hoặc mật khẩu không đúng";
            }
        }

        </script> -->
        
    </div>
    
    <script>
         document.getElementById("loginForm").addEventListener("submit", function (event) {
            event.preventDefault(); // Ngăn chặn hành động mặc định của nút "Submit"

            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            // Sử dụng XMLHttpRequest hoặc Fetch API để gửi yêu cầu đăng nhập đến máy chủ
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "process_login.php", true); // Thay "process_login.php" bằng tệp xử lý tương ứng trên máy chủ của bạn
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        var response = xhr.responseText;
                        if (response === "success") {
                            alert("Đăng nhập thành công.");
                            
                            window.location.href = "user.php"; // Đăng nhập thành công, chuyển hướng đến trang "user.php"
                        } else {
                            document.getElementById("error-message").innerText = "Lỗi: " + response; // Hiển thị lỗi từ máy chủ
                        }
                    }
                }
            };

            var data = "username=" + encodeURIComponent(username) + "&password=" + encodeURIComponent(password);
            xhr.send(data);
        });

    </script>
</header>
</body>
</html>
