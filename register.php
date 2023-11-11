<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/register.css">
    <title>
      
        Sửa tươi</title>
</head>
<body>
<header>
        <div id="registerForm" class="login-form-container">
                            <!-- Your registration form HTML goes here -->
                            <!-- Example: -->
                            <div class="login-form" >
                                <form action="register.php" method="post" onsubmit="registerUser(); return false;" id="registerForm" >
                                <label for="user"> <b>Tên đầy đủ</b></label> 
                                <br>
                                <input autocomplete="off" type="text" id="username" name="user" style="width: 333px; height: 30px;padding-left: 5px; border-radius: 5px; " placeholder="VD:Quang Sơn">
                                <br>
                                <label for="email"><b>Email</b></label>
                                <br>
                                <input autocomplete="off" type="email" id="email" name="email" style="width: 333px; height: 30px;padding-left: 5px; border-radius: 5px;  " placeholder="VD: Email@gmail.com">
                                <br>
                                <label for="pass1"><b>Mật Khẩu</b></label>
                                <br>
                                <input autocomplete="off" type="password" id="pass1" name="pass1" style="width: 333px; height: 30px;padding-left: 5px; border-radius: 5px;  " placeholder=" Nhập mật khẩu">
                                <br>
                                <label for="pass2"><b>Nhập Lại Mật Khẩu</b></label >
                                <br>
                                <input autocomplete="off" type="password" id="pass2" name="pass2" style="width: 333px; height: 30px;padding-left: 5px; border-radius: 5px;  " placeholder="Nhập lại mật khẩu">
                                <br>
                                <input autocomplete="off"  class="footer" type="submit" value="Đăng kí">
                                <div id="error-message" class="error-message" style="color: red;font-size: 18px;"></div>
                                <div id="success-message" class="success-message" style="color: blue;font-size: 18px;"></div>
                                
                            </div>
                        </div>
                        <?php
                            $servername = "localhost";
                            $username = "root";
                            $password_db = ""; // Thay bằng mật khẩu của bạn
                            $dbname = "register";

                            $conn = new mysqli($servername, $username, $password_db, $dbname);

                            if ($conn->connect_error) {
                                die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
                            }

                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                $user = $_POST['user'];
                                $email = $_POST['email'];
                                $pass1 = $_POST['pass1'];
                                $pass2 = $_POST['pass2'];

                                if ($pass1 === $pass2) {
                                    // Băm mật khẩu trước khi lưu vào cơ sở dữ liệu
                                    
                                    // $hashed_password = password_hash($pass1, PASSWORD_DEFAULT);

                                    // Sử dụng Prepared Statements để tránh SQL Injection
                                    $stmt = $conn->prepare("INSERT INTO user (username, email, password) VALUES (?, ?, ?)");
                                    $stmt->bind_param("sss", $user, $email, $pass1); // Sử dụng mật khẩu người dùng dưới dạng văn bản thô


                                    if ($stmt->execute()) {
                                        echo '<script>alert("Đăng ký thành công. Chuyển hướng đến trang đăng nhập...");</script>';
                                        echo '<script>window.location.href = "login.php";</script>';
                                    } else {
                                        echo '<div class="error-message">Lỗi: ' . $stmt->error . '</div>';
                                    }
                                    

                                    // Đóng kết nối cơ sở dữ liệu
                                    $stmt->close();
                                } else {
                                    echo '<script>document.getElementById("error-message").innerText = "tài khoản hoặc mật khẩu không khớp";</script>';
                                }
                            }

                            $conn->close();
                            ?>
                             <script>
                                // Lấy biểu mẫu và thông báo lỗi
                                const myForm = document.getElementById("myForm");
                                const errorMessage = document.getElementById("error-message");

                                // Gắn sự kiện submit vào biểu mẫu
                                myForm.addEventListener("submit", function (event) {
                                    // Ngăn chặn sự kiện submit mặc định
                                    event.preventDefault();

                                    // Lấy giá trị trường mật khẩu và xác nhận mật khẩu
                                    const password1 = document.getElementById("pass1").value;
                                    const password2 = document.getElementById("pass2").value;

                                    // So sánh mật khẩu và xác nhận mật khẩu
                                    if (password1 !== password2) {
                                        errorMessage.innerText = "Mật khẩu và xác nhận mật khẩu không khớp.";
                                    } else {
                                        // Gửi dữ liệu đăng ký
                                        myForm.submit();
                                    }
                                });
                            </script>

    </header>
</body>
</html>


